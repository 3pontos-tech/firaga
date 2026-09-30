<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\StoreLeadRequest;
use App\Jobs\SyncLeadWithGoHighLevel;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Throwable;

class LeadController extends Controller
{
    public const string WHATSAPP_DESTINATION_PATTERN = '#^https://(api\.whatsapp\.com/send|wa\.me/)#';

    /**
     * Only queues the CRM sync, so the visitor is never held back from WhatsApp by
     * GoHighLevel latency or downtime. Resubmissions of the same flow are ignored.
     */
    public function store(StoreLeadRequest $request): JsonResponse
    {
        // Bots get the same 202 as people, so the honeypot is not revealed.
        if ($request->isFromBot()) {
            Log::info('Lead dropped by the honeypot.', ['submission_id' => $request->input('submission_id')]);

            return response()->json(['status' => 'accepted'], 202);
        }

        $lead = $request->toLeadData();

        if ($lead->context === 'modal' && !preg_match(self::WHATSAPP_DESTINATION_PATTERN, (string) $request->input('destination'))) {
            Log::warning('Lead capture modal fell back to the default WhatsApp link.', [
                'submission_id' => $lead->submissionId,
                'origin_page' => $lead->originPage,
                'origin_label' => $lead->originLabel,
                'destination' => $request->input('destination'),
            ]);
        }

        $submissionKey = 'leads:submission:'.$lead->submissionId;

        if (Cache::add($submissionKey, true, now()->addDay())) {
            try {
                dispatch(new SyncLeadWithGoHighLevel($lead));
            } catch (Throwable $exception) {
                // Frees the key so the browser's resend can still queue this lead.
                Cache::forget($submissionKey);

                throw $exception;
            }
        }

        return response()->json(['status' => 'accepted'], 202);
    }
}

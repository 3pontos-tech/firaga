<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\StoreLeadRequest;
use App\Jobs\SyncLeadWithGoHighLevel;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class LeadController extends Controller
{
    public const string WHATSAPP_DESTINATION_PATTERN = '#^https://(api\.whatsapp\.com/send|wa\.me/)#';

    /**
     * Only queues the CRM sync, so the visitor is never held back from WhatsApp by
     * GoHighLevel latency or downtime. Resubmissions of the same flow are ignored.
     */
    public function store(StoreLeadRequest $request): JsonResponse
    {
        $lead = $request->toLeadData();

        if ($lead->context === 'modal' && !preg_match(self::WHATSAPP_DESTINATION_PATTERN, (string) $request->input('destination'))) {
            Log::warning('Lead capture modal fell back to the default WhatsApp link.', [
                'submission_id' => $lead->submissionId,
                'origin_page' => $lead->originPage,
                'origin_label' => $lead->originLabel,
                'destination' => $request->input('destination'),
            ]);
        }

        if (Cache::add('leads:submission:'.$lead->submissionId, true, now()->addDay())) {
            dispatch(new SyncLeadWithGoHighLevel($lead));
        }

        return response()->json(['status' => 'accepted'], 202);
    }
}

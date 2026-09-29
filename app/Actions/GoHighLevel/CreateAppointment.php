<?php

declare(strict_types=1);

namespace App\Actions\GoHighLevel;

use App\Actions\Leads\LeadData;
use Carbon\CarbonImmutable;
use Illuminate\Http\Client\RequestException;
use Illuminate\Support\Facades\Log;

class CreateAppointment
{
    public function __construct(private readonly GoHighLevelClient $client) {}

    /**
     * Books the contact request in the calendar dedicated to site leads. The slot is only
     * the visitor's shift preference, which is why free-slot and date-range validation
     * are bypassed: this must never point to a consultant's personal calendar.
     *
     * @throws RequestException
     */
    public function handle(string $contactId, LeadData $lead, CarbonImmutable $submittedAt): void
    {
        $calendarId = config('services.gohighlevel.calendar_id');

        if (blank($calendarId)) {
            Log::warning('GoHighLevel leads calendar is not configured; skipping appointment creation.', [
                'submission_id' => $lead->submissionId,
                'contact_id' => $contactId,
            ]);

            return;
        }

        $window = $lead->availability;

        $this->client->request()->post('/calendars/events/appointments', [
            'calendarId' => $calendarId,
            'locationId' => $this->client->locationId(),
            'contactId' => $contactId,
            'startTime' => $window->nextStartAfter($submittedAt)->toIso8601String(),
            'endTime' => $window->nextEndAfter($submittedAt)->toIso8601String(),
            'title' => sprintf('Pedido de contato (não confirmado) · %s · %s', $window->label(), $lead->firstName),
            'description' => sprintf(
                'Preferência de turno escolhida no site: %s. Horário derivado da janela, não combinado com a pessoa. Origem: %s (%s).',
                $window->label(),
                $lead->originPage ?: '/',
                $lead->originLabel ?: 'sem botão identificado',
            ),
            'appointmentStatus' => 'new',
            'ignoreFreeSlotValidation' => true,
            'ignoreDateRange' => true,
            'toNotify' => false,
        ])->throw();
    }
}

<?php

namespace App\Integrations\Requests;

class CreateAppointmentDTO implements \JsonSerializable
{
    public function __construct(
        public string $title,
        public string $calendarId,
        public string $locationId,
        public string $contactId,
        public string $startTime,
        public ?string $endTime = null,
        public ?string $meetingLocationType = null,
        public ?string $meetingLocationId = null,
        public ?bool $overrideLocationConfig = null,
        public ?string $appointmentStatus = null,
        public ?string $address = null,
        public ?bool $ignoreDateRange = null,
        public ?bool $toNotify = null,
        public ?bool $ignoreFreeSlotValidation = null,
        public ?string $rrule = null,
    ) {}

    public static function make(
        string $title,
        string $contactId,
        string $startTime,
        ?string $endTime = null,
        ?string $locationId = null,
        ?string $calendarId = null,
    ): self {
        return new self(
            title: $title,
            calendarId: $calendarId ?? config('services.highlevel.calendar', 'lAwKkZ3QFKKGSrFPTXNf'),
            locationId: $locationId ?? config('services.highlevel.location'),
            contactId: $contactId,
            startTime: $startTime,
            endTime: $endTime,
            meetingLocationId: 'gmeet'
        );
    }

    public function jsonSerialize(): array
    {
        return get_object_vars($this);
    }
}

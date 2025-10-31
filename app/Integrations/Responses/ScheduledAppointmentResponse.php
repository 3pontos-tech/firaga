<?php

namespace App\Integrations\Responses;

class ScheduledAppointmentResponse
{
    public function __construct(
        public string $id,
        public string $calendarId,
        public string $contactId,
        public string $title,
        public string $status,
        public string $appointmentStatus,
        public string $address,
        public bool $isRecurring,
        public string $traceId
    ) {}

    public static function make(array $payload): self
    {
        return new self(
            $payload['id'],
            $payload['calendarId'],
            $payload['contactId'],
            $payload['title'],
            $payload['status'],
            $payload['appoinmentStatus'],
            $payload['address'],
            $payload['isRecurring'],
            $payload['traceId']
        );
    }
}

<?php

namespace App\Integrations\Requests;

use Carbon\CarbonInterface;

class FetchCalendarSlotsDTO implements \JsonSerializable
{
    public function __construct(
        public string $calendarId,
        public CarbonInterface $startDate,
        public CarbonInterface $endDate,
        public ?string $timezone = null,
        public ?string $userId = null,
        public ?array $userIds = null
    ) {}

    public static function make(
        CarbonInterface $startDate,
        CarbonInterface $endDate,
        ?string $userId = null,
    ): self {
        return new self(
            calendarId: config('services.highlevel.calendar', 'lAwKkZ3QFKKGSrFPTXNf'),
            startDate: $startDate,
            endDate: $endDate,
            timezone: config('app.timezone', 'America/Sao_Paulo'),
            userId: $userId
        );

    }

    public function jsonSerialize(): array
    {
        $data = [
            'startDate' => $this->startDate->getTimestampMs(),
            'endDate' => $this->endDate->getTimestampMs(),
            'timezone' => $this->timezone,
        ];

        if ($this->userId !== null) {
            $data['userId'] = $this->userId;
        }

        if ($this->userIds !== null && $this->userIds !== []) {
            $data['userIds'] = $this->userIds;
        }

        return $data;
    }
}

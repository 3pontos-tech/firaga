<?php

namespace App\Integrations\Responses;

class OpportunityResponse
{
    public function __construct(
        public string $id,
        public string $name,
        public int|float|null $monetaryValue,
        public string $pipelineId,
        public string $pipelineStageId,
        public ?string $assignedTo,
        public ?string $status,
        public ?string $lastStatusChangeAt,
        public ?string $lastStageChangeAt,
        public string $createdAt,
        public string $updatedAt,
        public string $contactId,
        public bool $isAttribute,
        public ?string $locationId,
        public ?string $lastActionDate,
    ) {}

    public static function make(array $payload): self
    {
        return new self(
            $payload['id'],
            $payload['name'],
            $payload['monetaryValue'],
            $payload['pipelineId'],
            $payload['pipelineStageId'],
            $payload['assignedTo'],
            $payload['status'],
            $payload['lastStatusChangeAt'],
            $payload['lastStageChangeAt'],
            $payload['createdAt'],
            $payload['updatedAt'],
            $payload['contactId'],
            $payload['isAttribute'],
            $payload['locationId'],
            $payload['lastActionDate'],
        );
    }
}

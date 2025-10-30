<?php

namespace App\Integrations\Requests;

use JsonSerializable;

class UpsertOpportunityDTO implements JsonSerializable
{
    public function __construct(
        public string $pipelineId,
        public string $locationId,
        public string $contactId,
        public ?string $name,
        public ?string $status,
        public ?string $pipelineStageId,
        public ?int $monetaryValue,
        public ?string $assignedTo
    ) {}

    public static function make(string $contactId, string $name): self
    {
        return new self(
            pipelineId: config('services.highlevel.pipeline'),
            locationId: config('services.highlevel.location'),
            contactId: $contactId,
            name: $name,
            status: null,
            pipelineStageId: null,
            monetaryValue: null,
            assignedTo: null,
        );
    }

    public function jsonSerialize(): mixed
    {
        return [
            'pipelineId' => $this->pipelineId,
            'locationId' => $this->locationId,
            'contactId' => $this->contactId,
            'name' => $this->name,
            'status' => $this->status,
            'pipelineStageId' => $this->pipelineStageId,
            'monetaryValue' => $this->monetaryValue,
            'assignedTo' => $this->assignedTo,
        ];
    }
}

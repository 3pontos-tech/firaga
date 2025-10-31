<?php

namespace App\Integrations\Responses;

class UpsertOpportunityResponse
{
    public function __construct(
        public bool $new,
        public OpportunityResponse $opportunity,
    ) {}

    public static function make(array $payload): self
    {
        return new self(
            $payload['new'],
            OpportunityResponse::make($payload['opportunity']),
        );
    }
}

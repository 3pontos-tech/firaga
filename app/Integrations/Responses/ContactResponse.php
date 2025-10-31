<?php

namespace App\Integrations\Responses;

readonly class ContactResponse
{
    public function __construct(
        public string $contactId,
        public bool $isNewContact
    ) {}

    public static function make(array $json): self
    {
        return new self(
            contactId: $json['contact']['id'],
            isNewContact: $json['new']
        );
    }
}

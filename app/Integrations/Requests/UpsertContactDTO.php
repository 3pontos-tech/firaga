<?php

namespace App\Integrations\Requests;

use JsonSerializable;

class UpsertContactDTO implements JsonSerializable
{
    public function __construct(
        public string $companyName,
        public string $firstName,
        public string $lastName,
        public string $name,
        public string $email,
        public string $locationId,
        public string $phone,
    ) {}

    public static function make(
        string $tenantName,
        string $fullName,
        string $email,
        string $phone,
    ): self {
        $name = str($fullName)->explode(' ');

        return new self(
            companyName: $tenantName,
            firstName: $name->first(),
            lastName: $name->last(),
            name: $fullName,
            email: $email,
            locationId: config('services.highlevel.location'),
            phone: $phone
        );
    }

    public function jsonSerialize(): mixed
    {
        return [
            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
            'name' => $this->name,
            'email' => $this->email,
            'locationId' => $this->locationId,
            'phone' => $this->phone,
        ];
    }
}

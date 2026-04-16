<?php

declare(strict_types=1);

namespace He4rt\Identity\ExternalIdentity\Actions;

use He4rt\Identity\ExternalIdentity\Data\ClientAccessManager;
use He4rt\Identity\ExternalIdentity\Models\ExternalIdentity;

class DisconnectIdentity
{
    public function handle(ExternalIdentity $identity): void
    {
        $identity->update([
            'disconnected_at' => now(),
            'credentials' => new ClientAccessManager,
        ]);

        $identity->delete();
    }
}

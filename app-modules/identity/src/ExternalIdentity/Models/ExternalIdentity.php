<?php

declare(strict_types=1);

namespace He4rt\Identity\ExternalIdentity\Models;

use App\Models\BaseModel;
use App\Models\Concerns\BelongsToTeam;
use He4rt\Identity\Database\Factories\ExternalIdentity\ExternalIdentityFactory;
use He4rt\Identity\ExternalIdentity\Casts\AsCredentials;
use He4rt\Identity\ExternalIdentity\Data\ClientAccessManager;
use He4rt\Identity\ExternalIdentity\Enums\CredentialsType;
use He4rt\Identity\ExternalIdentity\Enums\IdentityCapability;
use He4rt\Identity\ExternalIdentity\Enums\IdentityProvider;
use He4rt\Identity\ExternalIdentity\Enums\IdentityType;
use He4rt\Identity\Teams\Team;
use He4rt\Identity\Users\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;

/**
 * @property string $id
 * @property string $team_id
 * @property IdentityType $type
 * @property IdentityProvider $provider
 * @property CredentialsType $credentials_type
 * @property ClientAccessManager $credentials
 * @property string|null $external_account_id
 * @property string|null $connected_by
 * @property Carbon|null $connected_at
 * @property Carbon|null $disconnected_at
 * @property array<string, mixed>|null $metadata
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Carbon|null $deleted_at
 * @property-read Team $team
 * @property-read User|null $connectedByUser
 *
 * @extends BaseModel<ExternalIdentityFactory>
 */
class ExternalIdentity extends BaseModel
{
    use BelongsToTeam;
    use SoftDeletes;

    protected $table = 'identity_external_identities';

    /**
     * @return BelongsTo<User, $this>
     */
    public function connectedByUser(): BelongsTo
    {
        return $this->belongsTo(User::class, 'connected_by');
    }

    /**
     * @return HasMany<IdentityResource, $this>
     */
    public function resources(): HasMany
    {
        return $this->hasMany(IdentityResource::class, 'external_identity_id');
    }

    /**
     * @return HasMany<IdentityResource, $this>
     */
    public function resourcesForCapability(IdentityCapability $capability): HasMany
    {
        return $this->resources()->where('capability', $capability);
    }

    public function isConnected(): bool
    {
        return $this->connected_at !== null && $this->disconnected_at === null;
    }

    protected static function newFactory(): ExternalIdentityFactory
    {
        return ExternalIdentityFactory::new();
    }

    protected function casts(): array
    {
        return [
            'type' => IdentityType::class,
            'provider' => IdentityProvider::class,
            'credentials_type' => CredentialsType::class,
            'credentials' => AsCredentials::class,
            'connected_at' => 'datetime',
            'disconnected_at' => 'datetime',
            'metadata' => 'array',
        ];
    }
}

<?php

declare(strict_types=1);

namespace He4rt\Identity\ExternalIdentity\Models;

use App\Models\BaseModel;
use He4rt\Identity\Database\Factories\ExternalIdentity\IdentityResourceFactory;
use He4rt\Identity\Database\Factories\Teams\TeamFactory;
use He4rt\Identity\ExternalIdentity\Enums\IdentityCapability;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

/**
 * @property string $id
 * @property string $external_identity_id
 * @property IdentityCapability $capability
 * @property string $external_resource_id
 * @property array<string, mixed>|null $external_resource_data
 * @property string $resourceable_type
 * @property string $resourceable_id
 * @property-read ExternalIdentity $identity
 * @property-read Model $resourceable
 *
 * @extends BaseModel<TeamFactory>
 */
class IdentityResource extends BaseModel
{
    protected $table = 'identity_external_identity_resources';

    /**
     * @return BelongsTo<ExternalIdentity, $this>
     */
    public function identity(): BelongsTo
    {
        return $this->belongsTo(ExternalIdentity::class, 'external_identity_id');
    }

    /**
     * @return MorphTo<Model, $this>
     */
    public function resourceable(): MorphTo
    {
        return $this->morphTo();
    }

    protected static function newFactory(): IdentityResourceFactory
    {
        return IdentityResourceFactory::new();
    }

    protected function casts(): array
    {
        return [
            'capability' => IdentityCapability::class,
            'external_resource_data' => 'array',
        ];
    }
}

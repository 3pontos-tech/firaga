<?php

declare(strict_types=1);

namespace App\Models\CMS;

use App\Enums\MenuItemTarget;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Support\Collection;

/**
 * @property int $id
 * @property string|null $label
 * @property string|null $custom_url
 * @property MenuItemTarget $target
 * @property string $type
 * @property-read Menu $menu
 * @property-read IsMenuable|null $model
 * @property-read Collection<int, MenuItem> $children
 */
class MenuItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'menu_id',
        'label',
        'custom_url',
        'target',
        'type',
    ];

    public function model(): MorphTo
    {
        return $this->morphTo();
    }

    /**
     * @return BelongsTo<Menu, $this>
     */
    public function menu(): BelongsTo
    {
        return $this->belongsTo(Menu::class);
    }

    /**
     * @return HasMany<MenuItem, $this>
     */
    public function children(): HasMany
    {
        return $this->hasMany(self::class, 'parent_item_id');
    }

    protected function casts(): array
    {
        return [
            'target' => MenuItemTarget::class,
        ];
    }
}

<?php

namespace App\Models\CMS;

use Awcodes\Curator\Models\Media;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Collection;
use Webid\Druid\Enums\PageStatus;
use Webid\Druid\Models\Contracts\IsMenuable;
use Webid\Druid\Models\Traits\CanRenderContent;
use Webid\Druid\Services\ComponentSearchContentExtractor;

/**
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property array<int, array<mixed>> $content
 * @property string|null $searchable_content
 * @property PageStatus $status
 * @property string|null $lang
 * @property bool $is_landing
 * @property int|null $parent_page_id
 * @property int|null $translation_origin_model_id
 * @property bool $disable_indexation
 * @property string|null $meta_title
 * @property string|null $meta_description
 * @property string|null $meta_keywords
 * @property string|null $opengraph_title
 * @property string|null $opengraph_description
 * @property int|null $opengraph_picture
 * @property string|null $opengraph_picture_alt
 * @property Carbon|null $published_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @property-read Page|null $parent
 * @property-read Page $translationOriginModel
 * @property-read Page $translationOrigin
 * @property-read Collection<int, Page> $translations
 */
class Page extends Model implements IsMenuable
{
    use CanRenderContent;
    use HasFactory;
    use SoftDeletes;

    protected $table = 'pages';

    protected $guarded = [
        'id',
    ];

    protected $casts = [
        'published_at' => 'datetime',
        'content' => 'array',
        'status' => PageStatus::class,
        'disable_indexation' => 'boolean',
        'is_landing' => 'boolean',
    ];

    public function parent(): BelongsTo
    {
        return $this->belongsTo(Page::class, 'parent_page_id');
    }

    public function translationOrigin(): BelongsTo
    {
        return $this->belongsTo(Page::class, 'translation_origin_model_id');
    }

    public function translations(): HasMany
    {
        return $this->hasMany(Page::class, 'translation_origin_model_id');
    }

    public function translationForLang(string $locale): Page
    {
        return $this->translations->where('lang', $locale)->firstOrFail();
    }

    public function openGraphPicture(): BelongsTo
    {
        return $this->belongsTo(Media::class, 'opengraph_picture', 'id');
    }

    public function fullUrlPath(): string
    {
        $path = '';

        $parent = $this->parent;
        $parentsPath = '';
        while ($parent) {
            if ($parent->slug != 'index') {
                $parentsPath = $parent->slug . '/' . $parentsPath;
            }

            $parent = $parent->parent;
        }

        $path .= $parentsPath;
        if ($this->slug !== 'index') {
            $path .= $this->slug;
        }

        return $path;
    }

    public function url(): string
    {
        return url($this->fullUrlPath());
    }

    public function getMenuLabel(): string
    {
        return $this->title;
    }

    protected static function boot(): void
    {
        parent::boot();
        static::saving(function (Page $model): void {
            /** @var ComponentSearchContentExtractor $searchableContentExtractor */
            $searchableContentExtractor = app(ComponentSearchContentExtractor::class);

            $model->searchable_content = $searchableContentExtractor->extractSearchableContentFromBlocks($model->content);
        });
    }

    public function isPublished(): bool
    {
        return $this->status === PageStatus::PUBLISHED;
    }
}

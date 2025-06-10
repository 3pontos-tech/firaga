<?php

namespace App\Models\CMS;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Webid\Druid\Models\Traits\IsTranslatable;

/**
 * @property string $name
 * @property string $slug
 * @property ?string $lang
 * @property int|null $translation_origin_model_id
 * @property-read Category $translationOriginModel
 * @property-read Collection|Post[] $posts
 */
class Category extends Model
{
    use HasFactory;
    use IsTranslatable;

    protected $table = 'categories';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'slug',
        'lang',
        'translation_origin_model_id',
    ];

    public function posts(): BelongsToMany
    {

        return $this->belongsToMany(Post::class, 'category_post', 'category_id', 'post_id');
    }
}

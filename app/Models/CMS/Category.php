<?php

declare(strict_types=1);

namespace App\Models\CMS;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\Pivot;

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

    public $timestamps = false;

    protected $table = 'categories';

    protected $fillable = [
        'name',
        'slug',
        'lang',
        'translation_origin_model_id',
    ];

    /**
     * @return BelongsToMany<Post, $this, Pivot>
     */
    public function posts(): BelongsToMany
    {

        return $this->belongsToMany(Post::class, 'category_post', 'category_id', 'post_id');
    }
}

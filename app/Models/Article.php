<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';

    protected $guarded = [];

    protected $casts = [
        'is_active' => 'boolean',
        'is_popular' => 'boolean',
        'is_banner' => 'boolean',
    ];

    /**
     * The category that this article belongs to.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(CategoryArticle::class, 'category_article_id');
    }
}

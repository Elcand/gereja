<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class Article extends Model
{
    use HasFactory;
    /**
     * @var array
     */
    protected $fillable = [
        'title',
        'slug',
        'content',
    ];

    public function setTitleAttribute($article)
    {

        $this->attributes['title'] = $article;
        $slug = Str::slug($article, '-');
        $originalSlug = $slug;
        $counter = 1;

        // Pastikan slug unik
        while (self::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;
        }

        $this->attributes['slug'] = $slug;
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function ($article) {
            $article->slug = Str::slug($article->title, '-');
        });
    }
}

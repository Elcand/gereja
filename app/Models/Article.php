<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    use HasFactory;
    /**
     * @var array
     */
    protected $fillable = [
        'title',
        'category',
        'content',
    ];

    protected $with = ['category'];


    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    // public function scopeFilter(Builder $query, array $filters): void
    // {
    //     $query->when(//+
    //         $filters['category'] ?? false,//+
    //         function (Builder $query, $category) {//+
    //             $query->whereHas(//+
    //                 'category',//+
    //                 function (Builder $query) use ($category) {//+
    //                     $query->where('title', $category);//+
    //                 }//+
    //             );//+
    //         }//+
    //     );//
    // }
}

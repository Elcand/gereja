<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Church extends Model
{
    use HasFactory;
    /**
     * @var array
     */
    protected $fillable = [
        'image',
        'name',
        'pastor',
        'address',
        'city',
        'state',
        'postal_code',
    ];
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($category) {
            if (empty($category->slug)) {
                $category->slug = Str::slug($category->name);
            }
        });
    }

    public function maps()
    {
        return $this->hasMany(Maps::class);
    }
}

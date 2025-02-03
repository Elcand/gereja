<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maps extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'address',
        'latitude',
        'longitude'
    ];

    public function church()
    {
        return $this->belongsTo(Church::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}

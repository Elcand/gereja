<?php

namespace App\Models;

use Illuminate\Database\eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    use HasFactory;
    protected $fillable = ['image', 'title', 'subtitle',];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'status',
        'species',
        'type',
        'gender',
        'image',
        'url',
    ];
}
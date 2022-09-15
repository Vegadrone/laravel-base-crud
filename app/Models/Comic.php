<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = [
        'title',
        'description',
        'thumbnail',
        'price',
        'series',
        'date',
        'type'
    ];
}

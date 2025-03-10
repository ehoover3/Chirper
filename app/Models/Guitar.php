<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guitar extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'brand',
        'type',
        'price',
        'description',
        'image_url',
    ];
}
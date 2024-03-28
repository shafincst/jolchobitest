<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'short_des',
        'full_des',
        'categories',
        'unique_url',
        'author',
        'status',
        'image',
        'slug',
    ];
}

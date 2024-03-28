<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admission_form extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'date_of_birth',
        'school',
        'class',
        'mother_name',
        'mother_number',
        'father_name',
        'father_number',
        'guardian',
        'guardian_number',
        'divisions',
        'distric',
        'polic_sta',
        'road_house',
        'email',
        'course',
        'hobby',
        'image',
        'checkbox',
    ];
}

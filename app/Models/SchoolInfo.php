<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolInfo extends Model
{
    use HasFactory;
    protected $fillable = [
        'school_name',
        'current_grade',
        'current_class',
        'next_grade',
        'next_class',
    ];
}

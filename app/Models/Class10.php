<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Class10 extends Model
{
    use HasFactory;

    protected $fillable = [
        'school_name',
        'grade',
        'class',
        'numbers',
        'name',
        'sex',
        'atitude',
        'ability',
        'friendship',
        'conditions',
        'total',
        'next_class',
        'name_split',
    ];
}

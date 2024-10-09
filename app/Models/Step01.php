<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Step01 extends Model
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
        'total',
        'next_class',
        'name_split',
    ];
}

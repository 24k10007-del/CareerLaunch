<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CV extends Model
{
    protected $table = 'cvs'; 

    protected $fillable = [
        'user_id',
        'name',
        'summary',
        'experience',
        'education',
        'skills',
    ];
}

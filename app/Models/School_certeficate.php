<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School_certeficate extends Model
{
    use HasFactory;
    protected $table="school_certeficates";
    protected $fillable = [
        'avarage_point',
        'type',
        'school_name',
        'graduation_year',
        'region',
        'file',
        'user_id',

    ];
}

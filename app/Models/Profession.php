<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    use HasFactory;
    protected $table ='professions';
    protected $fillable = [
        'name',
        'code',
        'count_of_grants',
        'quota',
        'count_of_quota'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfUniver extends Model
{
    use HasFactory;
    protected $table ='prof_univers';
    protected $fillable = [
        'univer_id',
        'prof_id'
    ];
}

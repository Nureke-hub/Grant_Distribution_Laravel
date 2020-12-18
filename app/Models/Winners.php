<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Winners extends Model
{
    use HasFactory;
    protected $table ='winners';
    protected $fillable = [
        'user_id',
        'prof_univer_id'
    ];
}

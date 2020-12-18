<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class udastak extends Model
{
    use HasFactory;
    protected $table="udastaks";
    protected $fillable = [
        'iin',
        'birth_date',
        'by_whom',
        'file',
        'nationality',
        'user_id'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ENT extends Model
{
    use HasFactory;
    protected $table ='e_n_t_s';
    protected $fillable = [
        'reading',
        'math',
        'subject_1_name',
        'subject_2_name',
        'subject_1_point',
        'subject_2_point',
        'tjk',
        'language',
        'file',
        'user_id'
    ];
}

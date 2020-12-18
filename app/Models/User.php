<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

 protected $table="users";

    protected $fillable = [
        'email',
        'password',
        'full_name',
        'gender',
        'photo',
        'status',
        'doc_063',
        'doc_086',
        'boy_reg',
        'quota',
        'pdf_quota',
        'feadback',
        'isChecked'
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',

    ];

    public function getName(){
        if($this->full_name){
            return "{$this->full_name}";
        }
        return null;
    }
    public function getEmailOrName(){
        return $this->getName()?:$this->email;
    }
}

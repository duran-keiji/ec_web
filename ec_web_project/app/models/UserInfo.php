<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    protected $fillable = [
        'last_name',
        'first_name',
        'mail',
        'password',
        'age',
        'sex',
        'interest',
        'delete_flg'
        
    ];
}

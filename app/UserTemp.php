<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserTemp extends Model
{
    protected $fillable = [
        'name', 'email', 'password'
    ];
}

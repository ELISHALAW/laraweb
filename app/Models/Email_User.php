<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Email_User extends Model
{
    //

    protected $fillable = [
        'name',
        'username',
        'email',
    ];
}

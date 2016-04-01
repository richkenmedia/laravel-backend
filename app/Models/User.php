<?php

namespace App\Models;
use Cartalyst\Sentinel\Users\EloquentUser as SentinelUser;

class User extends SentinelUser {

    protected $fillable = [
        'email',
        'username',
        'password',
        'last_name',
        'first_name',
        'permissions',
    ];

    protected $loginNames = ['email', 'username'];

}
<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class UserSocial extends Authenticatable
{
    use Notifiable;

    protected $table = 'social_users';

    protected $fillable = [
        'name', 'email', 'id_in_soc', 'avatar', 'password'
    ];
}

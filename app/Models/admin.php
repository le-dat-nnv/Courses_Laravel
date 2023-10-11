<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class admin extends Authenticatable
{
    use HasFactory;
    protected $table = 'admin';
    protected $guard = "admin";

    protected $fillable = [
        'name',
        'email',
        'password',
        'device_token'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

}

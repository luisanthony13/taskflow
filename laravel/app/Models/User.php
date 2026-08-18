<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes;
    protected $table = 'user';
    protected $primaryKey = 'id';
    protected $fillable = ['user_name', 'password'];
    protected $hidden = ['password'];
}

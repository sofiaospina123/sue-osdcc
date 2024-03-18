<?php
// app\Models\User.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;


        protected $fillable = [
            'name', 'email', 'password', 'role',
        ];
        
        // Constantes para los roles
        public const ROLE_USER = 'user';
        public const ROLE_ADMIN = 'admin';
    
}

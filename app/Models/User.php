<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
   

   protected $table = 'users';

   protected $fillable = ['name', 'email', 'password', 'role'];

   protected $hidden = ['password', 'remember_token'];

   public function isAdmin() {
      return $this->role === 'admin';
   }

   public function isUser() {
      return $this->role === 'user';
   }
    use HasFactory, Notifiable;

}
<?php

namespace App\Models\Admin;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;





use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable  
{
   
   /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
  protected $fillable = [
      'name',
      'email',
      'password',
      
  ];

  protected $hidden = [
    'password',

];
 /**
   * The attributes that should be cast.
   *
   * @var array<string, string>
   */
  // protected $casts = [
  //     'email_verified_at' => 'datetime',
  //     'password' => 'hashed',
  // ];
}

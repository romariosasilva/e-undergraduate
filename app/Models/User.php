<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
  use HasApiTokens, HasFactory, Notifiable;

  /**
   * The attributes that are mass assignable.
   *
   * @var string[]
   */
  protected $fillable = [
    'name', 'email', 'password',
  ];

  /**
   * The attributes that should be hidden for serialization.
   *
   * @var array
   */
  protected $hidden = [
    'password', 'remember_token',
  ];

  /**
   * The attributes that should be cast.
   *
   * @var array
   */
  protected $casts = [
    'email_verified_at' => 'datetime',
  ];

  public function roles()
  {
    $roles = Role::class;

    return $this->belongsToMany($roles);
  }

  public function hasPermission(Permission $permission)
  {
    return $this->hasAnyRoles($permission->roles);
  }

  public function hasAnyRoles($roles)
  {
    if (is_array($roles) || is_object($roles)) {
      foreach ($roles as $role) {
        return $this->roles->contains('name', $role->name);
      }
    }

    return $this->roles->contains('name', $roles);
  }
}

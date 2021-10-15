<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Idea extends Model
{
  use HasFactory;

  protected $fillable = [
    'title', 'description', 'user_id'
  ];

  public function user()
  {
    $users = User::class;

    return $this->belongsTo($users);
  }
}

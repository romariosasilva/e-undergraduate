<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
  use HasFactory;

  protected $fillable = [
    'title', 'author', 'email_author', 'member_one', 'email_one', 'member_two', 'email_two', 'member_three', 'email_three', 'member_four', 'email_four', 'logo_image', 'monography', 'description', 'user_id'
  ];

  public function user()
  {
    $users = User::class;

    return $this->belongsTo($users);
  }
}

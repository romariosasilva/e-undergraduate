<?php

namespace App\Http;

use Illuminate\Support\Facades\Route;

class Helpers
{
  public static function isActiveRoute($route, $output = 'active')
  {
    $currentRote = explode('.', Route::currentRouteName());
    if ($currentRote[0] == $route) {
      return $output;
    }
    return 'link-light';
  }
}

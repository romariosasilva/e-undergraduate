<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;

class HomeController extends Controller
{

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function index()
  {
    $works = Work::get();

    return view('home/index2', [
      'works' => $works
    ]);
  }

  public function ideas()
  {
    return view('ideas/index');
  }
}

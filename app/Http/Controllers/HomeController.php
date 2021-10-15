<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use App\Models\Work;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function index()
  {
    $qtdIdea = Idea::where('user_id', '=', Auth::id())->get()->count();
    $qtdWork = Work::where('user_id', '=', Auth::id())->get()->count();
    $works = Work::get();

    return view('home/index2', [
      'qtdIdea' => $qtdIdea,
      'qtdWork' => $qtdWork,
      'works' => $works,
    ]);
  }
}

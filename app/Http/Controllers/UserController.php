<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UserController extends Controller
{
  public function index()
  {
    $users = User::get();

    return view('users/index', [
      'users' => $users
    ]);
  }

  public function create()
  {
    return view('users/create');
  }

  public function store(Request $request)
  {
    $data = $request->except('_token');

    $data['name'] = Str::title($request->name);

    User::create($data);

    return redirect()->route('users.index');
  }

}

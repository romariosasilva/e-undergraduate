<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UserController extends Controller
{
  /**
   * Lista os usuários cadastrados
   * 
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function index()
  {
    $users = User::get();

    return view('users/index', [
      'users' => $users
    ]);
  }

  /**
   * Exibe o formulário de criação de usuários
   * 
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function create()
  {
    return view('users/create');
  }

  /** 
   * Cria um usuário no banco de dados
   * 
   * @param Request $request
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function store(Request $request)
  {
    $data = $request->except('_token');

    $data['name'] = Str::title($request->name);

    User::create($data);

    return redirect()->route('users.index');
  }

  /**
   * Exibe o formulário de edição de usuários
   * 
   * @param integer $id
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function edit(int $id)
  {
    $user = User::findOrFail($id);

    return view('users/edit', [
      'user' => $user
    ]);
  }

  /**
   * Atualiza um usuário no banco de dados
   * 
   * @param integer $id
   * @param Request $request
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function update(int $id, Request $request)
  {
    $user = User::findOrFail($id);

    $data = $request->except(['_token', '_method']);

    $data['name'] = Str::title($request->name);

    $user->update($data);

    return redirect()->route('users.index');
  }

  /**
   * Apaga um usuário no banco de dados
   * 
   * @param integer $id
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function destroy(int $id)
  {
    $user = User::findOrFail($id);
    $user->delete();

    return redirect()->route('users.index');
  }
}

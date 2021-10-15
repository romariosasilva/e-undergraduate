<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IdeaController extends Controller
{
  /**
   * Lista as ideias cadastradas
   * 
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function index()
  {
    $ideas = Idea::get();

    return view('ideas/index', [
      'ideas' => $ideas
    ]);
  }

  /**
   * Exibe o formulário de criação de ideias
   * 
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function create()
  {
    return view('ideas/create');
  }

  /** 
   * Cria uma ideia no banco de dados
   * 
   * @param Request $request
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function store(Request $request)
  {
    $data = $request->except('_token');

    $data['user_id'] = Auth::id();

    Idea::create($data);

    return redirect()->route('ideas.index');
  }

  /**
   * Exibe o formulário de edição de ideias
   * 
   * @param integer $id
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function edit(int $id)
  {
    $idea = Idea::findOrFail($id);

    return view('ideas/edit', [
      'idea' => $idea
    ]);
  }

  /**
   * Atualiza uma ideia no banco de dados
   * 
   * @param integer $id
   * @param Request $request
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function update(int $id, Request $request)
  {
    $idea = Idea::findOrFail($id);

    $data = $request->except(['_token', '_method']);

    $idea->update($data);

    return redirect()->route('ideas.index');
  }

  /**
   * Apaga uma ideia do banco de dados
   * 
   * @param integer $id
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function destroy(int $id)
  {
    $idea = Idea::findOrFail($id);
    $idea->delete();

    return redirect()->route('ideas.index');
  }
}

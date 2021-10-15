<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class WorkController extends Controller
{
  /**
   * Lista os trabalhos cadastrados
   * 
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function index()
  {
    $works = Work::get();

    return view('works/index', [
      'works' => $works
    ]);
  }

  public function view(int $id)
  {
    $work = Work::findOrFail($id);

    $this->authorize('viewWork', $work);

    return view('works/view', [
      'work' => $work
    ]);
  }

  public function viewPDF(int $id)
  {
    $work = Work::findOrFail($id);

    $this->authorize('viewWork', $work);

    $filename = Storage::path($work->monography);

    header("Content-type: application/pdf");
    header("Content-Length: " . filesize($filename));

    readfile($filename);
  }

  /**
   * Exibe o formulário de criação de trabalhos
   * 
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function create()
  {
    return view('works/create');
  }

  /** 
   * Cria um trabalho no banco de dados
   * 
   * @param Request $request
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function store(Request $request)
  {
    $data = $request->except('_token');

    $data['author'] = Str::title($request->author);
    $data['logo_image'] = $request->logo_image->store('public');
    $data['monography'] = $request->monography->store('public');
    $data['user_id'] = Auth::id();

    Work::create($data);

    return redirect()->route('works.index');
  }

  /**
   * Exibe o formulário de edição de trabalhos
   * 
   * @param integer $id
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function edit(int $id)
  {
    $work = Work::findOrFail($id);

    return view('works/edit', [
      'work' => $work
    ]);
  }

  /**
   * Atualiza um trabalho no banco de dados
   * 
   * @param integer $id
   * @param Request $request
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function update(int $id, Request $request)
  {
    $work = Work::findOrFail($id);

    $data = $request->except(['_token', '_method']);

    $work->update($data);

    return redirect()->route('works.index');
  }

  /**
   * Apaga um usuário no banco de dados
   * 
   * @param integer $id
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function destroy(int $id)
  {
    $work = Work::findOrFail($id);
    $work->delete();

    return redirect()->route('works.index');
  }
}

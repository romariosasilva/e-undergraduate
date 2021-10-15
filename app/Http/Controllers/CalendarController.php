<?php

namespace App\Http\Controllers;

use App\Models\Calendar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CalendarController extends Controller
{
  /**
   * Lista as reuniões cadastradas
   * 
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function index()
  {
    $calendars = Calendar::get();

    return view('calendars/index', [
      'calendars' => $calendars
    ]);
  }

  /**
   * Exibe o formulário de criação de reuniões
   * 
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function create()
  {
    return view('calendars/create');
  }

  /** 
   * Cria uma reunião no banco de dados
   * 
   * @param Request $request
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function store(Request $request)
  {
    $data = $request->except('_token');

    $data['user_id'] = Auth::id();

    Calendar::create($data);

    return redirect()->route('calendars.index');
  }

  /**
   * Exibe o formulário de edição de reuniões
   * 
   * @param integer $id
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function edit(int $id)
  {
    $calendar = Calendar::findOrFail($id);

    return view('calendars/edit', [
      'calendar' => $calendar
    ]);
  }

  /**
   * Atualiza uma reunião no banco de dados
   * 
   * @param integer $id
   * @param Request $request
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function update(int $id, Request $request)
  {
    $calendar = Calendar::findOrFail($id);

    $data = $request->except(['_token', '_method']);

    $calendar->update($data);

    return redirect()->route('calendars.index');
  }

  /**
   * Apaga uma reunião do banco de dados
   * 
   * @param integer $id
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function destroy(int $id)
  {
    $calendar = Calendar::findOrFail($id);
    $calendar->delete();

    return redirect()->route('calendars.index');
  }
}

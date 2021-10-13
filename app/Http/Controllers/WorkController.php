<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class WorkController extends Controller
{
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

  public function create()
  {
    return view('works/create');
  }

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

  public function edit(int $id)
  {
    # code...
  }
}

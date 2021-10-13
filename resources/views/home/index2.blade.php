@extends('layout.app')

@section('title', 'Home')

@section('header_page')
<div class="row wrapper border-bottom white-bg page-heading">
  <div class="col-lg-12">
    <h2>Home</h2>
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{ route('home.index') }}">Home</a>
      </li>
      <li class="breadcrumb-item">
        <a>Dashboard</a>
      </li>
    </ol>
  </div>
</div>
@endsection

@section('content')
<div class="row">
  <div class="col-lg-3">
    <div class="widget" style="border-color: #f7f700;">
      <div class="row">
        <div class="col-4" style="color: #f7f700;">
          <i class="fas fa-lightbulb fa-5x"></i>
        </div>
        <div class="col-8 text-right">
          <span>Idéias Cadastradas</span>
          <h2 class="font-bold">7</h2>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3">
    <div class="widget" style="border-color: #f8ac59;">
      <div class="row">
        <div class="col-4" style="color: #f8ac59;">
          <i class="fas fa-graduation-cap fa-5x"></i>
        </div>
        <div class="col-8 text-right">
          <span>Em Andamento</span>
          <h2 class="font-bold">2</h2>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3">
    <div class="widget" style="border-color: #1ab394;">
      <div class="row">
        <div class="col-4" style="color: #1ab394;">
          <i class="fas fa-award fa-5x"></i>
        </div>
        <div class="col-8 text-right">
          <span>Trabalhos Concluídos</span>
          <h2 class="font-bold">0</h2>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3">
    <div class="widget" style="border-color: #566573;">
      <div class="row">
        <div class="col-4" style="color: #566573;">
          <i class="fas fa-calendar fa-5x"></i>
        </div>
        <div class="col-8 text-right">
          <span>Reuniões Agendadas</span>
          <h2 class="font-bold">3</h2>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">Situação</th>
          <th scope="col">Título</th>
          <th scope="col">Descrição</th>
          <th scope="col">Autor</th>
          <th scope="col">Ações</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($works as $work)
        @can('view_work', $work)
        <tr>
          <td><span class="label label-warning">Em Andamento</span></td>
          <th>{{ $work->title }}</td>
          <td>{{ Str::limit($work->description, 100) }}</td>
          <td>{{ Str::before($work->user->name, ' ') }} {{ Str::afterLast($work->user->name, ' ') }}</td>
          <td>
            <a href="{{ route('works.view', $work) }}"><i class="fas fa-search"></i></a>
            <a style="color: rgb(209, 41, 40)"
                    onclick="javascript: openPDF('{{ route('works.viewPDF', $work) }}')">
              <i class="fas fa-file-pdf"></i>
            </a>
            <a href="#"><i class="fas fa-external-link-alt"></i></a>
          </td>
        </tr>
        @endcan
        @empty
        <tr>
          <th colspan="4" style="text-align: center;">Nenhum trabalho foi encontrado</th>
        </tr>
        @endforelse
      </tbody>
    </table>
  </div>
</div>
@endsection
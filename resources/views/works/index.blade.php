@extends('layout.app')

@section('title', 'Trabalhos')

@section('header_page')
<div class="row wrapper border-bottom white-bg page-heading">
  <div class="col-lg-12">
    <h2>Trabalhos</h2>
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{ route('home.index') }}">Home</a>
      </li>
      <li class="breadcrumb-item">
        <a href="{{ route('works.index') }}">Trabalhos</a>
      </li>
    </ol>
  </div>
</div>
@endsection

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="container">
      <table class="table table-hover">
        <thead>
          <tr>
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
</div>
@endsection
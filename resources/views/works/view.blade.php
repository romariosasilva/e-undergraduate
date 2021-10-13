@extends('layout.app')

@section('title', 'Visualizar Trabalho')

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
      <li class="breadcrumb-item active">
        <strong>Visualizar trabalho</strong>
      </li>
    </ol>
  </div>
</div>
@endsection

@section('content')
<div class="row">
  <div class="col-md-2">
    <div class="container image-container">
      <img src='{{ asset("assets/img/{$work->logo_image}") }}' class="d-block w-100">
      <hr>
      <span>
        <strong>Autores: </strong>
      </span>
      <ul>
        <li>{{ Str::before($work->author, ' ') }} {{ Str::afterLast($work->author, ' ') }}</li>
        <li>{{ Str::before($work->member_one, ' ') }} {{ Str::afterLast($work->member_one, ' ') }}</li>
        <li>{{ Str::before($work->member_two, ' ') }} {{ Str::afterLast($work->member_two, ' ') }}</li>
        <li>{{ Str::before($work->member_three, ' ') }} {{ Str::afterLast($work->member_three, ' ') }}</li>
        <li>{{ Str::before($work->member_four, ' ') }} {{ Str::afterLast($work->member_four, ' ') }}</li>
      </ul>
    </div>
  </div>
  <div class="col-md-10">
    <div class="container">
      <h2>{{ $work->title }}</h2>
      <hr>
      <span><strong>Descrição: </strong>{{ $work->description }}</span>
    </div>
  </div>
</div>
@endsection
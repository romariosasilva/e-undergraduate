@extends('layout.app')

@section('title', 'Novo usuário')

@section('header_page')
<div class="row wrapper border-bottom white-bg page-heading">
  <div class="col-lg-12">
    <h2>Usuários</h2>
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{ route('home.index') }}">Home</a>
      </li>
      <li class="breadcrumb-item">
        <a href="{{ route('users.index') }}">Usuários</a>
      </li>
      <li class="breadcrumb-item active">
        <strong>Criar usuário</strong>
      </li>
    </ol>
  </div>
</div>
@endsection

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="container">
      <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <div class="row">
            <div class="col-md-6">
              <label for="name" class="form-label">Nome</label>
              <input type="text" class="form-control" id="name" name="name" maxlength="100" required>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <label for="email" class="form-label">E-mail</label>
              <input type="email" class="form-control" id="email" name="email" maxlength="100" placeholder="nome@exemplo.com" required>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
            <label for="role" class="form-label">Perfil</label>
              <select class="form-select" id="role" name="role" aria-label="Default select example">
                <option value="1">Administrator</option>
                <option value="2">Advisor</option>
                <option value="3">Student</option>
              </select>
            </div>
          </div>
        </div>

        <button type="submit" class="btn btn-success">Salvar</button>

      </form>
    </div>
  </div>
</div>
@endsection
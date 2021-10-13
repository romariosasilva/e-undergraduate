@extends('layout.app')

@section('title', 'Novo Trabalho')

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
        <strong>Criar trabalho</strong>
      </li>
    </ol>
  </div>
</div>
@endsection

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="container">
      <form action="{{ route('works.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Título do Trabalho</label>
          <input type="text" class="form-control" id="title" name="title" maxlength="255" required>
        </div>
        <div class="mb-3">
          <label for="description" class="form-label">Descrição do Trabalho</label>
          <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
        </div>

        <div class="mb-3">
          <div class="row">
            <div class="col-md-6">
              <label for="author" class="form-label">Nome Autor</label>
              <input type="text" class="form-control" id="author" name="author" maxlength="100" required>
            </div>
            <div class="col-md-6">
              <label for="email_author" class="form-label">E-mail Autor</label>
              <input type="email" class="form-control" id="email_author" name="email_author" maxlength="100" placeholder="nome@exemplo.com" required>
            </div>
          </div>
        </div>

        <div class="mb-3">
          <div class="row">
            <div class="col-md-6">
              <label for="member_one" class="form-label">Nome Membro 1</label>
              <input type="text" class="form-control" id="member_one" name="member_one" maxlength="100">
            </div>
            <div class="col-md-6">
              <label for="email_one" class="form-label">E-mail Membro 1</label>
              <input type="email" class="form-control" id="email_one" name="email_one" maxlength="100" placeholder="nome@exemplo.com">
            </div>
          </div>
        </div>

        <div class="mb-3">
          <div class="row">
            <div class="col-md-6">
              <label for="member_two" class="form-label">Nome Membro 2</label>
              <input type="text" class="form-control" id="member_two" name="member_two" maxlength="100">
            </div>
            <div class="col-md-6">
              <label for="email_two" class="form-label">E-mail Membro 2</label>
              <input type="email" class="form-control" id="email_two" name="email_two" maxlength="100" placeholder="nome@exemplo.com">
            </div>
          </div>
        </div>

        <div class="mb-3">
          <div class="row">
            <div class="col-md-6">
              <label for="member_three" class="form-label">Nome Membro 3</label>
              <input type="text" class="form-control" id="member_three" name="member_three" maxlength="100">
            </div>
            <div class="col-md-6">
              <label for="email_three" class="form-label">E-mail Membro 3</label>
              <input type="email" class="form-control" id="email_three" name="email_three" maxlength="100" placeholder="nome@exemplo.com">
            </div>
          </div>
        </div>

        <div class="mb-3">
          <div class="row">
            <div class="col-md-6">
              <label for="member_four" class="form-label">Nome Membro 4</label>
              <input type="text" class="form-control" id="member_four" name="member_four" maxlength="100">
            </div>
            <div class="col-md-6">
              <label for="email_four" class="form-label">E-mail Membro 4</label>
              <input type="email" class="form-control" id="email_four" name="email_four" maxlength="100" placeholder="nome@exemplo.com">
            </div>
          </div>
        </div>

        <div class="mb-3">
          <div class="row">
            <div class="col-md-6">
              <label for="logo_image" class="form-label">Logo</label>
              <input type="file" class="form-control" id="logo_image" name="logo_image" required>
            </div>
            <div class="col-md-6">
              <label for="monography" class="form-label">Monografia</label>
              <input type="file" class="form-control" id="monography" name="monography" required>
            </div>
          </div>
        </div>

        <button type="submit" class="btn btn-success">Salvar</button>

      </form>
    </div>
  </div>
</div>
@endsection
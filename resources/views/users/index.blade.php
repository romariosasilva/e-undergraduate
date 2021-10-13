@extends('layout.app')

@section('title', 'Usuários')

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
            <th scope="col">Nome</th>
            <th scope="col">E-mail</th>
            <th scope="col">Perfil</th>
            <th scope="col">Ações</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($users as $user)
          <tr>
            <th>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>Administrador</td>
            <td>
              <a href="{{ route('users.index', $user) }}"><i class="fas fa-search"></i></a>
              <a href="{{ route('users.index', $user) }}"><i class="fas fa-user-edit"></i></a>
              <a href="{{ route('users.index', $user) }}"><i class="fas fa-user-times"></i></a>
            </td>
          </tr>
          @empty
          <tr>
            <th colspan="4" style="text-align: center;">Nenhum usuário foi encontrado</th>
          </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
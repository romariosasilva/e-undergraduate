@extends('layout.app')

@section('title', 'Home')

@section('content')
<div class="overlay-container">
  <div class="overlay">
    <div class="overlay-panel overlay-left">
      <h1>Olá, Amigo</h1>
      <p>Esqueceu a sua senha? Não se preocupe.</p>
      <button tabindex="4">clique aqui</button>
    </div>
    <div class="overlay-panel overlay-right">
      <div class="image-right">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{ asset('assets/img/alunos.png') }}" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('assets/img/professores.png') }}" class="d-block w-100">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@extends('layout.app')

@section('styles')
<link rel="stylesheet" href="{{ asset('assets/css/notes.css') }}">
@endsection

@section('title', 'Mural de Ideias')

@section('header_page')
<div class="row wrapper border-bottom white-bg page-heading">
  <div class="col-lg-12">
    <h2>Mural de Ideias</h2>
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{ route('home.index') }}">Home</a>
      </li>
      <li class="breadcrumb-item">
        <a href="{{ route('ideas.index') }}">Mural de Ideias</a>
      </li>
    </ol>
  </div>
</div>
@endsection

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="container">
      <ul class="notes">
        <li>
          <div>
            <h4>Crie sua ideia!</h4>
            <p>Possui alguma ideia ou sugestão de tema que gostaria de orientar? Não perca tempo, cadastre aqui e veja a mágica acontecer!</p>
            <a id="showModal" data-toggle="modal" data-target="#modal" data-attr="{{ route('ideas.create') }}">
              <i class="fas fa-plus"></i>
            </a>
          </div>
        </li>
        @forelse ($ideas as $idea)
        <li>
          <div>
            <small>{{ $idea->updated_at }}</small>
            <h4>{{ $idea->title }}</h4>
            <p>{{ $idea->description }}</p>
            <footer>
              <section>
                <i class="fas fa-thumbs-up" onclick="javascript: alert('Marcar com gostei')"></i>
                <i class="fas fa-thumbs-down" onclick="javascript: alert('Marcar com não gostei')"></i>
              </section>
              <section>
                <a id="showModal" data-toggle="modal" data-target="#modal" data-attr="{{ route('ideas.edit', $idea) }}">
                  <i class="fas fa-edit"></i>
                </a>
                <a href="{{ route('ideas.destroy', $idea) }}" onclick="javascript:
                    return confirm('Tem certeza de que quer apagar essa ideia?')">
                  <i class="fas fa-trash"></i>
                </a>
              </section>
            </footer>
          </div>
        </li>
        @empty
        <li>
          <div>
            <h4>Sem ideias cadastradas</h4>
            <p>Possui alguma ideia ou sugestão de tema que gostaria de orientar? Não perca tempo, cadastre aqui e veja a mágica acontecer!</p>
          </div>
        </li>
        @endforelse
      </ul>
    </div>
  </div>
</div>

<div class="modal inmodal" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: black">
        <h5 class="modal-title" style="color: white">Editar Ideia</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="modalBody">
        <div>
          <!-- the result to be displayed apply here -->
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('javascript')
<script>
  $(document).on('click', '#showModal', function(event) {
    event.preventDefault();
    let href = $(this).attr('data-attr');
    $.ajax({
      url: href,
      beforeSend: function() {
        $('#loader').show();
      },
      // return the result
      success: function(result) {
        $('#modal').modal("show");
        $('#modalBody').html(result).show();
      },
      complete: function() {
        $('#loader').hide();
      },
      error: function(jqXHR, testStatus, error) {
        console.log(error);
        alert("Page " + href + " cannot open. Error:" + error);
        $('#loader').hide();
      },
      timeout: 8000
    });
  });
</script>
@endsection
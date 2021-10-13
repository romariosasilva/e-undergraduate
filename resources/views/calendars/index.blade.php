@extends('layout.app')

@section('title', 'Calendário')

@section('header_page')
<div class="row wrapper border-bottom white-bg page-heading">
  <div class="col-lg-12">
    <h2>Calendário</h2>
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{ route('home.index') }}">Home</a>
      </li>
      <li class="breadcrumb-item">
        <a href="{{ route('users.index') }}">Calendário</a>
      </li>
    </ol>
  </div>
</div>
@endsection

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <h2 style="margin-bottom: 25px;">Equipes</h2>
          <div style="clear: both; margin-top: 0; padding: 0;">
            <div style="clear: both; background-color: #ffffff; color: inherit; padding: 15px 20px 20px 20px; border-color: #e7eaec; border-image: none; border-style: solid; border-width: 1px;">
              <div id="external-events">
                <div style="position: relative; background-color: #1ab394 !important; color: #ffffff; padding: 5px 10px; border-radius: 5px; cursor: pointer; margin-bottom: 5px;">GETRONIC</div>
                <div style="position: relative; background-color: #1ab394 !important; color: #ffffff; padding: 5px 10px; border-radius: 5px; cursor: pointer; margin-bottom: 5px;">DEMOCRATEC</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-9">
          <div id='calendar'></div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('javascript')
  <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.9.0/main.min.js" integrity="sha256-8nl2O4lMNahIAmUnxZprMxJIBiPv+SzhMuYwEuinVM0=" crossorigin="anonymous"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var calendarEl = document.getElementById('calendar');
      var calendar = new FullCalendar.Calendar(calendarEl, {
        headerToolbar: {
          left: 'prev,next today',
          center: 'title',
          right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
        },
        buttonIcons: false,// Desabilita os ícones e deixa como texto
        selectable: true,  // Habilita a seleção no calendário
        locale: 'pt-br',   // Configura o idioma para o português
        allDaySlot: false, // Remove a opção "dia todo" da visualização do calendário
      });

      calendar.render();
    });
  </script>
@endsection
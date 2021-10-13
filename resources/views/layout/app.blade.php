<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.9.0/main.min.css" integrity="sha256-FjyLCG3re1j4KofUTQQXmaWJw13Jdb7LQvXlkFxTDJI=" crossorigin="anonymous">

  <link rel="stylesheet" href="{{ asset('assets/css/notes.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/sidebars.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/personalizado.css') }}">

  <link rel="icon" href="{{ asset('assets/img/logo.png') }}" type="image/png" />

  <title>@yield('title') | {{ env('APP_NAME') }}</title>
</head>

<body>
  <div id="wrapper">
    <header>
      @include('layout.sidebar')

    </header>
    <div id="page-Wrapper">
      @include('layout.navbar')

      @yield('header_page')

      <div class="wrapper wrapper-content">
        @yield('content')

      </div>

      @include('layout.footer')
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js" integrity="sha512-Tn2m0TIpgVyTzzvmxLNuqbSJH3JP8jm+Cy3hvHrW7ndTDcJ1w5mBiksqDBb8GpE2ksktFvDB/ykZ0mDpsZj20w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script src="{{ asset('assets/js/sidebars.js') }}"></script>

  @yield('javascript')
  <script>
    function openPDF(linkAddress) {
      window.open(linkAddress, "_blank", "menubar=no;toolbar=no, scrollbars=no, resizable=no");
    }
  </script>
</body>

</html>
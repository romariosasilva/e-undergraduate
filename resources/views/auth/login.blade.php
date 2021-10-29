<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">

  <link rel="icon" href="{{ asset('assets/img/logo.png') }}" type="image/png" />

  <title>Login | {{ env('APP_NAME') }}</title>
</head>

<body>
  <div class="container" id="container">
    <div class="form-container sign-in-container">
      <form method="POST" action="{{ route('login') }}">
        @csrf
        <img src="{{ asset('assets/img/logo.png') }}" class="logo">

        <div class="form-group row">
          <input id="email" type="email" placeholder="email@example.com.br" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" required>
          @error('email')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>

        <div class="form-group row">
          <input id="password" type="password" placeholder="••••••" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password" required>
          @error('password')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>

        <div class="form-group row" style="display:flex; flex-direction: row; flex-wrap:nowrap; align-content: center;justify-content: center;align-items: center;">
          <div class="col-md-2" style="padding-right: 0px;">
            <input class="form-check-input" style="padding: 0;" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
          </div>
          <label class="form-check-label" for="remember" style="text-align: left; color: white;">{{ __('Remember Me') }}</label>
        </div>

        <div class="form-group row" style="display:flex; flex-direction: column;">
          <button type="submit" class="ladda-button btn-success">{{ __('Login') }}</button>

          @if (Route::has('password.request'))
          <a class="btn btn-link" href="{{ route('password.request') }}">
            {{ __('Forgot Your Password?') }}
          </a>
          @endif
        </div>
      </form>
    </div>

    <div class="overlay-container">
      <div class="overlay">
        <div class="overlay-panel overlay-left">
          <img src="{{ asset('assets/img/logo.png') }}" class="logo">
          <button class="ghost btn-outline-primary" id="signIn">Acessar</button>
        </div>
        <div class="overlay-panel overlay-right">
          <h1 style="color: #2d3436;">{{ __('Forgot Your Password?') }}</h1>
          <p style="color: #2d3436">Esqueceu a sua senha? Não se preocupe.</p>
          <button class="ghost btn-outline-primary" name="signUp" id="signUp" tabindex="4">clique aqui</button>
        </div>
      </div>
    </div>
    <div class="form-container sign-up-container">
      <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <div class="form-group row">
          <input id="email" type="email" placeholder="email@example.com.br" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

          @error('email')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>

        <div class="form-group row" style="display:flex; flex-direction: column;">
          <button type="submit" class="btn btn-success">
            {{ __('Send Password Reset Link') }}
          </button>
        </div>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js" integrity="sha512-Tn2m0TIpgVyTzzvmxLNuqbSJH3JP8jm+Cy3hvHrW7ndTDcJ1w5mBiksqDBb8GpE2ksktFvDB/ykZ0mDpsZj20w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script src="{{ asset('assets/js/login.js') }}"></script>
</body>

</html>
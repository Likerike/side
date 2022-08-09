@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="css/auth2.css" media="screen">
<link rel="stylesheet" href="css/myone.css" media="screen">

<!--Обвертка-->
<section class="u-align-center u-clearfix u-section-5" id="sec-f7a5">
  <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
    <div class="u-form u-form-1">
<!--Основа-->
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
              <!--div class="card-header">{{ __('Вход') }}</div-->
              <ul class="navbar-nav ms-auto">
                  <!-- Authentication Links -->
                  @guest
                      @if (Route::has('login'))
                          <li class="nav-item list">
                              <a class="nav-link" href="{{ route('login') }}">{{ __('Вход') }}</a>
                          </li>
                      @endif

                      @if (Route::has('register'))
                          <li class="nav-item list">
                              <a class="nav-link" href="{{ route('register') }}">{{ __('Регистриция') }}</a>
                          </li>
                      @endif
                  @else
                      <li class="nav-item dropdown list">
                          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              {{ Auth::user()->name }}
                          </a>

                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                  {{ __('Logout') }}
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                  @csrf
                              </form>
                          </div>
                      </li>
                  @endguest
              </ul>

              <div class="card-body">
                  <form method="POST" action="{{ route('login') }}"><!--class="u-clearfix u-form-spacing-9 u-form-vertical u-inner-form" style="padding: 30px;"-->
                      @csrf

                      <div class="form-group row"><!--u-form-group u-form-name u-label-top-->
                          <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('') }}</label><!--name-3b9a
                          u-label u-label-1-->

                          <div class="col-md-6">
                              <input id="email" placeholder="Ваш E-Mail" type="email" class="my-input u-border-2 u-border-no-left u-border-no-top u-border-palette-1-light-2 u-input u-input-rectangle u-text-palette-1-dark-1 u-white u-input-1 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"> <!--autofocus-->
                              <!-- placeholder="Ваш E-Mail" class="u-border-1 u-border-grey-30 u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-white" id = "name-3b9a"-->

                              @error('email')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row"><!--u-form-group u-form-name u-label-top-->
                          <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('') }}</label><!--u-label u-label-2
                            email-3b9a-->

                          <div class="col-md-6">
                              <input id="password" placeholder="Введите ваш пароль" type="password"
                              class="my-input u-border-2 u-border-no-left u-border-no-top u-border-palette-1-light-2 u-input u-input-rectangle u-text-palette-1-dark-1 u-white u-input-1 form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                              <!--placeholder="Enter a valid email address"
                              id="email-3b9a"
                              name="email"
                              u-border-1 u-border-grey-30 u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-white
                              -->
                              @error('password')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row">
                          <div class="col-md-6 offset-md-4">
                              <div class="form-check my-label">
                                  <input class="form-check-input" style="font-weight: 700; font-size: 1rem;" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                  <label class="u-text-active-white u-text-palette-1-dark-1 form-check-label" for="remember">
                                      {{ __('Запомнить меня') }}
                                  </label>
                              </div>
                          </div>
                      </div>

                      <div class="form-group row mb-0">
                          <div class="col-md-8 offset-md-4">
                              <button type="submit" class="u-active-palette-1-dark-1 u-border-none u-btn u-btn-round u-btn-submit u-button-style u-custom-font u-font-oswald u-hover-grey-10 u-radius-8 u-text-active-white u-text-palette-1-dark-1 u-white u-btn-1 btn btn-primary"><!--u-border-hover-grey-75 u-border-none u-btn u-btn-submit u-button-style u-white u-btn-1"-->
                                  {{ __('Войти') }}
                              </button>
                          </div>
                          <!--div class="col-md-8 offset-md-4">
                              @if (Route::has('password.request'))
                                  <a class="btn btn-link" href="{{ route('password.request') }}">
                                      {{ __('Забыли пароль?') }}
                                  </a>
                              @endif
                          </div-->
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>
<!--Основа(конец)-->
    </div>
  </div>
</section>
@endsection

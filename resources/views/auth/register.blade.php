@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="css/auth2.css" media="screen">
<link rel="stylesheet" href="css/myone.css" media="screen">
<!--Обработка-->
<section class="u-align-center u-clearfix u-section-5" id="sec-f7a5">
  <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
    <div class="u-form u-form-1">
<!--Основа-->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
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
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('') }}</label>

                            <div class="col-md-6">
                                <input id="name" placeholder="Ваше имя" type="text" class="my-input u-border-2 u-border-no-left u-border-no-top u-border-palette-1-light-2 u-input u-input-rectangle u-text-palette-1-dark-1 u-white u-input-1 form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" >

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('') }}</label>

                            <div class="col-md-6">
                                <input id="email" placeholder="Email адрес" type="email" class="my-input u-border-2 u-border-no-left u-border-no-top u-border-palette-1-light-2 u-input u-input-rectangle u-text-palette-1-dark-1 u-white u-input-1 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('') }}</label>

                            <div class="col-md-6">
                                <input id="password" placeholder="Пароль" type="password" class="my-input u-border-2 u-border-no-left u-border-no-top u-border-palette-1-light-2 u-input u-input-rectangle u-text-palette-1-dark-1 u-white u-input-1 form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" placeholder="Повторите пароль" type="password" class="my-input u-border-2 u-border-no-left u-border-no-top u-border-palette-1-light-2 u-input u-input-rectangle u-text-palette-1-dark-1 u-white u-input-1 form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="u-active-palette-1-dark-1 u-border-none u-btn u-btn-round u-btn-submit u-button-style u-custom-font u-font-oswald u-hover-grey-10 u-radius-8 u-text-active-white u-text-palette-1-dark-1 u-white u-btn-1 btn btn-primary">
                                    {{ __('Регистрация') }}
                                </button>
                            </div>
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

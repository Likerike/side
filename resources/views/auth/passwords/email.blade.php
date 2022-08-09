@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/auth2.css') }}" media="screen">

<!--Обвертка-->
<section class="u-align-center u-clearfix u-section-5" id="sec-f7a5">
  <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
    <div class="u-form u-form-1">
<!--Основа-->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!--div class="card-header">{{ __('Сброс пароля') }}</div-->

                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links
                    @guest
                        @if (Route::has('login'))-->
                            <li class="nav-item list">Сброс пароля</li>
                                <!--a class="nav-link" href="{{ route('login') }}">{{ __('Вход') }}</a-->
                        <!--@endif
                        @if (Route::has('register'))>
                            <li class="nav-item list">Ваш Email для получения ссылки для сброса </li>
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Регистриция') }}</a-->
                        <!--@endif
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
                    @endguest-->
                </ul>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Ваш Email для получения ссылки для сброса') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Отправить') }}
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

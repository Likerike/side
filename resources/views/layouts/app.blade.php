<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="font-size: 16px;">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- My meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Главная">
    <meta property="og:type" content="website">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>R&amp;A</title>
    <!-- Scripts
    <script src="{{ asset('js/app.js') }}" defer></script>-->
    <script class="u-script" type="text/javascript" src="{{ asset('js/jquery.js') }}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{ asset('js/nicepage.js') }}" defer=""></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700">
    <!-- Styles-->
    <link rel="stylesheet" href="{{ asset('css/nicepage.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('css/Главная.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}" media="screen">
</head>
<body class="u-body u-xl-mode">
  <header class="u-clearfix u-header u-palette-1-dark-1 u-sticky u-sticky-d4e1 u-header" id="sec-812e"><div class="u-clearfix u-sheet u-sheet-1">
      <h6 class="u-align-center-xs u-custom-font u-font-oswald u-hidden-lg u-hidden-md u-hidden-sm u-hidden-xl u-text u-text-default-xs u-text-1">R&amp;A </h6>
      <a href="{{ route('welcome')}}" class="u-align-left-xs u-image u-logo u-image-1" data-image-width="409" data-image-height="407">
        <img src="{{ asset('img/Logo2.png') }}" class="u-logo-image u-logo-image-1">
      </a>
      <nav class="u-align-right u-menu u-menu-one-level u-offcanvas u-menu-1">
        <div class="menu-collapse u-custom-font u-font-oswald" style="font-size: 1.25rem; letter-spacing: 1px;">
          <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-file-icon u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base u-file-icon-1" href="#">
            <img src="{{ asset('img/309587.png') }}" alt="">
          </a>
        </div>
        <div class="u-custom-menu u-nav-container">
          <ul class="u-custom-font u-font-oswald u-nav u-spacing-30 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-border-2 u-border-active-custom-color-2 u-border-hover-palette-3-base u-border-no-bottom u-border-no-left u-border-no-right u-border-white u-button-style u-nav-link u-text-active-custom-color-2 u-text-hover-palette-3-base u-text-white" href="{{ route('welcome')}}" style="padding: 10px 2px;">Главная</a>
  </li><li class="u-nav-item"><a class="u-border-2 u-border-active-custom-color-2 u-border-hover-palette-3-base u-border-no-bottom u-border-no-left u-border-no-right u-border-white u-button-style u-nav-link u-text-active-custom-color-2 u-text-hover-palette-3-base u-text-white" href="{{route('login')}}" style="padding: 10px 2px;">Кабинет</a>
  </li><li class="u-nav-item"><a class="u-border-2 u-border-active-custom-color-2 u-border-hover-palette-3-base u-border-no-bottom u-border-no-left u-border-no-right u-border-white u-button-style u-nav-link u-text-active-custom-color-2 u-text-hover-palette-3-base u-text-white" href="{{route('comments')}}" style="padding: 10px 2px;">Отзывы</a>
  </li><li class="u-nav-item"><a class="u-border-2 u-border-active-custom-color-2 u-border-hover-palette-3-base u-border-no-bottom u-border-no-left u-border-no-right u-border-white u-button-style u-nav-link u-text-active-custom-color-2 u-text-hover-palette-3-base u-text-white" href="{{route('contacts')}}" style="padding: 10px 2px;">Контакты</a>
  </li><li class="u-nav-item"><a class="u-border-2 u-border-active-custom-color-2 u-border-hover-palette-3-base u-border-no-bottom u-border-no-left u-border-no-right u-border-white u-button-style u-nav-link u-text-active-custom-color-2 u-text-hover-palette-3-base u-text-white" href="{{route('aboutus')}}" style="padding: 10px 2px;">О нас</a>
  </li></ul>
        </div>
        <div class="u-custom-menu u-nav-container-collapse">
          <div class="u-container-style u-inner-container-layout u-palette-1-base u-sidenav">
            <div class="u-inner-container-layout u-sidenav-overflow">
              <div class="u-menu-close"></div>
              <ul class="u-align-center u-custom-font u-font-oswald u-nav u-popupmenu-items u-text-active-custom-color-2 u-text-hover-palette-3-base u-text-white u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{ route('welcome')}}">Главная</a>
  </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{route('login')}}">Кабинет</a>
  </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{route('comments')}}">Отзывы</a>
  </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{route('contacts')}}">Контакты</a>
  </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{route('aboutus')}}">О нас</a>
  </li></ul>
            </div>
          </div>
          <div class="u-menu-overlay"></div>
        </div>
      </nav>
      <h4 class="u-custom-font u-font-oswald u-hidden-xs u-text u-text-default u-text-2"><a href="{{ route('welcome')}}">Repair &amp; Assembly</a><br>
      </h4>
    </div>
  </header>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">

            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <footer class="u-align-center-md u-align-center-sm u-align-center-xs u-clearfix u-footer u-palette-1-dark-1" id="sec-7c46"><div class="u-clearfix u-sheet u-sheet-1">
      <a href="{{ route('welcome')}}" class="u-image u-logo u-image-1" data-image-width="409" data-image-height="407">
        <img src="{{ asset('img/Logo2-7.png') }}" class="u-logo-image u-logo-image-1">
      </a>
    <div class="u-align-right u-social-icons u-spacing-10 u-social-icons-1">
      <a class="u-social-url" title="facebook" target="_blank" href=""><span class="u-file-icon u-icon u-social-facebook u-social-icon u-icon-1"><img src="{{ asset('img/733547.png') }}" alt=""></span>
      </a>
      <a class="u-social-url" title="twitter" target="_blank" href=""><span class="u-file-icon u-icon u-social-icon u-social-twitter u-icon-2"><img src="{{ asset('img/733579.png') }}" alt=""></span>
      </a>
      <a class="u-social-url" title="instagram" target="_blank" href=""><span class="u-file-icon u-icon u-social-icon u-social-instagram u-icon-3"><img src="{{ asset('img/1384063.png') }}" alt=""></span>
      </a>
      <a class="u-social-url" title="linkedin" target="_blank" href=""><span class="u-file-icon u-icon u-social-icon u-social-linkedin u-icon-4"><img src="{{ asset('img/2111644.png') }}" alt=""></span>
      </a>
      </div>
        <p class="u-align-center-lg u-align-center-md u-align-center-xl u-custom-font u-font-oswald u-text u-text-1">&copy; 2022 г. Repair &amp; Assembly</p>
      </div></footer>
</body>
</html>

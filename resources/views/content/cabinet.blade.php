@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="css/cabinet.css" media="screen">

@if(Auth::user()->name != 'admin')
<section class="u-clearfix u-section-2" id="sec-2f1b">
  <div class="u-clearfix u-sheet u-sheet-1">
    <div class="u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
      <div class="u-layout">
        <div class="u-layout-row">
          <div class="u-align-center u-container-style u-layout-cell u-left-cell u-size-22 u-layout-cell-1">
            <div class="u-container-layout u-valign-middle u-container-layout-1">
              <div alt="" class="u-image u-image-circle u-image-1" src="" data-image-width="256" data-image-height="256"></div>
            </div>
          </div>
          <div class="u-align-center u-container-style u-layout-cell u-right-cell u-size-38 u-layout-cell-2">
            <div class="u-container-layout u-valign-middle-xl u-container-layout-2">
              <h2 class="u-text u-text-1">{{ Auth::user()->name }}</h2>
              <a href="{{ route('myorders') }}" class="u-active-palette-1-dark-1 u-border-2 u-border-palette-1-light-3 u-btn u-button-style u-hover-feature u-hover-palette-1-light-1 u-none u-text-hover-white u-text-palette-1-dark-1 u-btn-1">Мои заявки</a>
              <a href="{{ route('orders') }}" class="u-active-palette-1-dark-1 u-border-2 u-border-palette-1-light-3 u-btn u-button-style u-hover-feature u-hover-palette-1-light-1 u-none u-text-hover-white u-text-palette-1-dark-1 u-btn-2">Сделать заказ</a>
              <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
              class="u-active-palette-1-dark-1 u-border-2 u-border-palette-1-light-3 u-btn u-button-style u-hover-feature u-hover-palette-1-light-1 u-none u-text-hover-white u-text-palette-1-dark-1 u-btn-3">{{ __('Выход') }}</a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@else
<section class="u-clearfix u-section-4" id="carousel_c987">
  <div class="u-clearfix u-sheet u-sheet-1">
    <div class="u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
      <div class="u-layout">
        <div class="u-layout-row">
          <div class="u-align-center u-container-style u-layout-cell u-left-cell u-size-22 u-layout-cell-1">
            <div class="u-container-layout u-valign-middle u-container-layout-1">
              <div alt="" class="u-image u-image-circle u-image-1" src="" data-image-width="256" data-image-height="256"></div>
            </div>
          </div>
          <div class="u-align-center u-container-style u-layout-cell u-right-cell u-size-38 u-layout-cell-2">
            <div class="u-container-layout u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-container-layout-2">
              <h2 class="u-text u-text-1">{{ Auth::user()->name }}</h2>
              <h6 class="u-text u-text-2">Администратор</h6>
              <a href="{{ route('list-orders-for-repair') }}"
              class="u-active-palette-1-dark-1 u-border-2 u-border-palette-1-light-3 u-btn u-button-style u-hover-feature u-hover-palette-1-light-1 u-none u-text-hover-white u-text-palette-1-dark-1 u-btn-1">Заявки на ремонт</a>
              <a href="{{ route('list-orders-for-assembly') }}"
              class="u-active-palette-1-dark-1 u-border-2 u-border-palette-1-light-3 u-btn u-button-style u-hover-feature u-hover-palette-1-light-1 u-none u-text-hover-white u-text-palette-1-dark-1 u-btn-2">Заявки на сборку</a>
              <a href="{{ route('list-orders-for-setings-OS') }}"
              class="u-active-palette-1-dark-1 u-border-2 u-border-palette-1-light-3 u-btn u-button-style u-hover-feature u-hover-palette-1-light-1 u-none u-text-hover-white u-text-palette-1-dark-1 u-btn-3">Заявки на настройки ОС</a>
              <a href="{{ route('list-orders-for-scool') }}"
              class="u-active-palette-1-dark-1 u-border-2 u-border-palette-1-light-3 u-btn u-button-style u-hover-feature u-hover-palette-1-light-1 u-none u-text-hover-white u-text-palette-1-dark-1 u-btn-4">Заявки на сборку класса</a>
              <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
              class="u-active-palette-1-dark-1 u-border-2 u-border-palette-1-light-3 u-btn u-button-style u-hover-feature u-hover-palette-1-light-1 u-none u-text-hover-white u-text-palette-1-dark-1 u-btn-5">{{ __('Выход') }}</a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endif
@endsection

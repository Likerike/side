@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="css/form.css" media="screen">

<section class="u-align-center u-clearfix u-section-3" id="carousel_471d">
  <div class="u-clearfix u-sheet u-sheet-1">
    <h2 class="u-align-center-lg u-align-center-md u-align-center-sm u-align-center-xs u-custom-font u-font-oswald u-text u-text-palette-1-dark-1 u-text-1">Форма для заявки для настройки ОС</h2>
    <div class="u-hidden-sm u-hidden-xs u-opacity u-opacity-25 u-shape u-shape-svg u-text-palette-1-base u-shape-1">
      <svg class="u-svg-link" preserveAspectRatio="none" viewBox="0 0 160 160" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-c07f"></use></svg>
      <svg class="u-svg-content" viewBox="0 0 160 160" x="0px" y="0px" id="svg-c07f"><path d="M151.7,62.2h-15c-2.4,0-4.4-1.3-5.3-3.5c-0.9-2.2-0.5-4.6,1.2-6.3l10.6-10.6c1.6-1.6,2.4-3.6,2.4-5.8c0-2.2-0.9-4.3-2.4-5.8
l-13.5-13.5c-3.1-3.1-8.5-3.1-11.7,0l-10.6,10.6c-1.4,1.4-3,1.7-4,1.7c-1.5,0-3-0.6-4-1.6c-0.8-0.8-1.8-2.1-1.8-4.2v-15
c0-4.5-3.7-8.2-8.2-8.2h-19c-4.5,0-8.2,3.7-8.2,8.2v15c0,3.6-3,5.8-5.8,5.8c-1,0-2.6-0.3-4-1.7L41.8,16.7c-3.1-3.1-8.5-3.1-11.7,0
L16.7,30.2c-1.6,1.6-2.4,3.6-2.4,5.8c0,2.2,0.9,4.3,2.4,5.8l10.6,10.6c1.7,1.7,2.2,4,1.2,6.3c-0.9,2.2-2.9,3.5-5.3,3.5h-15
c-4.5,0-8.2,3.7-8.2,8.2v19.1c0,4.5,3.7,8.2,8.2,8.2h15c2.4,0,4.4,1.3,5.3,3.5c0.9,2.2,0.5,4.6-1.2,6.3l-10.6,10.6
c-1.6,1.6-2.4,3.6-2.4,5.8c0,2.2,0.9,4.3,2.4,5.8l13.5,13.5c3.1,3.1,8.5,3.1,11.7,0l10.6-10.6c1.4-1.4,3-1.7,4-1.7
c2.9,0,5.8,2.2,5.8,5.8v15c0,4.5,3.7,8.2,8.2,8.2h19.1c4.5,0,8.2-3.7,8.2-8.2v-15c0-3.6,3-5.8,5.8-5.8c1,0,2.6,0.3,4,1.7l10.6,10.6
c3.1,3.1,8.5,3.1,11.7,0l13.5-13.5c1.6-1.6,2.4-3.6,2.4-5.8c0-2.2-0.9-4.3-2.4-5.8l-10.6-10.6c-1.7-1.7-2.2-4-1.2-6.3
c1-2.3,2.9-3.5,5.3-3.5h15c4.5,0,8.2-3.7,8.2-8.2v-19C159.9,65.9,156.2,62.2,151.7,62.2z M100.6,80.1c0,11.4-9.3,20.7-20.7,20.7
s-20.7-9.3-20.7-20.7S68.6,59.3,80,59.3S100.6,68.6,100.6,80.1z"></path></svg>
    </div>
    <div class="u-hidden-sm u-hidden-xs u-opacity u-opacity-25 u-shape u-shape-svg u-text-palette-1-base u-shape-2">
      <svg class="u-svg-link" preserveAspectRatio="none" viewBox="0 0 160 160" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-e243"></use></svg>
      <svg class="u-svg-content" viewBox="0 0 160 160" x="0px" y="0px" id="svg-e243"><path d="M151.7,62.2h-15c-2.4,0-4.4-1.3-5.3-3.5c-0.9-2.2-0.5-4.6,1.2-6.3l10.6-10.6c1.6-1.6,2.4-3.6,2.4-5.8c0-2.2-0.9-4.3-2.4-5.8
l-13.5-13.5c-3.1-3.1-8.5-3.1-11.7,0l-10.6,10.6c-1.4,1.4-3,1.7-4,1.7c-1.5,0-3-0.6-4-1.6c-0.8-0.8-1.8-2.1-1.8-4.2v-15
c0-4.5-3.7-8.2-8.2-8.2h-19c-4.5,0-8.2,3.7-8.2,8.2v15c0,3.6-3,5.8-5.8,5.8c-1,0-2.6-0.3-4-1.7L41.8,16.7c-3.1-3.1-8.5-3.1-11.7,0
L16.7,30.2c-1.6,1.6-2.4,3.6-2.4,5.8c0,2.2,0.9,4.3,2.4,5.8l10.6,10.6c1.7,1.7,2.2,4,1.2,6.3c-0.9,2.2-2.9,3.5-5.3,3.5h-15
c-4.5,0-8.2,3.7-8.2,8.2v19.1c0,4.5,3.7,8.2,8.2,8.2h15c2.4,0,4.4,1.3,5.3,3.5c0.9,2.2,0.5,4.6-1.2,6.3l-10.6,10.6
c-1.6,1.6-2.4,3.6-2.4,5.8c0,2.2,0.9,4.3,2.4,5.8l13.5,13.5c3.1,3.1,8.5,3.1,11.7,0l10.6-10.6c1.4-1.4,3-1.7,4-1.7
c2.9,0,5.8,2.2,5.8,5.8v15c0,4.5,3.7,8.2,8.2,8.2h19.1c4.5,0,8.2-3.7,8.2-8.2v-15c0-3.6,3-5.8,5.8-5.8c1,0,2.6,0.3,4,1.7l10.6,10.6
c3.1,3.1,8.5,3.1,11.7,0l13.5-13.5c1.6-1.6,2.4-3.6,2.4-5.8c0-2.2-0.9-4.3-2.4-5.8l-10.6-10.6c-1.7-1.7-2.2-4-1.2-6.3
c1-2.3,2.9-3.5,5.3-3.5h15c4.5,0,8.2-3.7,8.2-8.2v-19C159.9,65.9,156.2,62.2,151.7,62.2z M100.6,80.1c0,11.4-9.3,20.7-20.7,20.7
s-20.7-9.3-20.7-20.7S68.6,59.3,80,59.3S100.6,68.6,100.6,80.1z"></path></svg>
    </div>
    <div class="u-hidden-sm u-hidden-xs u-opacity u-opacity-25 u-shape u-shape-svg u-text-palette-1-base u-shape-3">
      <svg class="u-svg-link" preserveAspectRatio="none" viewBox="0 0 160 40" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-3d1b"></use></svg>
      <svg class="u-svg-content" viewBox="0 0 160 40" x="0px" y="0px" id="svg-3d1b"><path d="M60,20C60,9.1,69.1,0,80,0s20,9.1,20,20s-9.1,20-20,20S60,30.9,60,20z M0,20C0,9.1,9.1,0,20,0s20,9.1,20,20s-9.1,20-20,20
S0,30.9,0,20z M120,20c0-10.9,9.1-20,20-20s20,9.1,20,20s-9.1,20-20,20S120,30.9,120,20z"></path></svg>
    </div>
    <div class="u-hidden-sm u-hidden-xs u-opacity u-opacity-25 u-shape u-shape-svg u-text-palette-1-base u-shape-4">
      <svg class="u-svg-link" preserveAspectRatio="none" viewBox="0 0 160 40" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-7dc7"></use></svg>
      <svg class="u-svg-content" viewBox="0 0 160 40" x="0px" y="0px" id="svg-7dc7"><path d="M60,20C60,9.1,69.1,0,80,0s20,9.1,20,20s-9.1,20-20,20S60,30.9,60,20z M0,20C0,9.1,9.1,0,20,0s20,9.1,20,20s-9.1,20-20,20
S0,30.9,0,20z M120,20c0-10.9,9.1-20,20-20s20,9.1,20,20s-9.1,20-20,20S120,30.9,120,20z"></path></svg>
    </div>
    <div class="u-align-center-lg u-align-center-md u-align-center-sm u-align-center-xs u-expanded-width-xs u-form u-radius-5 u-white u-form-1">
      <form action="{{ route('post-settingsOS') }}" method="POST" class="u-clearfix u-form-custom-backend u-form-spacing-30 u-form-vertical u-inner-form" style="padding: 50px;" source="custom" name="form" redirect="true">
        @csrf
        <div class="u-form-group u-form-name u-form-group-1">
          <label for="name-319a" class="u-label u-text-palette-1-dark-1 u-label-1">Ваше имя</label>
          <input type="text" placeholder="Имя" id="name-319a" name="name" class="u-border-2 u-border-no-left u-border-no-top u-border-palette-1-light-2 u-input u-input-rectangle u-text-palette-1-dark-1 u-white u-input-1" required="">
        </div>
        <div class="u-form-group u-form-group-2">
          <label for="email-319a" class="u-label u-text-palette-1-dark-1 u-label-2">Ваша фамилия</label>
          <input type="text" placeholder="Фамилия" id="email-319a" name="name-1" class="u-border-2 u-border-no-left u-border-no-top u-border-palette-1-light-2 u-input u-input-rectangle u-text-palette-1-dark-1 u-white u-input-2">
        </div>
        <div class="u-form-group u-form-phone u-form-group-3">
          <label for="text-edb9" class="u-label u-text-palette-1-dark-1 u-label-3">Ваш номер телефона</label>
          <input type="tel" placeholder="+38(***)***-****" id="text-edb9" name="name-2" class="u-border-2 u-border-no-left u-border-no-top u-border-palette-1-light-2 u-input u-input-rectangle u-text-palette-1-dark-1 u-white u-input-3" pattern="+38(***)***-****" required="required">
        </div>
        <div class="u-form-group u-form-select u-form-group-4">
          <label for="select-b7cb" class="u-label u-text-palette-1-dark-1 u-label-4">Тип услуги</label>
          <div class="u-form-select-wrapper">
            <select id="select-b7cb" name="select" class="u-border-2 u-border-no-left u-border-no-top u-border-palette-1-light-2 u-input u-input-rectangle u-text-palette-1-dark-1 u-white u-input-4" required="required">
              <option value=""></option>
              <option value="Установка новой ОС(Windows,Linux,Mac)">Установка новой ОС(Windows,Linux,Mac)</option>
              <option value="Переустановка ОС(Windows,Linux,Mac)">Переустановка ОС(Windows,Linux,Mac)</option>
              <option value="Сохранение данных с HDD(Жесткого диска)">Сохранение данных с HDD(Жесткого диска)</option>
              <option value="Удаление висрусов">Удаление висрусов</option>
              <option value="Установка драйверов">Установка драйверов</option>
              <option value="Установка ПО(Програмное обеспечение)">Установка ПО(Програмное обеспечение)</option>
            </select>
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret"><path fill="currentColor" d="M4 8L0 4h8z"></path></svg>
          </div>
        </div>
        <div class="u-align-left u-form-group u-form-submit u-form-group-5">
          <button type="submit" class="u-active-palette-1-dark-1 u-border-none u-btn u-btn-round u-btn-submit u-button-style u-custom-font u-font-oswald u-hover-grey-10 u-radius-8 u-text-active-white u-text-palette-1-dark-1 u-white u-btn-1">Отправить</button>
        </div>
        <div class="u-form-send-message u-form-send-success">Спасибо! Ваша заявка была отправлена на рассмотрение! Пожалуйста, ожидайте!</div>
        <div class="u-form-send-error u-form-send-message">Увы заявка не отправлена! Пожалуйста проверьте поля ввода или правельность вводимых данных.</div>
        <input type="hidden" value="" name="recaptchaResponse">
      </form>
    </div>
  </div>
</section>

@endsection

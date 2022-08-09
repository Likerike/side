@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="css/form.css" media="screen">

<section class="u-align-center u-clearfix u-section-1" id="carousel_b87e">
  <div class="u-clearfix u-sheet u-sheet-1">
    <h2 class="u-custom-font u-font-oswald u-text u-text-palette-1-dark-1 u-text-1">Форма для заявки на ремонт</h2>
    <span class="u-file-icon u-hidden-sm u-hidden-xs u-icon u-opacity u-opacity-25 u-text-palette-1-base u-icon-1"><img src="img/30.png" alt=""></span>
    <span class="u-file-icon u-hidden-sm u-hidden-xs u-icon u-opacity u-opacity-25 u-text-palette-1-base u-icon-2"><img src="img/30.png" alt=""></span>
    <div class="u-form u-radius-5 u-white u-form-1">
      <form action="{{ route('post-repair') }}" method="POST" class="u-clearfix u-form-custom-backend u-form-spacing-30 u-form-vertical u-inner-form" style="padding: 50px;" source="custom" name="form" redirect="true">
        @csrf
        <div class="u-form-group u-form-group-1">
          <label for="name-319a" class="u-label u-text-palette-1-dark-1 u-label-1">Ваше имя</label>
          <input type="text" placeholder="Имя" id="name-319a" name="name" class="u-border-2 u-border-no-left u-border-no-top u-border-palette-1-light-2 u-input u-input-rectangle u-text-palette-1-dark-1 u-white u-input-1" required="required">
        </div>
        <div class="u-form-group u-form-group-2">
          <label for="email-319a" class="u-label u-text-palette-1-dark-1 u-label-2">Ваша фамилия</label>
          <input type="text" placeholder="Фамилия" id="email-319a" name="name-1" class="u-border-2 u-border-no-left u-border-no-top u-border-palette-1-light-2 u-input u-input-rectangle u-text-palette-1-dark-1 u-white u-input-2">
        </div>
        <div class="u-form-group u-form-phone u-form-group-3">
          <label for="text-edb9" class="u-label u-text-palette-1-dark-1 u-label-3">Ваш номер телефона</label>
          <input type="tel" placeholder="+38(***)***-****" id="text-edb9" name="name-2" class="u-border-2 u-border-no-left u-border-no-top u-border-palette-1-light-2 u-input u-input-rectangle u-text-palette-1-dark-1 u-white u-input-3" pattern="+38(***)***-****" required="required">
        </div>
        <div class="u-form-group u-form-message u-form-group-4">
          <label for="message-319a" class="u-label u-text-palette-1-dark-1 u-label-4">Описание проблемы</label>
          <textarea placeholder="Опишите вашу проблему для ремонта вашей техникики" rows="5" cols="50" id="message-319a" name="message" class="u-border-2 u-border-no-left u-border-no-top u-border-palette-1-light-2 u-input u-input-rectangle u-text-palette-1-dark-1 u-white u-input-4" required="required"></textarea>
        </div>
        <div class="u-align-left u-form-group u-form-submit u-form-group-5">
          <!--a href="" class="u-active-palette-1-dark-1 u-border-none u-btn u-btn-round u-btn-submit u-button-style u-custom-font u-font-oswald u-hover-grey-10 u-radius-8 u-text-active-white u-text-palette-1-dark-1 u-white u-btn-1">Отправить<br></a-->
          <button type="submit" class="u-active-palette-1-dark-1 u-border-none u-btn u-btn-round u-btn-submit u-button-style u-custom-font u-font-oswald u-hover-grey-10 u-radius-8 u-text-active-white u-text-palette-1-dark-1 u-white u-btn-1" >Отправить</button>
          <!--input type="submit" value="submit" class="u-form-control-hidden"-->
        </div>
        <div class="u-form-send-message u-form-send-success">Спасибо! Ваша заявка была отправлена на рассмотрение! Пожалуйста, ожидайте!</div>
        <div class="u-form-send-error u-form-send-message">Увы заявка не отправлена! Пожалуйста проверьте поля ввода или правельность вводимых данных.</div>
        <input type="hidden" value="" name="recaptchaResponse">
      </form>
    </div>
  </div>
</section>

@endsection

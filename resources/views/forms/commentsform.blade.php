@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="css/commentsform.css" media="screen">

<section class="u-align-center u-clearfix u-section-5" id="carousel_7e50">
  <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
    <div class="u-opacity u-opacity-25 u-shape u-shape-svg u-text-palette-1-base u-shape-1">
      <svg class="u-svg-link" preserveAspectRatio="none" viewBox="0 0 160 120" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-c34e"></use></svg>
      <svg class="u-svg-content" viewBox="0 0 160 120" x="0px" y="0px" id="svg-c34e" style="enable-background:new 0 0 160 120;"><g><path d="M159.9,12.2c0-0.2,0.1-0.4,0.1-0.6l-48.8,49.5L160,109c0-0.3-0.1-0.7-0.1-1V12.2L159.9,12.2z"></path><path d="M103.7,68.7L83.8,88.9c-1,1-2.3,1.5-3.6,1.5c-1.3,0-2.6-0.5-3.6-1.5L56.7,69.4L7.6,119.2c1.2,0.5,2.5,0.8,3.8,0.8h137.4
c2,0,3.9-0.6,5.5-1.6L103.7,68.7z"></path><path d="M80.1,77.4l74.5-75.6c-1.7-1.1-3.7-1.8-5.8-1.8H11.5C8.8,0,6.2,1.1,4.3,2.8L80.1,77.4z"></path><path d="M0,14v94c0,1.1,0.2,2.1,0.5,3.1L49,62L0,14z"></path>
</g></svg>
    </div>
    <div class="u-opacity u-opacity-25 u-shape u-shape-svg u-text-palette-1-base u-shape-2">
      <svg class="u-svg-link" preserveAspectRatio="none" viewBox="0 0 160 130" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-1e03"></use></svg>
      <svg class="u-svg-content" viewBox="0 0 160 130" x="0px" y="0px" id="svg-1e03" style="enable-background:new 0 0 160 130;"><path d="M148.3,0H11.7C5.3,0,0,5.2,0,11.5v79.8c0,6.4,5.3,11.5,11.7,11.5h56L67.6,130l24.2-27.2h56.5c6.5,0,11.7-5.2,11.7-11.5V11.5
C160,5.2,154.7,0,148.3,0z"></path></svg>
    </div>
    <div class="u-form u-radius-5 u-white u-form-1">
      <form action="{{ route('post-comments') }}" method="POST" class="u-clearfix u-form-custom-backend u-form-spacing-30 u-form-vertical u-inner-form" style="padding: 50px;" source="custom" name="form" redirect="true">
        @csrf
        <div class="u-form-group u-form-name u-form-group-1">
          <label for="name-319a" class="u-form-control-hidden u-label u-text-palette-1-dark-1 u-label-1"></label>
          @if(!Auth::user())
          <input type="text" value="Анонимно" placeholder="Анонимно" id="name-319a" name="name" class="u-border-2 u-border-no-left u-border-no-top u-border-palette-1-light-2 u-input u-input-rectangle u-text-palette-1-dark-1 u-white u-input-1" >
          @else
          <input type="text" value="{{ Auth::user()->name }}" placeholder="{{ Auth::user()->name }}" id="name-319a" name="name" class="u-border-2 u-border-no-left u-border-no-top u-border-palette-1-light-2 u-input u-input-rectangle u-text-palette-1-dark-1 u-white u-input-1" >
          @endif
        </div>
        <div class="u-form-group u-form-textarea u-form-group-2">
          <label for="textarea-b97b" class="u-form-control-hidden u-label u-text-palette-1-dark-1 u-label-2"></label>
          <textarea rows="6" cols="50" id="textarea-b97b" name="textarea" class="u-border-2 u-border-no-left u-border-no-top u-border-palette-1-light-2 u-input u-input-rectangle u-text-palette-1-dark-1 u-white u-input-2" placeholder="Текст отзыва"></textarea>
        </div>
        <div class="u-align-left u-form-group u-form-submit u-form-group-3">
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

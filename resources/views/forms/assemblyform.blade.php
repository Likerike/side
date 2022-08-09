@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="css/form.css" media="screen">

<section class="u-align-center u-clearfix u-section-2" id="carousel_402d">
  <div class="u-clearfix u-sheet u-sheet-1">
    <h2 class="u-custom-font u-font-oswald u-text u-text-palette-1-dark-1 u-text-1">Форма для заявки на сбору</h2>
    <div class="u-hidden-md u-hidden-sm u-hidden-xs u-opacity u-opacity-25 u-shape u-shape-svg u-text-palette-1-base u-shape-1">
      <svg class="u-svg-link" preserveAspectRatio="none" viewBox="0 0 160 140" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-f774"></use></svg>
      <svg class="u-svg-content" viewBox="0 0 160 140" x="0px" y="0px" id="svg-f774"><path d="M37.3,51.4c-0.7,0-1.3,0.5-1.5,1.2L5.3,134.2v2.9c0,2.1-0.1,2.9,1.5,2.9h119.4c3.1,0,5.8-2.2,6.5-5.2L160,54.3
c0,0,0-1.8,0-2.9H37.3z M33.9,45.7h107.4h2.7V27.8c0-4.3-3.3-7.8-7.3-7.8h-66L57.4,0H7.3C3.3,0,0,3.5,0,7.8v119.3l27.4-76.2
C28.2,47.9,30.9,45.7,33.9,45.7z"></path></svg>
    </div>
    <div class="u-hidden-md u-hidden-sm u-hidden-xs u-opacity u-opacity-25 u-shape u-shape-svg u-text-palette-1-base u-shape-2">
      <svg class="u-svg-link" preserveAspectRatio="none" viewBox="0 0 160 160" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-1920"></use></svg>
      <svg class="u-svg-content" viewBox="0 0 160 160" x="0px" y="0px" id="svg-1920" style="enable-background:new 0 0 160 160;"><path d="M156.8,31.9L128.2,3.3c-2.1-2.1-5.1-3.3-8.1-3.3H11.4C5.1,0,0,5.1,0,11.4v137.2c0,6.3,5.1,11.4,11.4,11.4h137.2
c6.3,0,11.4-5.1,11.4-11.4V40C160.1,37,158.9,34,156.8,31.9L156.8,31.9z M119.1,70H29V10h90.1V70z M85.4,22h22.5v36H85.4V22z"></path></svg>
    </div>
    <div class="u-hidden-md u-hidden-sm u-hidden-xs u-opacity u-opacity-25 u-shape u-shape-svg u-text-palette-1-base u-shape-3">
      <svg class="u-svg-link" preserveAspectRatio="none" viewBox="0 0 160 160" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-6f3c"></use></svg>
      <svg class="u-svg-content" viewBox="0 0 160 160" x="0px" y="0px" id="svg-6f3c"><path d="M34.3,68.6C15.5,68.6,0,53,0,34.3S15.5,0,34.3,0s34.3,15.5,34.3,34.3S53,68.6,34.3,68.6z M125.7,68.6
C107,68.6,91.4,53,91.4,34.3S107,0,125.7,0S160,15.5,160,34.3S144.5,68.6,125.7,68.6z M34.3,160C15.5,160,0,144.5,0,125.7
s15.5-34.3,34.3-34.3s34.3,15.5,34.3,34.3S53,160,34.3,160z M125.7,160c-18.7,0-34.3-15.5-34.3-34.3s15.5-34.3,34.3-34.3
S160,107,160,125.7S144.5,160,125.7,160z"></path></svg>
    </div>
    <div class="u-hidden-md u-hidden-sm u-hidden-xs u-opacity u-opacity-25 u-shape u-shape-svg u-text-palette-1-base u-shape-4">
      <svg class="u-svg-link" preserveAspectRatio="none" viewBox="0 0 160 160" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-a576"></use></svg>
      <svg class="u-svg-content" viewBox="0 0 160 160" x="0px" y="0px" id="svg-a576"><path d="M34.3,68.6C15.5,68.6,0,53,0,34.3S15.5,0,34.3,0s34.3,15.5,34.3,34.3S53,68.6,34.3,68.6z M125.7,68.6
C107,68.6,91.4,53,91.4,34.3S107,0,125.7,0S160,15.5,160,34.3S144.5,68.6,125.7,68.6z M34.3,160C15.5,160,0,144.5,0,125.7
s15.5-34.3,34.3-34.3s34.3,15.5,34.3,34.3S53,160,34.3,160z M125.7,160c-18.7,0-34.3-15.5-34.3-34.3s15.5-34.3,34.3-34.3
S160,107,160,125.7S144.5,160,125.7,160z"></path></svg>
    </div>
    <div class="u-hidden-md u-hidden-sm u-hidden-xs u-opacity u-opacity-25 u-shape u-shape-svg u-text-palette-1-base u-shape-5">
      <svg class="u-svg-link" preserveAspectRatio="none" viewBox="0 0 160 160" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-20f4"></use></svg>
      <svg class="u-svg-content" viewBox="0 0 160 160" x="0px" y="0px" id="svg-20f4" style="enable-background:new 0 0 160 160;"><path d="M80,160c-44.1,0-80-35.9-80-80S35.9,0,80,0s80,35.9,80,80S124.1,160,80,160z M83.7,76.3h31.4c-0.3-10.9-2-21.5-4.9-31.4
H83.7V76.3z M115.1,83.7H83.7V115h26.5C113.1,105.1,114.8,94.5,115.1,83.7z M152.6,83.7h-30.3c-0.3,10.8-1.9,21.4-4.6,31.4h26
C148.8,105.7,152,95,152.6,83.7z M139.1,122.1h-23.7c-3.3,9.7-7.8,18.8-13.3,27.1C117.2,144.4,130.1,134.8,139.1,122.1z M91.4,151.8
c7-8.7,12.5-18.7,16.4-29.6H83.6v30.4C86.3,152.4,88.9,152.2,91.4,151.8z M76.3,152.6v-30.4h-26c3.9,10.7,9.3,20.6,16.1,29.3
C69.7,152,73,152.4,76.3,152.6z M55.6,148.4c-5.3-8.1-9.6-16.9-12.8-26.3h-22C29.4,134.1,41.5,143.4,55.6,148.4z M16.4,115h24.3
c-2.8-10-4.3-20.6-4.6-31.4H7.4C8,95,11.2,105.7,16.4,115z M7.4,76.3H36c0.3-10.8,1.9-21.4,4.6-31.4H16.4C11.2,54.3,8,65,7.4,76.3z
M20.9,37.8h21.9c3.2-9.4,7.5-18.2,12.8-26.2C41.6,16.6,29.5,25.8,20.9,37.8z M76.3,7.4C73,7.6,69.7,8,66.5,8.6
c-6.8,8.6-12.2,18.5-16.1,29.2h25.9V7.4z M76.3,44.9H48.1c-2.9,10-4.6,20.6-4.9,31.4h33.2L76.3,44.9L76.3,44.9z M43.1,83.7
c0.3,10.9,2,21.4,4.9,31.4h28.3V83.7C76.3,83.7,43.1,83.7,43.1,83.7z M83.7,7.4v30.3h24.2c-4-10.8-9.5-20.8-16.4-29.5
C88.9,7.8,86.3,7.6,83.7,7.4z M102.1,10.8c5.5,8.2,10,17.3,13.3,27h23.7C130.1,25.2,117.1,15.6,102.1,10.8z M143.6,44.9h-26
c2.8,10,4.4,20.6,4.6,31.4h30.3C152,65,148.8,54.3,143.6,44.9z"></path></svg>
    </div>
    <div class="u-align-center-lg u-align-center-md u-align-center-sm u-align-center-xs u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-form u-radius-5 u-white u-form-1">
      <form action="{{ route('post-assembly') }}" method="POST" class="u-clearfix u-form-custom-backend u-form-spacing-30 u-form-vertical u-inner-form" style="padding: 50px;" source="custom" name="form" redirect="true">
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
          <input type="tel" placeholder="+38(***)***-****" id="text-edb9" name="name-2" class="u-border-2 u-border-no-left u-border-no-top u-border-palette-1-light-2 u-input u-input-rectangle u-text-palette-1-dark-1 u-white u-input-3" required="required" pattern="+38(***)***-****">
        </div>
        <div class="u-form-group u-form-select u-form-group-4">
          <label for="select-a3e6" class="u-label u-text-palette-1-dark-1 u-label-4">Выберите нужные опции для вашего ПК<br>Процессор</label>
          <div class="u-form-select-wrapper">
            <select id="select-a3e6" name="select" class="u-border-2 u-border-no-left u-border-no-top u-border-palette-1-light-2 u-input u-input-rectangle u-text-palette-1-dark-1 u-white u-input-4">
              <option value="Не определился">Не знаю</option>
              <option value="AMD A-Series">AMD A-Series</option>
              <option value="AMD Athlon">AMD Athlon</option>
              <option value="AMD EPYC">AMD EPYC</option>
              <option value="AMD FX-Series">AMD FX-Series</option>
              <option value="AMD Opteron">AMD Opteron</option>
              <option value="AMD Ryzen 3">AMD Ryzen 3</option>
              <option value="AMD Ryzen 5">AMD Ryzen 5</option>
              <option value="AMD Ryzen 7">AMD Ryzen 7</option>
              <option value="AMD Ryzen 9">AMD Ryzen 9</option>
              <option value="AMD Ryzen Threadripper">AMD Ryzen Threadripper</option>
              <option value="Intel Celeron">Intel Celeron</option>
              <option value="Intel Core 2">Intel Core 2</option>
              <option value="Intel Core i3">Intel Core i3</option>
              <option value="Intel Core i5">Intel Core i5</option>
              <option value="Intel Core i7">Intel Core i7</option>
              <option value="Intel Core i9">Intel Core i9</option>
              <option value="Intel Pentium">Intel Pentium</option>
              <option value="Intel Xeon Bronze">Intel Xeon Bronze</option>
              <option value="Intel Xeon E">Intel Xeon E</option>
              <option value="Intel Xeon E3">Intel Xeon E3</option>
              <option value="Intel Xeon E5">Intel Xeon E5</option>
              <option value="Intel Xeon E7">Intel Xeon E7</option>
              <option value="Intel Xeon Gold">Intel Xeon Gold</option>
              <option value="Intel Xeon Silver">Intel Xeon Silver</option>
              <option value="Intel Xeon W">Intel Xeon W</option>
              <option value="Intel Xeon X">Intel Xeon X</option>
              <option value="Phenom">Phenom</option>
              <option value="Semprom">Semprom</option>
            </select>
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret"><path fill="currentColor" d="M4 8L0 4h8z"></path></svg>
          </div>
        </div>
        <div class="u-form-group u-form-select u-form-group-5">
          <label for="select-5a20" class="u-label u-text-palette-1-dark-1 u-label-5">ОЗУ</label>
          <div class="u-form-select-wrapper">
            <select id="select-5a20" name="select-1" class="u-border-2 u-border-no-left u-border-no-top u-border-palette-1-light-2 u-input u-input-rectangle u-text-palette-1-dark-1 u-white u-input-5">
              <option value="Не определился">Не знаю</option>
              <option value="2 GB">2 GB</option>
              <option value="4 GB">4 GB</option>
              <option value="8 GB">8 GB</option>
              <option value="16 GB">16 GB</option>
              <option value="32 GB">32 GB</option>
              <option value="64 GB">64 GB</option>
              <option value="128 GB">128 GB</option>
            </select>
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret"><path fill="currentColor" d="M4 8L0 4h8z"></path></svg>
          </div>
        </div>
        <div class="u-form-group u-form-select u-form-group-6">
          <label for="select-4fa2" class="u-label u-text-palette-1-dark-1 u-label-6">Жесткий накопитель</label>
          <div class="u-form-select-wrapper">
            <select id="select-4fa2" name="select-2" class="u-border-2 u-border-no-left u-border-no-top u-border-palette-1-light-2 u-input u-input-rectangle u-text-palette-1-dark-1 u-white u-input-6">
              <option value="Не определился">Не знаю</option>
              <option value="HDD менее 120 GB">HDD менее 120 GB</option>
              <option value="HDD 128 GB">HDD 128 GB</option>
              <option value="HDD 256 GB">HDD 256 GB</option>
              <option value="HDD 512 GB">HDD 512 GB</option>
              <option value="HDD 1 TB">HDD 1 TB</option>
              <option value="HDD более 1 TB">HDD более 1 TB</option>
              <option value="SDD менее 120 GB">SDD менее 120 GB</option>
              <option value="SDD 128 GB">SDD 128 GB</option>
              <option value="SDD 256 GB">SDD 256 GB</option>
              <option value="SDD 512 GB">SDD 512 GB</option>
              <option value="SDD 1 TB">SDD 1 TB</option>
              <option value="SDD более 1 TB">SDD более 1 TB</option>
            </select>
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret"><path fill="currentColor" d="M4 8L0 4h8z"></path></svg>
          </div>
        </div>
        <div class="u-form-group u-form-select u-form-group-7">
          <label for="select-2e3e" class="u-label u-text-palette-1-dark-1 u-label-7">Видеокарта</label>
          <div class="u-form-select-wrapper">
            <select id="select-2e3e" name="select-3" class="u-border-2 u-border-no-left u-border-no-top u-border-palette-1-light-2 u-input u-input-rectangle u-text-palette-1-dark-1 u-white u-input-7">
              <option value="Не определился">Не знаю</option>
              <option value="GeForce GTX 960">GeForce GTX 960</option>
              <option value="GeForce GTX 1050">GeForce GTX 1050</option>
              <option value="GeForce GTX 1080">GeForce GTX 1080</option>
              <option value="GeForce GTX 1660">GeForce GTX 1660</option>
              <option value="GeForce RTX 2060">GeForce RTX 2060</option>
              <option value="GeForce RTX 2080">GeForce RTX 2080</option>
              <option value="GeForce RTX 3050">GeForce RTX 3050</option>
              <option value="GeForce RTX 3090">GeForce RTX 3090</option>
              <option value="Radeon HD6350">Radeon HD6350</option>
              <option value="Radeon HD6570">Radeon HD6570</option>
              <option value="Radeon HD7350">Radeon HD7350</option>
              <option value="Radeon HD7850">Radeon HD7850</option>
              <option value="Radeon Pro W5700">Radeon Pro W5700</option>
              <option value="Radeon Pro WX 7100">Radeon Pro WX 7100</option>
              <option value="Radeon RX 5500 XT">Radeon RX 5500 XT</option>
              <option value="Radeon RX 6600 XT">Radeon RX 6600 XT</option>
            </select>
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret"><path fill="currentColor" d="M4 8L0 4h8z"></path></svg>
          </div>
        </div>
        <div class="u-align-left u-form-group u-form-submit u-form-group-8">
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

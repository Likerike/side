@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="css/coment2.css" media="screen">

<section class="u-clearfix u-section-6" id="sec-1296">
  <div class="u-clearfix u-sheet u-sheet-1">
    @foreach($comments as $com)
    <div class="u-clearfix u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-gutter-0 u-layout-wrap u-layout-wrap-1">
      <div class="u-layout">
        <div class="u-layout-row">
          <div class="u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-md u-align-left-xl u-container-style u-layout-cell u-left-cell u-size-13 u-layout-cell-1">
            <div class="u-container-layout u-valign-middle u-container-layout-1">
              <div alt="" class="u-align-left u-expanded-width-lg u-expanded-width-md u-expanded-width-xl u-image u-image-circle u-image-1" src="" data-image-width="256" data-image-height="256"></div>
            </div>
          </div>
          <div class="u-container-style u-layout-cell u-right-cell u-size-47 u-layout-cell-2">
            <div class="u-container-layout u-valign-middle u-container-layout-2">
              <h5 class="u-align-left u-custom-font u-font-oswald u-text u-text-1">{{ $com->name }}</h5>
              <p class="u-align-justify u-custom-font u-font-oswald u-text u-text-2">{{ $com->comment }}</p>
              <h6 class="u-align-left u-custom-font u-font-oswald u-text u-text-3"><span class="u-file-icon u-icon u-opacity u-opacity-40 u-text-palette-1-light-1 u-icon-1"><img src="images/33.png" alt=""></span>&nbsp;{{ $com->created_at }}</h6>
              @if(Auth::user())
                @if(Auth::user()->name == "admin")
                  <a href="{{ route('comment-delete', $com->id) }}" class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-50 u-btn-2">Удалить</a><!--{{ route('comment-delete', $com->id) }}-->
                @elseif(Auth::user()->name == $com->name)
                  <a href="{{ route('comment-delete', $com->id) }}" class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-50 u-btn-2">Удалить</a><!--{{ route('comment-delete', $com->id) }}-->
                @endif
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach
    <a href="{{ route('commentsform')}}" class="u-align-right u-btn u-button-style u-custom-font u-font-oswald u-hover-palette-1-dark-1 u-palette-1-base u-btn-3">Оставить отзыв</a>
  </div>
</section>

@endsection

@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="css/lists.css" media="screen">
<section class="u-align-center u-clearfix u-section-8" id="carousel_af08">
  <div class="u-clearfix u-sheet u-sheet-1">
    <h1 class="u-custom-font u-font-oswald u-text u-text-default u-text-1">Заявления на сборку</h1>
    <div class="u-expanded-width u-table u-table-responsive u-table-1">
      <table class="u-table-entity u-table-entity-1">
        <colgroup>
          <col width="4.1%">
          <col width="15.2%">
          <col width="14.4%">
          <col width="16.2%">
          <col width="30.7%">
          <col width="10%">
          <col width="9.6%">
        </colgroup>
        <thead class="u-align-center u-palette-1-dark-1 u-table-header u-table-header-1">
          <tr style="height: 21px;">
            <th class="u-border-1 u-border-black u-table-cell">№</th>
            <th class="u-border-1 u-border-black u-table-cell">Имя</th>
            <th class="u-border-1 u-border-black u-table-cell">Дата</th>
            <th class="u-border-1 u-border-black u-table-cell">Телефон</th>
            <th class="u-border-1 u-border-black u-table-cell">Описание</th>
          </tr>
        </thead>
        <tbody class="u-align-center u-table-body">
          @foreach($assembly as $key => $as)
          <tr style="height: 75px;">
            <td class="u-border-1 u-border-grey-30 u-table-cell">{{ $key }}</td>
            <td class="u-border-1 u-border-grey-30 u-table-cell">{{ $as->name }} {{ $as->surname }}</td>
            <td class="u-border-1 u-border-grey-30 u-table-cell">{{ $as->created_at }}</td>
            <td class="u-border-1 u-border-grey-30 u-table-cell">{{ $as->phone }}</td>
            <td class="u-border-1 u-border-grey-30 u-table-cell">
              CPU:{{ $as->cpu }},<br>RAM:{{ $as->ram }},<br>HDD:{{ $as->hdd }},<br>Video Card:{{ $as->video }}.
            </td>
            <form action="{{ route('list-orders-for-assembly-okey', $as->id) }}" method='post'>
                @csrf
                <td class="u-border-1 u-border-white u-table-cell"><button>Принять</button></td>
            </form>
            <form action="{{ route('list-orders-for-assembly-no', $as->id) }}" method='post'>
                @csrf
                <td class="u-border-1 u-border-white u-table-cell"><button>Отказать</button></td>
            </form>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <a href="{{ route('cabinet') }}" class="u-btn u-button-style u-custom-font u-font-oswald u-btn-1">Назад</a>
  </div>
</section>

@endsection

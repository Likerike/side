@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="css/lists.css" media="screen">

<section class="u-align-center u-clearfix u-section-7" id="carousel_7f4a">
  <div class="u-clearfix u-sheet u-sheet-1">
    <h1 class="u-custom-font u-font-oswald u-text u-text-default u-text-1">История</h1>
    <div class="u-expanded-width u-table u-table-responsive u-table-1">
      <table class="u-table-entity u-table-entity-1">
        <colgroup>
          <col width="4.8%">
          <col width="17.7%">
          <col width="16.8%">
          <col width="16.8%">
          <col width="29.8%">
          <col width="14.1%">
        </colgroup>
        <thead class="u-align-center u-palette-1-dark-1 u-table-header u-table-header-1">
          <tr style="height: 21px;">
            <th class="u-border-1 u-border-black u-table-cell">№</th>
            <th class="u-border-1 u-border-black u-table-cell">Имя</th>
            <th class="u-border-1 u-border-black u-table-cell">Дата</th>
            <th class="u-border-1 u-border-black u-table-cell">Вид заказа</th>
            <th class="u-border-1 u-border-black u-table-cell">Описание</th>
            <th class="u-border-1 u-border-black u-table-cell">Статус</th>
          </tr>
        </thead>
        <tbody class="u-align-center u-table-body">
          @foreach($orderrepair as $key => $or)
          <tr style="height: 75px;">
            <td class="u-border-1 u-border-grey-30 u-table-cell">{{ $key }}</td>
            <td class="u-border-1 u-border-grey-30 u-table-cell">{{ $or->name }} {{ $or->surname }}</td>
            <td class="u-border-1 u-border-grey-30 u-table-cell">{{ $or->created_at }}</td>
            <td class="u-border-1 u-border-grey-30 u-table-cell">Ремонт</td>
            <td class="u-border-1 u-border-grey-30 u-table-cell">{{ $or->problem }}</td>
            <td class="u-border-1 u-border-grey-30 u-table-cell">{{ $or->status }}</td>
          </tr>
          @endforeach

          @foreach($orderassembly as $key => $oa)
          <tr style="height: 75px;">
            <td class="u-border-1 u-border-grey-30 u-table-cell">{{ $key }}</td>
            <td class="u-border-1 u-border-grey-30 u-table-cell">{{ $oa->name }} {{ $oa->surname }}</td>
            <td class="u-border-1 u-border-grey-30 u-table-cell">{{ $oa->created_at }}</td>
            <td class="u-border-1 u-border-grey-30 u-table-cell">Сборка</td>
            <td class="u-border-1 u-border-grey-30 u-table-cell">
              CPU:{{ $oa->cpu }},<br>RAM:{{ $oa->ram }},<br>HDD:{{ $oa->hdd }},<br>Video Card:{{ $oa->video }}.</td>
            <td class="u-border-1 u-border-grey-30 u-table-cell">{{ $oa->status }}</td>
          </tr>
          @endforeach

          @foreach($ordersetting as $key => $os)
          <tr style="height: 75px;">
            <td class="u-border-1 u-border-grey-30 u-table-cell">{{ $key }}</td>
            <td class="u-border-1 u-border-grey-30 u-table-cell">{{ $os->name }} {{ $os->surname }}</td>
            <td class="u-border-1 u-border-grey-30 u-table-cell">{{ $os->created_at }}</td>
            <td class="u-border-1 u-border-grey-30 u-table-cell">Настройка ОС</td>
            <td class="u-border-1 u-border-grey-30 u-table-cell">Вид услуги: {{ $os->service }}</td>
            <td class="u-border-1 u-border-grey-30 u-table-cell">{{ $os->status }}</td>
          </tr>
          @endforeach

          @foreach($orderscool as $key => $osc)
          <tr style="height: 75px;">
            <td class="u-border-1 u-border-grey-30 u-table-cell">{{ $key }}</td>
            <td class="u-border-1 u-border-grey-30 u-table-cell">{{ $osc->name }} {{ $osc->surname }}</td>
            <td class="u-border-1 u-border-grey-30 u-table-cell">{{ $osc->created_at }}</td>
            <td class="u-border-1 u-border-grey-30 u-table-cell">Компьютерные классы</td>
            <td class="u-border-1 u-border-grey-30 u-table-cell">
              Школа: {{ $osc->scool }}<br> Доп. требования: {{ $osc->options }}
            </td>
            <td class="u-border-1 u-border-grey-30 u-table-cell">{{ $osc->status }}</td>
          </tr>
          @endforeach

        </tbody>
      </table>
    </div>
    <a href="{{ route('myorders') }}" class="u-btn u-button-style u-custom-font u-font-oswald u-btn-1">Назад</a>
    <a href="{{ route('denaid') }}" class="u-btn u-button-style u-custom-font u-font-oswald u-btn-1">История отказы</a>
  </div>
</section>

@endsection

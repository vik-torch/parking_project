@extends('layouts.content_wrapper')
@section('content')
  <div class="app_main__element">
    <div class="ticket_number__wrapper">
      <div class="ticket_number">
        Билет № {{$ticket_number}}
      </div>
    </div>
    <div class="app_main__debt text-center">
      Ваша задолженность составляет<br>
      <span>{{111}}₽</span>
    </div>
  </div>
  <div class="app_main__element">
    Выберите способ оплаты:
  </div>
  <div class="app_main__element">
    <div class="list_item__wrapper">
      <a href="{{ route('pay.card') }}">
        <button id="payment_card" class="payment_method__btn parking_btn" type="button" name="button">
          <div class="d-flex align-items-center">
            <div class="btn_icon__wrapper">
              <i class="bi bi-credit-card btn_icon icon_rotate"></i>
            </div>
            <div class="payment_method__title text-start">
              ОПЛАТА КАРТОЙ
            </div>
          </div>
        </button>
      </a>
    </div>
    <div class="list_item__wrapper">
      <a href="{{ route('pay.loyalty') }}">
        <button id="payment_loyalty" class="payment_method__btn parking_btn" type="button" name="button">
          <div class="d-flex align-items-center">
            <div class="btn_icon__wrapper">
              <i class="bi bi-percent btn_icon"></i>
            </div>
            <div class="payment_method__title text-start">
              ОПЛАТА СИСТЕМОЙ ЛОЯЛЬНОСТИ
            </div>
          </div>
        </button>
      </a>
    </div>
  </div>
@endsection

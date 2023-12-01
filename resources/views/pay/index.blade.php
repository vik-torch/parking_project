@extends('layouts.main')
@section('content')
  <main>
    <div class="d-flex flex-column">
      @include('layouts.img_header')
      <div class="container">
        <div class="app_main d-flex justify-content-center">
          <div class="app_main__content">
            <div class="app_main__element">
              <p class="app_main__title">
                ОПЛАТА ПАРКОВОЧНОГО МЕСТА ТРЦ “РИО” ДМИТРОВКА
              </p>
            </div>
            <div class="app_main__element">
              @include('layouts.steps')
            </div>
            <div class="app_main__element">
              <div class="ticket_number__wrapper">
                <div class="ticket_number">
                  Билет № {{$ticket_number}}
                </div>
              </div>
            </div>
            <div class="app_main__element">
              Выберите способ оплаты:
            </div>
            <div class="app_main__element">
              <div class="list_item__wrapper">
                <button class="payment_method__item parking_btn" type="button" name="button">
                  <div class="d-flex align-items-center">
                    <div class="btn_icon__wrapper">
                      <i class="bi bi-credit-card btn_icon icon_rotate"></i>
                    </div>
                    <div class="payment_method__title text-start">
                      ОПЛАТА КАРТОЙ
                    </div>
                  </div>
                </button>
              </div>
              <div class="list_item__wrapper">
                <button class="payment_method__item parking_btn" type="button" name="button">
                  <div class="d-flex align-items-center">
                    <div class="btn_icon__wrapper">
                      <i class="bi bi-percent btn_icon"></i>
                    </div>
                    <div class="payment_method__title text-start">
                      ОПЛАТА СИСТЕМОЙ ЛОЯЛЬНОСТИ
                    </div>
                  </div>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection

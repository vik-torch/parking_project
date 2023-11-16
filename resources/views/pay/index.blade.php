@extends('layouts.main')
@section('content')
  <main>
    <div class="container">
      <div class="tacket_data d-flex justify-content-end">
        <div class="ticket_number__wrapper">
          <div class="ticket_number">
            Билет № {{$ticket_number}}
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-center">
        <div class="flex-column">
          <div class="">
            Выберите способ оплаты:
          </div>
          <div class="payment_method__list">
            <div class="select_list">
              <div class="list_inner">
                <div class="list_item__wrapper">
                  <button class="payment_method__item" type="button" name="button">
                    <img class="payment_method__img_bg" src="">
                    <!-- <div class="payment_method__title__wrapper d-flex justify-content-center"> -->
                    <div class="">
                      <i class="bi bi-credit-card"></i>
                      <div class="payment_method__title">
                        Оплата картой
                      </div>
                    </div>
                  </button>
                </div>
                <div class="list_item__wrapper">
                  <button class="payment_method__item" type="button" name="button">
                    <img class="payment_method__img_bg" src="">
                    <!-- <div class="payment_method__title__wrapper d-flex justify-content-center"> -->
                    <div class="">
                      <i class="bi bi-percent"></i>
                      <div class="payment_method__title">
                        Оплата системой лояльности
                      </div>
                    </div>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection

@extends('layouts.content_wrapper')
@section('content')
  <!-- Добавление чеков -->
  <div class="app_main__element">
    <p>Сканирование билета</p>
    <div class="app_pay__check_list">
      <div class="app_pay__check_list__wraper">

        <!-- Сканирование чеков -->
        <div class="add_check parking_border">
          <!-- <div class="accordion" id="accordionAddCheck"> -->
          <div class="app_accordion__add_check" id="accordionAddCheck">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="app_accordeon__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <div class="d-flex align-items-center">
                    <div class="btn_icon__wrapper">
                      <i class="bi bi-upc-scan btn_icon"></i>
                    </div>
                    <div class="add_check__title text-start">
                      ДОБАВИТЬ ЧЕК
                    </div>
                  </div>
                </button>
              </h2>
              <!-- <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionAddCheck"> -->
              <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionAddCheck">
                <div class="accordion-body camera_wrapp">
                  <div class="camera d-flex flex-column">
                    <div class="app_video__wrapper d-flex">
                      <video id="video">Video stream not available.</video>
                    </div>
                    <button class="parking_btn" id="startbutton">Take photo</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- Список чеков -->
  <div class="app_main__element">
    <div class="check_list">
      <div class="app_check__item_wrapper">
        <div class="check_item d-flex justify-content-between">
          <div class="check_text">
            Билет №{{1}}
          </div>
          <div class="check_amount">
            {{300}}₽
          </div>
        </div>
      </div>
    </div>
    <div class="check_list">
      <div class="app_check__item_wrapper">
        <div class="check_item d-flex justify-content-between">
          <div class="check_text">
            Билет №{{2}}
          </div>
          <div class="check_amount">
            {{350}}₽
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Сумма чеков -->
  <div class="app_main__element">
    <div class="pt-3">
      <h4 class="text_emphasis">Баланс: {{650}}₽</h4>
    </div>
  </div>

  <div class="app_main__element">
    <div class="d-flex justify-content-between">
      <div class="switch_btn__item">
        <a href="{{ route('pay.success') }}">
          <button class="parking_btn" type="button" name="button">
            ОПЛАТИТЬ
          </button>
        </a>
      </div>
      <div class="switch_btn__item">
        <a href="{{ route('pay.card') }}">
          <button class="parking_btn" type="button" name="button">
            ДОБАВИТЬ<br>С КАРТЫ
          </button>
        </a>
      </div>
    </div>
  </div>

@endsection

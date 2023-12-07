@extends('layouts.content_wrapper')
@section('content')
  <div class="app_main__element">
    <p>Сканирование билета</p>
    <div class="app_pay__check_list">
      <div class="app_pay__check_list__wraper">

        <!-- Добавление билетов -->
        <div class="add_check parking_border">
          <!-- <div class="accordion" id="accordionAddTicket"> -->
          <div class="app_accordion__add_check" id="accordionAddTicket">
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
              <!-- <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionAddTicket"> -->
              <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionAddTicket">
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

        <!-- Список билетов -->
        <div class="ticket_list">
          <div class="app_ticket__item">

          </div>
        </div>

      </div>
    </div>
  </div>
@endsection

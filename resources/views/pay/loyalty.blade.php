@extends('layouts.content_wrapper')
@section('content')
  <div class="app_main__element">
    <p>Сканирование билета</p>
    <div class="app_pay__tickets_list">
      <div class="app_pay__tickets_list__wraper">
        <div class="add_ticket parking_border">
          <div class="accordion" id="accordionAddTicket">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  ДОБАВИТЬ БИЛЕТ
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionAddTicket">
                <div class="accordion-body">
                  Тело добавления билета
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="ticket_list">

        </div>
      </div>
    </div>
  </div>
@endsection

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
              <form class="" action="{{ route('pay.index') }}" method="post">
                @csrf

                <div class="form-group">
                  <label for="form_input__ticket_number">Введите номер билета</label>
                  <div class="mt-2">
                    <input name="ticket_number"
                    class="form-control form_input__element_input @error('ticket_number') is-invalid @enderror"
                    type="search"
                    id="form_input__ticket_number"
                    autocapitalize="off"
                    autocomplete="off"
                    inputmode="search"
                    autocorrect="off"
                    spellcheck="false"
                    placeholder="Номер билета"
                    value="{{ old('ticket_number') }}"
                    required>
                    @error('ticket_number')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                  <div class="mt-3">
                    <button type="submit" class="form_btn parking_btn btn w-100">ДАЛЕЕ</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection

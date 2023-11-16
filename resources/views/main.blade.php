@extends('layouts.main')
@section('content')
  <main>
    <div class="container">
      <div class="app_main d-flex justify-content-center">
        <form class="" action="{{ route('pay.index') }}" method="post">
          @csrf

          <div class="form-group">
            <label for="form_input__ticket_number">Введите номер билета</label>
            <div class="mt-2">
              <input name="ticket_number"
                      type="search"
                      class="form-control @error('email') is-invalid @enderror"
                      id="form_input__ticket_number"
                      autocapitalize="off"
                      autocomplete="off"
                      inputmode="search"
                      autocorrect="off"
                      spellcheck="false"
                      placeholder="Номер билета"
                      name="email"
                      value="{{ old('email') }}"
                      required>
                      @error('email')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
            </div>
            <div class="mt-2">
              <button type="submit" class="btn btn-success">Перейти к оплате</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </main>
@endsection

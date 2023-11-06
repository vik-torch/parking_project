@extends('layouts.main')
@section('content')
  <main>
    <div class="container">
      <div class="app_main d-flex justify-content-center">
        <form class="">
          <div class="form-group">
            <label for="form_input__ticket_number">Введите номер билета</label>
            <div class="mt-2">
              <input type="search" class="form-control" id="form_input__ticket_number" autocapitalize="off" autocomplete="off" inputmode="search" autocorrect="off" spellcheck="false" placeholder="Номер билета">
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

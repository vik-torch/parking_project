@extends('layouts.content_wrapper')
@section('content')
  <div class="app_main__element">
    <div class="app_success_message">
      <div class="d-flex justify-content-center">
        <div class="circle success_circle d-flex">
          <i class="bi bi-check2"></i>
        </div>
      </div>
    </div>
    <div class="text-center">
      Оплата прошла успешно!<br>Ваш долг списан.
    </div>
  </div>

  <div class="app_main__element">
    <a href="{{ route('main') }}">
      <button class="parking_btn mt-2" type="button" name="button">
        НА ГЛАВНУЮ
      </button>
    </a>
  </div>

@endsection

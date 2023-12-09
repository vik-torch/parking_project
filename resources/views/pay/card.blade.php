@extends('layouts.content_wrapper')
@section('content')
<div class="app_main__element">
  <a href="{{ route('pay.success') }}">
    <button class="parking_btn mt-2" type="button" name="button">
      ОПЛАТИТЬ
    </button>
  </a>
</div>

@endsection

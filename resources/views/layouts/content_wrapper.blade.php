@extends('layouts.main')
@section('content_wrapper')
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

          @yield('content')
          
        </div>
      </div>
    </div>
  </div>
</main>
@endsection

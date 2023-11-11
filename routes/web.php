<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\MainController;
// use App\Http\Controllers\Pay\IndexController as PayController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/mypage', [MainController::class, 'index']);
// Route::get('/', [MainController::class, 'index']);

// Route::get('/pay', [PayController::class, 'index'])->name('pay.index');
// Route::get('/pay', function() { return 'Привет';});

Route::group(['namespace' => 'App\Http\Controllers'], function() {
  Route::get('/', 'MainController@index');

  Route::group(['namespace' => 'Pay'], function() {
    Route::get('/pay', 'IndexController@index')->name('pay.index');
  });
});

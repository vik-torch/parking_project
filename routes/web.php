<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Pay\IndexController as PayController;
// use App\Http\Controllers\Pay\IndexController as PayController;
use App\Http\Controllers\Pay\LoyaltyController;
use App\Http\Controllers\Pay\CardController;

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
Route::get('/', [MainController::class, 'index'])->name('main');

Route::get('/pay', [PayController::class, 'index'])->name('pay.index');

// Это нужно переделать под реальную проверку номера билета и редирект на нужную страницу
Route::post('/pay', [PayController::class, 'index'])->name('pay.checkTicket');

Route::get('/pay/loyalty', [LoyaltyController::class, 'index'])->name('pay.loyalty');
Route::get('/pay/card', [CardController::class, 'index'])->name('pay.card');
Route::get('/pay/success', [PayController::class, 'successPay'])->name('pay.success');

// Route::group(['namespace' => 'App\Http\Controllers'], function() {
//   Route::get('/', 'MainController@index');
//
//   Route::group(['namespace' => 'Pay'], function() {
//     Route::get('/pay', 'IndexController@index')->name('pay.index');
//   });
// });

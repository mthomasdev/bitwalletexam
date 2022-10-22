<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TickerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/binance', [TickerController::class, 'getBinanceTickerPriceBySymbol']);
Route::get('/bittrex', [TickerController::class, 'getBittrexTickerPriceBySymbol']);
Route::get('/bestprice', [TickerController::class, 'getBestPrice']);

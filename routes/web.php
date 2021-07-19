<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::post('/verify-mobile', [HomeController::class, 'verifyMobile'])->name('verify_mobile');
Route::post('/verify-otp', [HomeController::class, 'verifyOTP'])->name('verify_otp');

Route::get('/', function () {
    return view('index');
});

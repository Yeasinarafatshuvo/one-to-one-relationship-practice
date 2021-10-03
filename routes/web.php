<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MobileController;
use App\Http\Controllers\indexController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('add-customer', [CustomerController::Class, 'add_customer']);
Route::get('show-mobile/{id}', [CustomerController::Class, 'show_mobile']);
Route::get('show-customer/{id}', [MobileController::Class, 'show_customer']);
Route::get('index/{id}', [indexController::Class, 'index']);

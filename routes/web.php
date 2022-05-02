<?php

use App\Http\Controllers\AdvertController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Registration;
use App\Http\Controllers\Login;

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
    return view('index');
});

Route::resource('/advert', AdvertController::class);


Route::get('/registration', [Registration::class, 'index']);

Route::post('/registration', [Registration::class, 'registration']);

Route::get('/login', [Login::class, 'login']);

Route::post('/login', [Login::class, 'getLogin']);

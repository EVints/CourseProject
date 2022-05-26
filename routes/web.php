<?php

use App\Http\Controllers\AdvertController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Registration;
use App\Http\Controllers\Login;
use App\Http\Controllers\Profile;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\CommercialAdverts;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\SubmitAdvert;

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
Route::post('/Advert-create', [SubmitAdvert::class, 'submitAdd']);


Route::get('/registration', [Registration::class, 'index']);
Route::post('/registration', [Registration::class, 'registration']);

Route::get('/login', [Login::class, 'login']);

Route::post('/login', [Login::class, 'getLogin']);

Route::get('/login/logout', [Login::class, 'logOut']);


Route::get('/gallery', [PhotoController::class, 'index']);
Route::post('/gallery', [PhotoController::class, 'photoAdd']);


Route::get('/profile', [Profile::class, 'index']);


Route::get('/journey', [CommercialAdverts::class, 'index']);


Route::get('/journey/admin/create', [CommercialAdverts::class, 'commercial_create_show']);
Route::post('/journey/admin/create', [CommercialAdverts::class, 'commercial_create']);


Route::get('/about_us', [AboutUsController::class, 'index']);
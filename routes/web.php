<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('profile');
});

Route::get('/get-user-info', 'FormController@getUserInfo');

Route::post('/chill_path', 'FormController@chill_path')->name('chill_path');

Route::get('gofleet-blog',function(){
    return redirect()->away('http://heera.it');
})->name('gofleet-blog');

Route::post('/submit-form', 'FormController@submitForm')->name('submitForm');

<?php

use Illuminate\Support\Facades\Request;

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

Route::get('/times', 'TimeController@index')->name('index');

//Route::match(['get', 'post'], '/times', function() {
//    dd('ola mundo, metodo '.Request::method());
//});

//Route::get('/times/{nome}', function ($nome) {
//    return \App\Time::where('nome', 'like', $nome."%")->get();
//})->where('nome', '[A-Za-z]+');

//Route::options('/times', 'TimeController@index');
//Route::match(['get', 'post'], '/', 'TimeController@index');
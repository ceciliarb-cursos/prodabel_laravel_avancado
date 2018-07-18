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

<<<<<<< HEAD

Route::middleware('auth')->group(function() {
    Route::get('/times/{id?}', 'TimeController@index');
});
=======
Route::get('/times', 'TimeController@index')->name('index'); 
>>>>>>> 03f0297c5832a1757750f5b6f04cf7a32ef9c1c0

//Route::match(['get', 'post'], '/times', function() {
//    dd('ola mundo, metodo '.Request::method());
//});

//Route::get('/times/{nome}', function ($nome) {
//    return \App\Time::where('nome', 'like', $nome."%")->get();
//})->where('nome', '[A-Za-z]+');

//Route::options('/times', 'TimeController@index');
//Route::match(['get', 'post'], '/', 'TimeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

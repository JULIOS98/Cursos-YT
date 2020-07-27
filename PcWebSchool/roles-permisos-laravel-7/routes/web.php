<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/main', 'FrontEndController@index')->name('index');
Route::get('/about', 'FrontEndController@about')->name('about');
Route::get('/contacto', 'FrontEndController@contacto')->name('contacto');

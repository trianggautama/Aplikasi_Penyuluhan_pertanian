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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//User Route
Route::get('/user', 'userController@index')->name('userIndex');
Route::get('/user/edit', 'userController@edit')->name('userEdit');

//Kecamatan Route
Route::get('/kecamatan', 'kecamatanController@index')->name('kecamatanIndex');
Route::get('/kecamatan/edit', 'kecamatanController@edit')->name('kecamatanEdit');

////evaluasi Route
Route::get('/evaluasi', 'evaluasiController@index')->name('evaluasiIndex');
Route::get('/evaluasi/edit', 'evaluasiController@edit')->name('evaluasiEdit');
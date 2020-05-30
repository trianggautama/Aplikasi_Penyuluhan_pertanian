<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/index', 'adminController@index')->name('adminIndex');

//User Route
Route::get('/user', 'userController@index')->name('userIndex');
Route::get('/user/edit', 'userController@edit')->name('userEdit');

//Kecamatan Route
Route::get('/kecamatan', 'kecamatanController@index')->name('kecamatanIndex');
Route::get('/kecamatan/edit', 'kecamatanController@edit')->name('kecamatanEdit');

////evaluasi Route
Route::get('/evaluasi', 'evaluasiController@index')->name('evaluasiIndex');
Route::get('/evaluasi/edit', 'evaluasiController@edit')->name('evaluasiEdit');

////pelatihan Route
Route::get('/pelatihan', 'pelatihanController@index')->name('pelatihanIndex');
Route::get('/pelatihan/detail', 'pelatihanController@show')->name('pelatihanShow');
Route::get('/pelatihan/edit', 'pelatihanController@edit')->name('pelatihanEdit');

////Berita Route
Route::get('/berita', 'beritaController@index')->name('beritaIndex');
Route::get('/berita/detail', 'beritaController@show')->name('beritaShow');
Route::get('/berita/edit', 'beritaController@edit')->name('beritaEdit');
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/index', 'adminController@index')->name('adminIndex');

//User Route
Route::get('/user/index', 'userController@index')->name('userIndex');
Route::post('/user/index', 'userController@store')->name('userStore');
Route::get('/user/edit/{uuid}', 'userController@edit')->name('userEdit');
Route::put('/user/edit/{uuid}', 'userController@update')->name('userUpdate');
Route::get('/user/delete/{uuid}', 'userController@destroy')->name('userDestroy');

//Kecamatan Route
Route::get('/kecamatan/index', 'kecamatanController@index')->name('kecamatanIndex');
Route::post('/kecamatan/index', 'kecamatanController@store')->name('kecamatanStore');
Route::get('/kecamatan/edit/{uuid}', 'kecamatanController@edit')->name('kecamatanEdit');
Route::put('/kecamatan/edit/{uuid}', 'kecamatanController@update')->name('kecamatanUpdate');
Route::get('/kecamatan/delete/{uuid}', 'kecamatanController@destroy')->name('kecamatanDestroy');

////evaluasi Route
Route::get('/evaluasi', 'evaluasiController@index')->name('evaluasiIndex');
Route::get('/evaluasi/edit', 'evaluasiController@edit')->name('evaluasiEdit');

////pelatihan Route
Route::get('/pelatihan', 'pelatihanController@index')->name('pelatihanIndex');
Route::get('/pelatihan/detail', 'pelatihanController@show')->name('pelatihanShow');
Route::get('/pelatihan/edit', 'pelatihanController@edit')->name('pelatihanEdit');

////modul Route
Route::get('/modul', 'modulController@index')->name('modulIndex');
Route::get('/modul/detail', 'modulController@show')->name('modulShow');
Route::get('/modul/edit', 'modulController@edit')->name('modulEdit');

////Berita Route
Route::get('/berita', 'beritaController@index')->name('beritaIndex');
Route::get('/berita/detail', 'beritaController@show')->name('beritaShow');
Route::get('/berita/edit', 'beritaController@edit')->name('beritaEdit');

////Cetak Report
Route::get('/kecamatan/cetak', 'reportController@kecamatanCetak')->name('kecamatanCetak');
Route::get('/evaluasi/cetak', 'reportController@evaluasiCetak')->name('evaluasiCetak');
Route::get('/pelatihan/cetak', 'reportController@pelatihanCetak')->name('pelatihanCetak');
Route::get('/pelatihan/detailk/cetak', 'reportController@detailPelatihanCetak')->name('detailPelatihanCetak');

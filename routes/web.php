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
Route::get('/evaluasi/index', 'evaluasiController@index')->name('evaluasiIndex');
Route::post('/evaluasi/index', 'evaluasiController@store')->name('evaluasiStore');
Route::get('/evaluasi/edit/{uuid}', 'evaluasiController@edit')->name('evaluasiEdit');
Route::put('/evaluasi/edit/{uuid}', 'evaluasiController@update')->name('evaluasiUpdate');
Route::get('/evaluasi/delete/{uuid}', 'evaluasiController@destroy')->name('evaluasiDestroy');

////pelatihan Route
Route::get('/pelatihan/index', 'pelatihanController@index')->name('pelatihanIndex');
Route::post('/pelatihan/index', 'pelatihanController@store')->name('pelatihanStore');
Route::get('/pelatihan/detail/{uuid}', 'pelatihanController@show')->name('pelatihanShow');
Route::get('/pelatihan/edit/{uuid}', 'pelatihanController@edit')->name('pelatihanEdit');
Route::put('/pelatihan/edit/{uuid}', 'pelatihanController@update')->name('pelatihanUpdate');
Route::get('/pelatihan/delete/{uuid}', 'pelatihanController@destroy')->name('pelatihanDestroy');

////modul Route
Route::get('/modul/index', 'modulController@index')->name('modulIndex');
Route::post('/modul/index', 'modulController@store')->name('modulStore');
Route::get('/modul/preview/{uuid}', 'modulController@preview')->name('modulPreview');
Route::get('/modul/edit/{uuid}', 'modulController@edit')->name('modulEdit');
Route::put('/modul/edit/{uuid}', 'modulController@update')->name('modulUpdate');
Route::get('/modul/delete/{uuid}', 'modulController@destroy')->name('modulDestroy');

////Berita Route
Route::get('/berita', 'beritaController@index')->name('beritaIndex');
Route::get('/berita/detail', 'beritaController@show')->name('beritaShow');
Route::get('/berita/edit', 'beritaController@edit')->name('beritaEdit');

////Cetak Report
Route::get('/kecamatan/cetak', 'reportController@kecamatanCetak')->name('kecamatanCetak');
Route::get('/evaluasi/cetak', 'reportController@evaluasiCetak')->name('evaluasiCetak');
Route::get('/pelatihan/cetak', 'reportController@pelatihanCetak')->name('pelatihanCetak');
Route::get('/pelatihan/detailk/cetak', 'reportController@detailPelatihanCetak')->name('detailPelatihanCetak');

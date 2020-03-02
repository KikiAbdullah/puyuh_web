<?php

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

//Route Gaji
Route::get('/gaji', 'GajiController@index');
Route::get('/gaji/edit/{id}', 'GajiController@edit');
Route::get('/gaji/add', 'GajiController@add');

//Route Kandang
Route::get('/kandang', 'KandangController@index');
Route::get('/kandang/edit/{id}', 'KandangController@edit');
Route::get('/kandang/add', 'KandangController@add');

//Route Kas
Route::get('/kas', 'KasController@index');
Route::get('/kas/edit/{id}', 'KasController@edit');
Route::get('/kas/add', 'KasController@add');

//Route LaporanHarian
Route::get('/laporanHarian', 'LaporanHarianController@index');
Route::get('/laporanHarian/edit/{id}', 'LaporanHarianController@edit');
Route::get('/laporanHarian/add', 'LaporanHarianController@add');

//Route PendapatanBersih
Route::get('/pendapatanBersih', 'PendapatanBersihController@index');
Route::get('/pendapatanBersih/edit/{id}', 'PendapatanBersihController@edit');
Route::get('/pendapatanBersih/add', 'PendapatanBersihController@add');

//Route PendapatanHarian
Route::get('/pendapatanHarian', 'PendapatanHarianController@index');
Route::get('/pendapatanHarian/edit/{id}', 'PendapatanHarianController@edit');
Route::get('/pendapatanHarian/add', 'PendapatanHarianController@add');

//Route PengeluaranHarian
Route::get('/pengeluaranHarian', 'PengeluaranHarianController@index');
Route::get('/pengeluaranHarian/edit/{id}', 'PengeluaranHarianController@edit');
Route::get('/pengeluaranHarian/add', 'PengeluaranHarianController@add');

//Route Utang
Route::get('/utang', 'UtangController@index');
Route::get('/utang/edit/{id}', 'UtangController@edit');
Route::get('/utang/add', 'UtangController@add');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

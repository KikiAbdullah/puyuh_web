<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('loginAndroid','Auth\LoginController@loginAndroid');

//API Gaji
Route::get('gaji','GajiController@show');
Route::get('/gaji/{id}','GajiController@showById');
Route::put('/gaji/{id}','GajiController@update');
Route::post('gaji','GajiController@create');
Route::delete('/gaji/{id}','GajiController@delete');

//API Kandang
Route::get('kandang','KandangController@show');
Route::get('/kandang/{id}','KandangController@showById');
Route::post('kandang','KandangController@create');
Route::put('/kandang/{id}','KandangController@update');
Route::delete('/kandang/{id}','KandangController@delete');

//API Kas
Route::get('kas','KasController@show');
Route::get('/kas/{id}','KasController@showById');
Route::post('kas','KasController@create');
Route::put('/kas/{id}','KasController@update');
Route::delete('/kas/{id}','KasController@delete');

//API Laporan Harian
Route::get('laporanHarian','LaporanHarianController@show');
Route::get('/laporanHarian/{id}','LaporanHarianController@showById');
Route::post('laporanHarian','LaporanHarianController@create');
Route::put('/laporanHarian/{id}','LaporanHarianController@update');
Route::delete('/laporanHarian/{id}','LaporanHarianController@delete');

//API Pendapatan Bersih
Route::get('pendapatanBersih','PendapatanBersihController@show');
Route::get('/pendapatanBersih/{id}','PendapatanBersihController@showById');
Route::post('pendapatanBersih','PendapatanBersihController@create');
Route::put('/pendapatanBersih/{id}','PendapatanBersihController@update');
Route::delete('/pendapatanBersih/{id}','PendapatanBersihController@delete');

//API Pendapatan Harian
Route::get('pendapatanHarian','PendapatanHarianController@show');
Route::get('/pendapatanHarian/{id}','PendapatanHarianController@showById');
Route::post('pendapatanHarian','PendapatanHarianController@create');
Route::put('/pendapatanHarian/{id}','PendapatanHarianController@update');
Route::delete('/pendapatanHarian/{id}','PendapatanHarianController@delete');

//API Pengeluaran Harian
Route::get('pengeluaranHarian','PengeluaranHarianController@show');
Route::get('/pengeluaranHarian/{id}','PengeluaranHarianController@showById');
Route::post('pengeluaranHarian','PengeluaranHarianController@create');
Route::put('/pengeluaranHarian/{id}','PengeluaranHarianController@update');
Route::delete('/pengeluaranHarian/{id}','PengeluaranHarianController@delete');

//API Utang
Route::get('utang','UtangController@show');
Route::get('/utang/{id}','UtangController@showById');
Route::post('utang','UtangController@create');
Route::put('/utang/{id}','UtangController@update');
Route::delete('/utang/{id}','UtangController@delete');


Route::get('keuangan','KeuanganController@show');

<?php


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
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// ->middleware('jwt.verify')
//AUTH 
Route::post('login', 'AuthController@login');
Route::post('register', 'AuthController@register');
Route::get('user', 'AuthController@getAuthenticatedUser')->middleware('jwt.verify');
Route::post('loginAndroid', 'AuthController@loginAndroid');

//API Gaji
Route::get('gaji','GajiController@show')->middleware('jwt.verify');
Route::get('/gaji/{id}','GajiController@showById')->middleware('jwt.verify');
Route::put('/gaji/{id}','GajiController@update')->middleware('jwt.verify');
Route::post('gaji','GajiController@create')->middleware('jwt.verify');
Route::delete('/gaji/{id}','GajiController@delete')->middleware('jwt.verify');

//API Kandang
Route::get('kandang','KandangController@show')->middleware('jwt.verify');
Route::get('/kandang/{id}','KandangController@showById')->middleware('jwt.verify');
Route::post('kandang','KandangController@create')->middleware('jwt.verify');
Route::put('/kandang/{id}','KandangController@update')->middleware('jwt.verify');
Route::delete('/kandang/{id}','KandangController@delete')->middleware('jwt.verify');

//API Kas
Route::get('kas','KasController@show')->middleware('jwt.verify');
Route::get('/kas/{id}','KasController@showById')->middleware('jwt.verify');
Route::post('kas','KasController@create')->middleware('jwt.verify');
Route::put('/kas/{id}','KasController@update')->middleware('jwt.verify');
Route::delete('/kas/{id}','KasController@delete')->middleware('jwt.verify');

//API Laporan Harian
Route::get('laporanHarian','LaporanHarianController@show')->middleware('jwt.verify');
Route::get('/laporanHarian/{id}','LaporanHarianController@showById')->middleware('jwt.verify');
Route::post('laporanHarian','LaporanHarianController@create')->middleware('jwt.verify');
Route::put('/laporanHarian/{id}','LaporanHarianController@update')->middleware('jwt.verify');
Route::delete('/laporanHarian/{id}','LaporanHarianController@delete')->middleware('jwt.verify');

//API Pendapatan Bersih
Route::get('pendapatanBersih','PendapatanBersihController@show')->middleware('jwt.verify');
Route::get('/pendapatanBersih/{id}','PendapatanBersihController@showById')->middleware('jwt.verify');
Route::post('pendapatanBersih','PendapatanBersihController@create')->middleware('jwt.verify');
Route::put('/pendapatanBersih/{id}','PendapatanBersihController@update')->middleware('jwt.verify');
Route::delete('/pendapatanBersih/{id}','PendapatanBersihController@delete')->middleware('jwt.verify');

//API Pendapatan Harian
Route::get('pendapatanHarian','PendapatanHarianController@show')->middleware('jwt.verify');
Route::get('/pendapatanHarian/{id}','PendapatanHarianController@showById')->middleware('jwt.verify');
Route::post('pendapatanHarian','PendapatanHarianController@create')->middleware('jwt.verify');
Route::put('/pendapatanHarian/{id}','PendapatanHarianController@update')->middleware('jwt.verify');
Route::delete('/pendapatanHarian/{id}','PendapatanHarianController@delete')->middleware('jwt.verify');

//API Pengeluaran Harian
Route::get('pengeluaranHarian','PengeluaranHarianController@show')->middleware('jwt.verify');
Route::get('/pengeluaranHarian/{id}','PengeluaranHarianController@showById')->middleware('jwt.verify');
Route::post('pengeluaranHarian','PengeluaranHarianController@create')->middleware('jwt.verify');
Route::put('/pengeluaranHarian/{id}','PengeluaranHarianController@update')->middleware('jwt.verify');
Route::delete('/pengeluaranHarian/{id}','PengeluaranHarianController@delete')->middleware('jwt.verify');

//API Utang
Route::get('utang','UtangController@show')->middleware('jwt.verify');
Route::get('/utang/{id}','UtangController@showById')->middleware('jwt.verify');
Route::post('utang','UtangController@create');
Route::put('/utang/{id}','UtangController@update');
Route::delete('/utang/{id}','UtangController@delete');


Route::get('keuangan','KeuanganController@show')->middleware('jwt.verify');


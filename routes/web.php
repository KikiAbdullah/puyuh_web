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
//Auth
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Auth::routes();

//NAVBAR
Route::get('/', 'HomeController@index')->name('home');
//dashboard
Route::get('/home', 'HomeController@index')->name('home');
//profile
Route::get('/profile', 'ProfileController@showProfile')->name('profile');
//kandang

Route::get('/populasi', 'LaporanHarianController@indexPopulasi')->name('populasi');
Route::get('/populasi/edit-kematian/{id}', 'LaporanHarianController@editKematian');
Route::get('/populasi/edit-kandang/{id}', 'KandangController@edit');
Route::get('/populasi/{month}', 'LaporanHarianController@indexPopulasi')->name('populasi');

Route::get('/produksi', 'LaporanHarianController@indexProduksi')->name('produksi');
Route::get('/produksi/edit/{id}', 'LaporanHarianController@editProduksi');
Route::get('/produksi/{month}', 'LaporanHarianController@indexProduksi')->name('produksi');
//Pendapatan
Route::get('/pendapatan', 'PendapatanHarianController@index')->name('pendapatan');
Route::get('/pendapatanBersih', 'PendapatanBersihController@index')->name('pendapatanBersih');
//Pengeluaran
Route::get('/pengeluaran', 'PengeluaranHarianController@index')->name('pengeluaranHarian');
Route::get('/pengeluaran/edit/{id}','PengeluaranHarianController@edit');
//hutang
Route::get('/hutang', 'UtangController@index')->name('utang');
Route::get('/hutang/edit/{id}','UtangController@edit');
//gaji
Route::get('/gaji', 'GajiController@index')->name('gaji');
Route::get('/gaji/edit/{id}','GajiController@edit');
//Kas
Route::get('/kas', 'KasController@index')->name('kas');
Route::get('/kas/edit/{id}','KasController@edit');

// //Hutang

// Route::get('/populasi/edit-kematian', function () {
//     return view('populasi/edit-kematian');
// });

//Gaji
// Route::get('/gaji', function () {
//     return view('gaji/index');
// });
// Route::get('/gaji/edit', function () {
//     return view('gaji/edit');
// });
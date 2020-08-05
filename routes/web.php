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
Route::get('/login', function () {
    return view('auth/login');
});
Route::get('/register', function () {
    return view('auth/register');
});
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');


//NAVBAR
Route::get('/', 'HomeController@index')->name('home');
//dashboard
Route::get('/home', 'HomeController@index');
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
Route::get('/pendapatan/edit/{id}','PendapatanHarianController@edit');
Route::get('/pendapatanBersih', 'PendapatanBersihController@index')->name('pendapatanBersih');
//Pengeluaran
Route::get('/pengeluaran', 'PengeluaranHarianController@index')->name('pengeluaranHarian');
Route::get('/pengeluaran/edit/{id}','PengeluaranHarianController@edit');
//hutang
Route::get('/hutang', 'UtangController@index',)->name('utang');
Route::get('/hutang/edit/{id}','UtangController@edit');
Route::get('/hutang/pembayaran/{id}','UtangController@pembayaran');
//gaji
Route::get('/gaji', 'GajiController@index')->name('gaji');
Route::get('/gaji/edit/{id}','GajiController@edit');
Route::get('/gaji/pembayaran','GajiController@pembayaran');
//Kas
Route::get('/kas', 'KasController@index')->name('kas');
Route::get('/kas/edit/{id}','KasController@edit');


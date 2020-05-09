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
Route::get('/populasi/{month}', 'LaporanHarianController@indexPopulasi')->name('populasi');

Route::get('/produksi', 'LaporanHarianController@indexProduksi')->name('produksi');
Route::get('/produksi/{month}', 'LaporanHarianController@indexProduksi')->name('produksi');
//Pendapatan
Route::get('/pendapatan', 'PendapatanHarianController@index')->name('pendapatan');
Route::get('/pendapatanBersih', 'PendapatanBersihController@index')->name('pendapatanBersih');
//Pengeluaran
Route::get('/pengeluaran', 'PengeluaranHarianController@index')->name('pengeluaranHarian');
//
Route::get('/hutang', 'UtangController@index')->name('utang');

//Kas
Route::get('/kas', function () {
    return view('kas/index');
});
Route::get('/kas/edit', function () {
    return view('kas/edit');
});

// //Hutang
// Route::get('/hutang', function () {
//     return view('hutang/index');
// });
// Route::get('/hutang/edit', function () {
//     return view('hutang/edit');
// });

//Gaji
Route::get('/gaji', function () {
    return view('gaji/index');
});
Route::get('/gaji/edit', function () {
    return view('gaji/edit');
});
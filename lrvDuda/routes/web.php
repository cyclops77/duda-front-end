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

Route::get('/', function () {return view('guest.index');});
Route::get('/about-us', function () {return view('guest.about-us');});
Route::get('/service-one', function () {return view('guest.service-one');});
Route::get('/service-two', function () {return view('guest.service-two');});
Route::get('/service-three', function () {return view('guest.service-three');});
Route::get('/news', function () {return view('guest.news');});
// Route::get('/pesan-sekarang', function () {return view('guest.pesan-sekarang');});

Route::get('/has-selected-layanan','LayananController@selectedLayanan');
Route::get('/has-selected-category','LayananController@selectedCategory');
Route::get('/pesan-sekarang','LayananController@index');
Route::get('/json-kategori','LayananController@kategori');
Route::get('/json-produk','LayananController@produk');
Route::post('/cek-order','LayananController@cek');
Route::get('/refresh_captcha','LayananController@refreshCaptcha');
Route::post('/check_captcha','LayananController@cekCaptcha');


Route::get('/contact-us', function () {return view('guest.contact-us');});
Route::get('/kebijakan-layanan', function () {return view('guest.kebijakan-layanan');});
Route::get('/privasi-pengguna', function () {return view('guest.privasi-pengguna');});
Route::get('/cek-status-order', function () {return view('guest.cek-status-order');});
Route::get('/konfirmasi-pembayaran', function () {return view('guest.konfirmasi-pembayaran');});
Route::get('/testimonial', function () {return view('guest.testimonial');});
Route::get('/portfolio-index',function () {return view('guest.portfolio');});

Route::get('/ajax-pages', function () {return view('guest.ajax');});
Route::get('/notifikasi','NotifiyController@index');
Route::get('/test', function () {return view('test');});
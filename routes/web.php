<?php

use App\Http\Controllers\AngsuranController;
use App\Http\Controllers\DatapimpinanController;
use App\Http\Controllers\konfigurasi;
use App\Penjualankavling;
use Illuminate\Support\Facades\Route;

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
    return view('dasboard.index');
});
Route::get('crud', function () {
    return view('dasboard.crud');
});
Route::get('/crud/tambah','Controller@tambah')->name('crud.tambah');


Route::get('profil', 'ProfilController@profil');
Route::resource('kategori', 'KategoriKavlingController');
Route::resource('subkategori', 'SubkategoriController');
Route::resource('datakavling', 'DatakavlingController');
Route::resource('metodepembayaran', 'MetodepembayaranController');
Route::resource('lamaangsuran', 'LamaangsuranController');
Route::resource('datapimpinan', 'DatapimpinanController');
Route::resource('datapembeli','DatapembeliController');
Route::resource('datamarketing','DatamarketingController');
Route::resource('penjualankavling','PenjualankavlingController');
// Route::resource('penjualantunai','PenjualantunaiController');

Route::get('penjualantunai/index','PenjualantunaiController@index')->name('penjualantunai.index');
Route::get('penjualantunai/create','PenjualantunaiController@create')->name('penjualantunai.create');
Route::post('penjualantunai/create','PenjualantunaiController@store')->name('penjualantunai.store');
Route::get('penjualantunai/kwitansi','PenjualantunaiController@kwitansi')->name('penjualantunai.kwitansi');
Route::get('penjualantunai/cetak','PenjualantunaiController@cetak')->name('penjualantunai.cetak');

Route::get('tunai/index/{id}', 'TunaiController@index')->name('tunai.index');
Route::get('tunai/create/{id}', 'TunaiController@create')->name('tunai.create');
Route::post('tunai/create/{id}', 'TunaiController@store')->name('tunai.store');
Route::get('tunai/kwitansi/{id}', 'TunaiController@kwitansi')->name('tunai.kwitansi');
Route::get('tunai/cetak/{id}', 'TunaiController@cetak')->name('tunai.cetak');


// Route::resource('angsuranpenjualan', 'AngsuranController');
Route::get('angsuran/index/{id}', 'AngsuranController@index')->name('angsuran.index');
Route::get('angsuran/create/{id}', 'AngsuranController@create')->name('angsuran.create');
Route::post('angsuran/create/{id}', 'AngsuranController@store')->name('angsuran.store');
Route::get('angsuran/cetak/{id}', 'AngsuranController@cetak')->name('angsuran.cetak');
Route::get('angsuran/kwitansi/{id}', 'AngsuranController@kwitansi')->name('angsuran.kwitansi');
Route::get('angsuran/excel/{id}', 'AngsuranController@exportExcel')->name('angsuran.excel');


Route::get('lamaangsurantambah/create/{id}', 'LamaangsurantambahController@create')->name('lamaangsurantambah.create');
Route::post('lamaangsurantambah/create/{id}', 'LamaangsurantambahController@store')->name('lamaangsurantambah.store');

Route::get('dasboard/index', 'DasboardController@index')->name('dasboard.index');

//route untuk dompdf
// Route::get('/', function () {
//     return view('index');
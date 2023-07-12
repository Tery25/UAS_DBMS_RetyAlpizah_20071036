<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('bagian_ra', 'App\Http\Controllers\bagian_raController@index');
Route::get('barang_ra', 'App\Http\Controllers\barang_raController@index');
Route::get('pengeluaran_ra', 'App\Http\Controllers\pengeluaran_raController@index');
Route::get('pengeluaranitem_ra', 'App\Http\Controllers\pengeluaranitem_raController@index');
Route::get('petugas_ra', 'App\Http\Controllers\petugas_raController@index');
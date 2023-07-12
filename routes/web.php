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
Route::get('bagian_kt', 'App\Http\Controllers\bagian_ktController@index');
Route::get('barang_kt', 'App\Http\Controllers\barang_ktController@index');
Route::get('pengeluaran_kt', 'App\Http\Controllers\pengeluaran_ktController@index');
Route::get('pengeluaranitem_kt', 'App\Http\Controllers\pengeluaranitem_ktController@index');
Route::get('petugas_kt', 'App\Http\Controllers\petugas_ktController@index');
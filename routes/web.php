<?php

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

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/pegawai', function () {
    return view('pegawai');
});

Route::get('/tambah-pegawai', function () {
    return view('pegawai/add-peg');
});

Route::get('/tambah-pelanggan', function () {
    return view('pelanggan/add-pelanggan');
});

Route::get('/tambah-paket', function () {
    return view('paket/add-paket');
});

Route::get('/pelanggan', function () {
    return view('pelanggan');
});

Route::get('/transaksi', function () {
    return view('transaksi');
});

Route::get('/paket', function () {
    return view('paket');
});

Route::get('/laporan', function () {
    return view('laporan');
});

Route::get('/login', function () {
    return view('login');
});
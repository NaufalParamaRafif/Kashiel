<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardProdukController;
use App\Http\Controllers\DashboardCategoryController;
use App\Http\Controllers\DashboardPelangganController;
use App\Http\Controllers\DashboardPenjualanController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::resource('/dashboard_penjualan', DashboardPenjualanController::class)->names('dashboard_penjualan');

Route::resource('/dashboard_produk', DashboardProdukController::class)->names('dashboard_produk');

Route::resource('/dashboard_pelanggan', DashboardPelangganController::class)->names('dashboard_pelanggan');

Route::resource('/dashboard_category', DashboardCategoryController::class)->names('dashboard_category');
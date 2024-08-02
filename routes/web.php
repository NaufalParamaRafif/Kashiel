<?php

use App\Http\Controllers\DashboardPenjualanController;
use Illuminate\Support\Facades\Route;

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
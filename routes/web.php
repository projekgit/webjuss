<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KategoriController;

Route::get('/dashboard', function () {
    return view('layouts/app');
})->name('dashboard')->middleware('auth');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('login', [AuthController::class,'authentinate'])->name('authentinate');

Route::POST('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/', function () {
    return view('index');
})->name('index')->middleware('auth');


Route::get('/jeruk', function () {
    return view('viewoptions/jeruk');
})->name('jeruk');

Route::get('/buahnaga', function () {
    return view('viewoptions/buahnaga');
})->name('buahnaga');

Route::get('/jambu', function () {
    return view('viewoptions/jambu');
})->name('jambu');

Route::get('/alpukat', function () {
    return view('viewoptions/alpukat');
})->name('alpukat');

Route::get('/mangga', function () {
    return view('viewoptions/mangga');
})->name('mangga');

Route::get('/nanas', function () {
    return view('viewoptions/nanas');
})->name('nanas');

Route::get('/semangka', function () {
    return view('viewoptions/semangka');
})->name('semangka');

Route::get('/pisang', function () {
    return view('viewoptions/pisang');
})->name('pisang');

// Route::POST('/logout', [AuthController::class, 'logout']);

Route::resource('/users', AuthController::class);
Route::resource('/kategori', KategoriController::class);


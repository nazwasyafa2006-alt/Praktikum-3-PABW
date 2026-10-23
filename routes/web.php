<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanBanjirController;

Route::get('/', [LaporanBanjirController::class, 'index'])->name('reports.index');
Route::get('/create', [LaporanBanjirController::class, 'create'])->name('reports.create');
Route::post('/store', [LaporanBanjirController::class, 'store'])->name('reports.store');
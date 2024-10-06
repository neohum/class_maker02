<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchoolInfoController;
use App\Http\Controllers\ExcelDataController;
use App\Http\Controllers\Step01Controller;
use App\Http\Controllers\Step02Controller;

Route::get('/', [SchoolInfoController::class, 'index'])->name('index');

Route::post('/store', [SchoolInfoController::class, 'store'])->name('store');

Route::get('/excel/upload', [ExcelDataController::class, 'index'])->name('excel.create');
Route::post('/excel/upload', [ExcelDataController::class, 'store'])->name('excel.store');

Route::get('/step01', [Step01Controller::class, 'index'])->name('step01');
Route::post('/step01', [Step01Controller::class, 'store'])->name('step01.store');

Route::get('/step01_store', [Step02Controller::class, 'index'])->name('step01_store');

Route::get('/step02', [Step02Controller::class, 'index'])->name('step02');

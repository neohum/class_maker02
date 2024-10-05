<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchoolInfoController;
use App\Http\Controllers\ExcelDataController;

Route::get('/', [SchoolInfoController::class, 'index'])->name('index');

Route::post('/school-info', [SchoolInfoController::class, 'store'])->name('store');

Route::get('/excel/upload', [ExcelDataController::class, 'index'])->name('excel.create');
Route::post('/excel/upload', [ExcelDataController::class, 'store'])->name('excel.store');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchoolInfoController;
use App\Http\Controllers\ExcelDataController;
use App\Http\Controllers\Step01Controller;
use App\Http\Controllers\Step02Controller;
use App\Http\Controllers\Step03Controller;
use App\Http\Controllers\Step04Controller;

Route::get('/', function () {
    return view('index');
});

Route::get('/start', [SchoolInfoController::class, 'index'])->name('start');

Route::post('/store', [SchoolInfoController::class, 'store'])->name('store');

Route::get('/excel/upload', [ExcelDataController::class, 'index'])->name('excel.create');
Route::post('/excel/upload', [ExcelDataController::class, 'store'])->name('excel.store');

Route::get('/step01', [Step01Controller::class, 'index'])->name('step01');
//Route::post('/step01', [Step01Controller::class, 'store'])->name('step01.store');
Route::get('/step02', [Step02Controller::class, 'index'])->name('step02');
//Route::get('/step01_store', [Step02Controller::class, 'index'])->name('step01_store');

Route::get('/step03', [Step03Controller::class, 'index'])->name('step03');

Route::get('/last', [Step04Controller::class, 'index'])->name('last');
Route::get('/step04', [Step04Controller::class, 'delete'])->name('step04.delete');

Route::get('/store1', [Step03Controller::class, 'store1'])->name('store1');
Route::get('/store2', [Step03Controller::class, 'store2'])->name('store2');

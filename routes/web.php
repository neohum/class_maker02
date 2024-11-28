<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchoolInfoController;
use App\Http\Controllers\ExcelDataController;
use App\Http\Controllers\Step01Controller;
use App\Http\Controllers\Step02Controller;
use App\Http\Controllers\Step03_01_Controller;
use App\Http\Controllers\Step03_02_Controller;
use App\Http\Controllers\Step03Controller;
use App\Http\Controllers\Step04Controller;
use App\Http\Controllers\Step03_03_Controller;

Route::get('/', function () {
    return view('index');
});

Route::get('/start', [SchoolInfoController::class, 'index'])->name('start');
Route::post('/store', [SchoolInfoController::class, 'store'])->name('store');

Route::get('/excel/index', [ExcelDataController::class, 'index'])->name('excel.index');
Route::get('/excel/delete', [ExcelDataController::class, 'delete'])->name('excel.delete');
Route::post('/excel/store', [ExcelDataController::class, 'store'])->name('excel.store');

Route::get('/step01', [Step01Controller::class, 'index'])->name('step01');
//Route::post('/step01', [Step01Controller::class, 'store'])->name('step01.store');
Route::get('/step02', [Step02Controller::class, 'index'])->name('step02');
//Route::get('/step01_store', [Step02Controller::class, 'index'])->name('step01_store');

Route::get('/step03', [Step03Controller::class, 'index'])->name('step03');

Route::get('/step03_01', [Step03_01_Controller::class, 'index'])->name('step03_01');

Route::get('/step03_02', [Step03_02_Controller::class, 'index'])->name('step03_02');

Route::get('/step03_03', [Step03_03_Controller::class, 'index'])->name('step03_03');

Route::get('/step04', [Step04Controller::class, 'index'])->name('step04');
Route::get('/step04', [Step04Controller::class, 'delete'])->name('step04.delete');

Route::get('/store1', [Step03Controller::class, 'store1'])->name('store1');
Route::get('/store2', [Step03Controller::class, 'store2'])->name('store2');

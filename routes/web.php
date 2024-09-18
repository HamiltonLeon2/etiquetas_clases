<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\ExcelController;

Route::get('/import', function () {
    return view('import_form');
})->name('import.form');

Route::post('/import', [ExcelController::class, 'import'])->name('import.process');

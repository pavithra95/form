<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;
use Google\Client;
use Google\Service\Sheets;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});


Route::post('/form-submit', [FormController::class, 'store'])->name('form.store');

Route::get('/download-sheet', [FormController::class, 'downloadSheet'])->name('sheet.download');
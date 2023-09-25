<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form', [FormController::class, 'showForm'])->name('form');
Route::post('/form', [FormController::class, 'submitForm']);
Route::get('/result', [FormController::class, 'formResult'])->name('result');


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NilaiController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/calculate', [NilaiController::class, 'calculate'])->name('calculate');

<?php

use App\Http\Controllers\OfficeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/office', [OfficeController::class, 'index'])->name('office');
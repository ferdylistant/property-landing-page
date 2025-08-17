<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;

Route::get('/', function () {
    return view('landing');
});

Route::get('/property/{slug}', [PropertyController::class, 'show'])->name('property.show');

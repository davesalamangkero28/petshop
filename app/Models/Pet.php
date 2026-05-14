<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('pets', PetController::class)->middleware('auth');

require __DIR__.'/auth.php';
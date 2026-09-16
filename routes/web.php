<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\ListController;


Route::middleware(['auth'])->group(function () {
    Route::resource('lists', ListController::class);
});
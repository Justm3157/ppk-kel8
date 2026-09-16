<?php

use App\Http\Controllers\ListController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::post('/lists', [ListController::class, 'store'])->name('lists.store');
});

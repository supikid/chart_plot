<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChartsController;

Route::get('/', [ChartsController::class, 'index']);
Route::post('/data', [ChartsController::class, 'data']);

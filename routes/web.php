<?php

use App\Http\Controllers\buildingController;
use Illuminate\Support\Facades\Route;

Route::get('/building', [buildingController::class, 'index']);
Route::get('/building/{room}', [buildingController::class, 'room']);

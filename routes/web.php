<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::get('/', [TestController::class, 'index']);
Route::get('/api/post', [TestController::class, 'add']);
Route::post('/api/post', [TestController::class, 'create']);
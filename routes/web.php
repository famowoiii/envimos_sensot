<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SensorController;

Route::get('/', function () {
    return view('landing');
});

Route::get('/das', function () {
    return view('dashboard'); 
});

Route::post('/sensor/{id}', [SensorController::class, 'create'])->name('post.alat1');
Route::get('/sensor', [SensorController::class, 'index'])->name('view.sensor');

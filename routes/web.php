<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\DashboardController; 

Route::get('/', function () {
    return view('welcome');
});

Route::get('/notificacao', [NotificationController::class, 'notificacao']);
Route::get('/dashboard', [DashboardController::class, 'index']);
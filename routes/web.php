<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'homeValue']);
Route::get('/est', [MainController::class, 'estruturaRepiticao']);
Route::get('metedo', [MainController::class, 'csrfinput']);
Route::post('submitform', [MainController::class, 'submitform'])->name('submit');
Route::get('setSession', [MainController::class, 'setSession']);
Route::get('clearSession', [MainController::class, 'clearSession']);

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class , 'home'])->name('home');
Route::get('/about', [PageController::class , 'about'])->name('about');
Route::get('/speakers', [PageController::class , 'speakers'])->name('speakers');
Route::get('/schedule', [PageController::class , 'schedule'])->name('schedule');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Artisan; // <-- Added this to allow database commands

// Your existing website pages
Route::get('/', [PageController::class , 'home'])->name('home');
Route::get('/about', [PageController::class , 'about'])->name('about');
Route::get('/speakers', [PageController::class , 'speakers'])->name('speakers');
Route::get('/schedule', [PageController::class , 'schedule'])->name('schedule');

// The temporary route to build the database on Vercel
Route::get('/setup-database', function () {
    try {
        Artisan::call('migrate:fresh', [
            '--force' => true, // Force it to run on the live production server
            '--seed' => true   // Add your placeholder speakers and schedule data
        ]);
        return 'Database successfully built and seeded on Neon!';
    } catch (\Exception $e) {
        return 'Error: ' . $e->getMessage();
    }
});
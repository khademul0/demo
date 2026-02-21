<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\demo;
use App\Http\Controllers\userregistration;
use App\Http\Controllers\adminregis;
use App\Http\Controllers\PlayerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [demo::class, 'index']);
Route::get('/about', [demo::class, 'about']);
Route::get('/courses', [demo::class, 'course']);

Route::get('/register', [userregistration::class, 'rform']);
Route::post('/register', [userregistration::class, 'register']);

Route::get('/aregi', [adminregis::class, 'aform']);
Route::post('/aregi', [adminregis::class, 'aregister']);


/*
|--------------------------------------------------------------------------
| Player Routes (Professional Structure)
|--------------------------------------------------------------------------
*/

// Show Form
Route::get('/players/register', [PlayerController::class, 'create'])
    ->name('players.register');

// Store Data
Route::post('/players/register', [PlayerController::class, 'store'])
    ->name('players.store');

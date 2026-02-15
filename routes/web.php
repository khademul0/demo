<?php

use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\demo;
use App\Http\Controllers\userregistration;
use Symfony\Component\Routing\Route as RoutingRoute;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [demo::class, 'index']);
Route::get('/about', [demo::class, 'about']);
Route::get('/courses', [demo::class, 'course']);
route::get('/register', [userregistration::class, 'rform']);
route::post('/register', [userregistration::class, 'register']);

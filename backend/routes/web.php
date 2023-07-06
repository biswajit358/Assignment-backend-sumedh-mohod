<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AmenityController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/amenities', [AmenityController::class, 'index']);
Route::get('/amenities/add', [AmenityController::class, 'create']);
Route::post('/amenities', [AmenityController::class, 'store']);
Route::get('/amenities/{id}', [AmenityController::class, 'show']);
Route::get('/amenities/{id}/edit', [AmenityController::class, 'edit']);
Route::put('/amenities/{id}', [AmenityController::class, 'update']);
Route::delete('/amenities/{id}', [AmenityController::class, 'destroy']);

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CastleController;

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

Route::get('/', [CastleController::class, 'showWelcome'])->name('welcome');
Route::get('/gate', [CastleController::class, 'showGate'])->name('gate');
Route::get('/prison', [CastleController::class, 'showPrison'])->name('prison');
Route::get('/mainHole', [CastleController::class, 'showMainHole'])->name('mainHole');
<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PlayerController;
use App\Enums\PlayerRoleEnum;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('/', App\Http\Controllers\TeamController::class);
//Route::resource('teams', TeamController::class);

Route::resource('players', App\Http\Controllers\PlayerController::class);
Route::resource('teams', App\Http\Controllers\TeamController::class);
Route::resource('games', App\Http\Controllers\GameController::class);

//Route::resource('games', GameController::class);


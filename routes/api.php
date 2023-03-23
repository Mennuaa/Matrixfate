<?php

use App\Http\Controllers\ComfortController;
use App\Http\Controllers\DestinyController;
use App\Http\Controllers\KarmaController;
use App\Http\Controllers\MatrixTextController;
use App\Http\Controllers\MoneyController;
use App\Http\Controllers\PersonalPaidController;
use App\Http\Controllers\TalentsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/matrixes', [MatrixTextController::class, 'getAll']);
Route::get('/money', [MoneyController::class, 'getAll']);
Route::get('/comfort', [ComfortController::class, 'getAll']);
Route::get('/karma', [KarmaController::class, 'getAll']);
Route::get('/personal', [PersonalPaidController::class, 'getAll']);
Route::get('/talents', [TalentsController::class, 'getAll']);
Route::get('/destiny', [DestinyController::class, 'getAll']);

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/myapi/{namesauyab1}/{namesauyab2}', [App\Http\Controllers\sampleapi\ToldzApiController::class, 'loveCalculator'])->name('loveCalculator');

Route::get('/tarot/{nameofperson}', [App\Http\Controllers\sampleapi\TarotReaderController::class, 'tarot'])->name('tarot');

// Group1 3C

// Group2 3C

// Group3 3C

// Group4 3C

// Group5 3C

// Group6 3C
Route::group(['prefix' => 'oracle'], function () {
    // Get all oracle cards
    Route::get('/cards', [App\Http\Controllers\threec\OracleController::class, 'index'])->name('oracle.index');

    // Draw a random oracle card
    Route::get('/draw', [App\Http\Controllers\threec\OracleController::class, 'draw'])->name('oracle.draw');

    // Show a specific oracle card by ID
    Route::get('/card/{id}', [App\Http\Controllers\threec\OracleController::class, 'show'])->name('oracle.show');
});

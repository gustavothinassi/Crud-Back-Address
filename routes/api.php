<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\ApiViaCepController;


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

Route::get('/', function () {
    return response()->json(['message' => 'Api Laravel', 'status' => 'Connected']);
});

Route::fallback(function () {
    return response()->json(['message' => 'Route not found', 'status' => 'Connected']);
});


Route::resource('address', AddressController::class)->except(['create', 'edit']);

Route::get('getCep/{search}', [AddressController::class, 'getCep']);

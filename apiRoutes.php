<?php

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
Route::get('/rnd_values', [\App\Http\Controllers\Api\Rnd_value::class, 'index']);
Route::get('/rnd_values/{id}', [\App\Http\Controllers\Api\Rnd_value::class, 'retrieve']);
Route::post('/rnd', [\App\Http\Controllers\Api\Rnd_value::class, 'generate']);

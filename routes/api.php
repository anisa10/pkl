<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProvinsiController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

 Route::get('Provinsi', [ApiController::class, 'provinsi']);
 Route::get('Provinsi/{id}', [ApiController::class, 'provkota']);

Route::get('/provinsi', [ProvinsiController::class, 'index']);
Route::post('/provinsi/store', [ProvinsiController::class, 'strore']);
Route::get('/provinsi/{id}', [ProvinsiController::class, 'show']);
Route::put('/provinsi/update/{id}', [ProvinsiController::class, 'update']);
Route::delete('/provinsi/{id?}', [ProvinsiController::class, 'destroy']);
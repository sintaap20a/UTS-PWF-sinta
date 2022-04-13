<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
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

Route::post('/product', [ProdukController::class, 'store']);
Route::get('/product', [ProdukController::class, 'show']);
Route::get('/product/{id}', [ProdukController::class, 'showById']);
Route::put('/product/{id}',[ProdukController::class, 'update']);
Route::delete('/product/{id}', [ProdukController::class, 'delete']);

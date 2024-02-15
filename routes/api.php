<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiCategoriaController;
use App\Http\Controllers\ApiProductoController;

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


Route::prefix('v1')->group(function () {
    // Rutas para categorías
    Route::get('/categorias', [ApiCategoriaController::class, 'index']);

    // Rutas para  productos
    Route::get('/productos', [ApiProductoController::class, 'index']);
    Route::get('/producto/{id}', [ApiProductoController::class, 'show']);
  
    Route::delete('/producto/{id}', [ApiProductoController::class, 'destroy']);
    Route::post('/producto', [ApiProductoController::class, 'store']);
});

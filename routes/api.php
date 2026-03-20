<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/test', function () {
    return response()->json(['message' => 'Funciona']);
});

// Listar categorías
Route::get('/categories', [CategoryController::class, 'index']);

// Crear categoría
Route::post('/categories', [CategoryController::class, 'store']);

// Actualizar categoría
Route::put('/categories/{Category}', [CategoryController::class, 'update']);

// Borrar categoría
Route::delete('/categories/{Category}', [CategoryController::class, 'destroy']);
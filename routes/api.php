<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ParaleloController;
use App\Http\Controllers\EstudianteController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('paralelos', ParaleloController::class);
Route::apiResource('estudiantes', EstudianteController::class);

Route::post('/estudiantes', [EstudianteController::class, 'store']);
Route::post('/paralelos', [ParaleloController::class, 'store']);
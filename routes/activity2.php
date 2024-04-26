<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\TokenCheckerMiddleware;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|  mickeyumali1170
|  HATDOGRAM_123456789
*/
// GET Route
Route::get('/resource', function () {
  return "get data";
})->middleware(TokenCheckerMiddleware::class);

// POST Route
Route::post('/resource', function () {
  return "access granted";
})->middleware(TokenCheckerMiddleware::class);

// PUT Route
Route::put('/resource/{id}', function ($id) {
  return response()->json(['message' => 'PUT method accessed for resource with ID ' . $id]);
})->middleware(TokenCheckerMiddleware::class);

// PATCH Route
Route::patch('/resource/{id}', function ($id) {
  return response()->json(['message' => 'PATCH method accessed for resource with ID ' . $id]);
})->middleware(TokenCheckerMiddleware::class);

// DELETE Route
Route::delete('/resource/{id}', function ($id) {
  return response()->json(['message' => 'DELETE method accessed for resource with ID ' . $id]);
})->middleware(TokenCheckerMiddleware::class);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
  return $request->user();
});
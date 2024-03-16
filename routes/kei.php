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
|  mickeyumali1170
|  HATDOGRAM_123456789
*/

// Route::get('/cute', function () {
//   return 'kayla acosta sobrang cute ror';
// });

// Route::any('/updateUserInfo', function () {
//   return "this route is to accepts any http verb only";
// });

Route::get('/users', function (Request $request){
  return $request->name .'-'. $request->email;
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
  return $request->user();
});
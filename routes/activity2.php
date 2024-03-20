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

Route::get('/cute', function () {
  return 'cute ko JM Umali';
});

// Route::any('/updateUserInfo', function () {
//   return "this route is to accepts any http verb only";
// });

// Route::get('/users', function (Request $request){
//   return $request->name .'-'. $request->email;
// });

//post
Route::post('/register', function () {
    return "heloo mickey";
});

// put
Route::put('/update', function () {
  return "Your email is updated";
});

// patch
Route::patch('/update2', function () {
  return "Your email is updated";
});

// delete
Route::delete('/drop', function () {
  return "Your account is deleted";
});

// options
Route::options('/options-method', function () {
  return 1+1;
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
  return $request->user();
});
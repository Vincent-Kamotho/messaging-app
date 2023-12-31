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

Route::put('user/{id}/update', [App\Http\Controllers\ListUsersController::class, 'update']);
Route::get('user/{id}/delete', [App\Http\Controllers\ListUsersController::class, 'delete']);

Route::get('products', [App\Http\Controllers\ContactsController::class, 'indexApi']);
Route::put('product/{id}/update', [App\Http\Controllers\ContactsController::class, 'update']);

Route::resource('users', 'ListUsersController');
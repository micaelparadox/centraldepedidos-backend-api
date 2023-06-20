<?php

use Illuminate\Http\Middleware\EnsureTokenIsValid;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\LivroController;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/autores', [AutorController::class, 'apiIndex']);
Route::post('/autores', [AutorController::class, 'apiStore']);
Route::get('/autores/{id}', [AutorController::class, 'apiShow']);
Route::put('/autores/{id}', [AutorController::class, 'apiUpdate']);
Route::delete('/autores/{id}', [AutorController::class, 'apiDestroy']);

Route::get('/livros', [LivroController::class, 'apiIndex']);
Route::post('/livros', [LivroController::class, 'apiStore']);
Route::get('/livros/{id}', [LivroController::class, 'apiShow']);
Route::put('/livros/{id}', [LivroController::class, 'apiUpdate']);
Route::delete('/livros/{id}', [LivroController::class, 'apiDestroy']);

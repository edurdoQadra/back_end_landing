<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;


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


Route::get('test', function () {
    $message = "Este es un mensaje dentro de un objeto JSON.";
    return response()->json(['message' => $message]);
});


// Ruta para mostrar el formulario de registro
Route::get('/index', [RegisterController::class, 'index']);

// Ruta para procesar el registro de usuario
Route::post('/register', [RegisterController::class, 'register']);
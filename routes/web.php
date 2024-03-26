<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Route::get('test', function () {
//     $message = "Este es un mensaje dentro de un objeto JSON.";
//     return response()->json(['message' => $message]);
// });


// // Ruta para mostrar el formulario de registro
// Route::get('/index', [RegisterController::class, 'index']);

// // Ruta para procesar el registro de usuario
// Route::post('/register', [RegisterController::class, 'register']);
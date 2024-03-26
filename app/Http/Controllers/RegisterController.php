<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    //metooo index
    
    public function index(){
        // return view('register');
        return "Este es un mensaje desde un controlador en Laravel 9.";
    }

    public function register(Request $request){

        $request-> validate([

            'name' => 'required|string|max:200 ',
            'email' => 'required|string|email|max:100',
            'documentType'=>'required|string|max:100',            
            'documentNumber'=>'required|string|max:100',
            'password' => 'required| string|max:100 ',
            'over18' => 'required|accepted', 
            // Acepta solo si está marcado
            //'over18' => 'required| string|max:6 mal eso no esta bien ',

        ]);

        //creau usuario
        $user =new User();
        $user->name = $request ->name;
        $user->email = $request ->email;
        $user->password = Hash::make($request -> password);
        $user->save();
        $message = "El registro fue realizado con exito.";
        return response()->json(['message' => $message]);
          
    }

}

//dd($request->all());
// $message = json_encode($request->all());
// return response()->json(['message' => $message]);
// return "Este es un mensaje desde un controlador en Laravel 9.";
// $message = "Este es un mensaje dentro de un objeto JSON.";
// return response()->json(['message' => $message]);
// Crear un objeto JSON con los datos del request
// // echo($request);
// return redirect('/')->whit('success','¡Registro Exitoso!');
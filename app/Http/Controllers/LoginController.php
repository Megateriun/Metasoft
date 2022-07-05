<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Dotenv\Exception\ValidationException;
use League\Config\Exception\ValidationException as ExceptionValidationException;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function store(Request $request)
    {

        $request->validate([ //validacion, si falla ejecuta el error en el html
            'correo' => 'required|email|string',
            'contraseña' => 'required'
        ]);

        // para cambiar el idioma de los mensajes tiene que ir a:
        // config/app.php
        // NOTA: la carpeta lang se encuentra las carpetas del idioma de los mensajes
        $credentials = [
            'email' => $request['correo'],
            'password' => $request['contraseña'],
        ];

        if (Auth::attempt($credentials)) { // verifica si el usuario existe en la base de datos
            request()->session()->regenerate(); // para evitar un hueco de seguridad conosida como session fixation
            if(auth()->user()->role ==1){
                return redirect()->route('home.admin');
            }else{
                return redirect()->route('home.user');
            }
            
        }

       // return redirect()->route('login');
        return back()->with('mensaje','Cuenta o contraseña incorrecta');

    }

    public function destroy()
    {
        auth()->logout();
        return redirect()->route('index');
    }
}

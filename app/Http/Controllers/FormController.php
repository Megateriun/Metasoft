<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class FormController extends Controller
{
    
    public function form()
    {
        return view('form');
    }


    public function store(Request $request)
    {

        $request->validate([ //validacion, si falla ejecuta el error en el html
            'name' => 'required|string',
            'email' => 'required|email|string',
            'document' => 'required|int',
            'password' => 'required',
            'password_check' => 'required'
        ]);

        $input = $request->all();
/*
        $credentials = [
            'email' => $request['correo'],
            'password' => $request['contraseña'],
        ];
*/

        $email_check = User::where("email","=",$input['email'])->count(); // si el correo existe es igual a 1, en caso contrario 0
        $document_check = User::where("document","=",$input['document'])->count(); // si el documento existe es igual a 1, en caso contrario 0
        if($email_check == 0){
                if($document_check == 0){
                if($input['password'] == $input['password_check']){
                
                    // Hash the password
                    $input['password'] = bcrypt($input['password']);
                
                    User::create($input);
                
                    // event(UserWasCreated::class);
                    if (Auth::attempt($request->only('email', 'password'))) {
                        return redirect()->route('home.user')->with('Welcome','Bienvenido');
                    }
                }else{
                    return redirect('form')->with('error','No concuerdan las contraseñas')->withInput();
                }
            }else{
                return redirect('form')->with('error_documento','El documento ya existe')->withInput();
            }
        }else{
            return redirect('form')->with('error_correo','El correo ya existe')->withInput();
        }
        // Redirect
        return redirect('form')
            // And with the input data (so that the form will get populated again)
            ->withInput();
    }
   
}

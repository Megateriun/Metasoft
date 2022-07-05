<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
Use App\Models\Objects_user;
Use App\Models\User;

class UserController extends Controller
{
    public function profile()
    {
        return view('profile');
    }

    public function object()
    {
        $objects = Objects_user::where("owner","=",auth()->user()->id)->get(); // esto consulta y manda todos los registros de la base de datos
        return view('objects_user', compact('objects'));
    }

    public function acquired()
    {
        $objects = Objects_user::all();
        $transactions = Transaction::where("client","=",auth()->user()->id)->get(); // esto consulta y manda todos los registros de la base de datos
        // con get lo que trae de vuelta una coleccion de objetos
        //con all devuelve una array (coleccion) foreach
/* 
        $credentials = [
            'email' => $request['correo'],
            'password' => $request['contraseña'],
        ];
        
        foreach ($transactions as $transaction) {
            foreach ($objects as $object) {
                // code
                }
            }
  */      
        //return $objects->find(14);
    /*    $objects = Objects_user::where("id","=",$transactions->object_users)->get();*/
        return view('objects_acquired', compact('transactions','objects'));
    }

    public function edit_profile(Request $request)
    {
        
        $request->validate([ //validacion, si falla ejecuta el error en el html
            'name' => 'required|string',
            'email' => 'required|email|string',
            'document' => 'required|int'
        ]);

        //requiere que ferifique que el documento no este repetido

        $user = User::find(auth()->user()->id);
     
        $user->document = $request->document;
        $user->name = $request->name;
        $user->email = $request->email;
        //$object->image = $request->image;

        $user->save();
        return redirect()->route('profile.user');          
    }

}

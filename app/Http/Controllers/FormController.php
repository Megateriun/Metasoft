<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class FormController extends Controller
{
    
    public function form()
    {
        return view('form');
    }

    public function store(Request $request) //este metodo resive lo que se envie del formulario
    {
        $user = new User();

        $user->role = 2;
        $user->document = $request->document;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;

        //return $user;
        if ($request->password == $request->password_check) {
            $user->save();
            return redirect()->route('profile.user',$user->id);// se manda a la pagina del perfil y se manda el usuario
        }else{
            return redirect()->route('form');
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
Use App\Models\Objects_user;

class UserController extends Controller
{

    public function profile($id)
    {
        $objects = Objects_user::paginate(); // esto consulta y manda todos los registros de la base de datos
        //return $objects;
        $users = User::all(); // todos los usuarios
        $user = User::find($id); // solo el usuario que ingreso
        return view('profile', compact(['objects','users','user']));
    }
}

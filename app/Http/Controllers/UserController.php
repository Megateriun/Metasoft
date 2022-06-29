<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
Use App\Models\Objects_user;

class UserController extends Controller
{
    public function profile()
    {
        return view('profile');
    }

    public function object()
    {
        $objects = Objects_user::where("owner","=",auth()->user()->id)->select('owner','state','action','name_object','description','image')->get(); // esto consulta y manda todos los registros de la base de datos
        return view('objects_user', compact('objects'));
    }

    public function acquired()
    {
        $objects = Transaction::where("client","=",auth()->user()->id)->select('owner','state','object_users')->get(); // esto consulta y manda todos los registros de la base de datos
        return view('objects_user', compact('objects'));
    }

}

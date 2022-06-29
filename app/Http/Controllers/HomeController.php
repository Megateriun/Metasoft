<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
Use App\Models\Objects_user;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function home()
    {
        $objects = Objects_user::where("state","=",1)->select('owner','state','action','name_object','description','image')->get(); // esto consulta y manda todos los registros de la base de datos
        return view('home', compact('objects'));
    }

    public function index()
    {
        return view('index');
    }

}

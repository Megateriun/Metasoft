<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
Use App\Models\Objects_user;
Use App\Models\Transaction;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function home()
    {
        //$objects = Objects_user::where("state","=",1)->select('owner','owner','state','action','name_object','description','image')->get(); // esto consulta y manda todos los registros de la base de datos
        
        $objects = Objects_user::where("state","=",1)->get();
        return view('home', compact('objects'));
    }

    public function index()
    {
        return view('index');
    }

    public function button_accept(Objects_user $object)
    {

        
        $transaction = new Transaction();
        $transaction->owner = $object->owner;
        $transaction->client = auth()->user()->id;
        $transaction->state = 2;
        $transaction->object_users = $object->id;
        $transaction->save();

        $object->state = 2;
        $object->save();

        return redirect()->route('acquired.user');
       
    }

    public function button_reserve(Objects_user $object)
    {
        return $object;
    }



}

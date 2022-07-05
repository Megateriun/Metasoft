<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
Use App\Models\Objects_user;
Use App\Models\Transaction;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
/* 
    public function __construct() // si alguien quiere entrar por la ruta de home, esta funcion lo redirecciona a login
    {
        $this->middleware('auth');
    }
*/
    public function home()
    {
        //$objects = Objects_user::where("state","=",1)->select('owner','owner','state','action','name_object','description','image')->get(); // esto consulta y manda todos los registros de la base de datos
        
        $objects = Objects_user::where("state","=",1)->where("owner","!=",auth()->user()->id)->get();
        return view('home', compact('objects'));
    }

    public function home_admin()
    {
        $users = User::all();
        $datos = [];
        $create_user =[];
        $user_object = 0;
        $users_time = 0;
        foreach ($users as $user) {
            $user_object = Objects_user::where("owner","=",$user['id'])->count();
            $datos[] = ['name'=>$user['name'], 'y'=>$user_object];

            $users_time = User::where("created_at","=",$user['created_at'])->count();
            $create_user[] = ['name'=>$user['created_at'], 'y'=>$users_time];
        }

        $transactions = Transaction::all();
        $transaction_data = [];
        $transactions_time = 0;
        foreach ($transactions as $transaction) {
            $transactions_time = Transaction::where("created_at","=",$transaction['created_at'])->count();
            $transaction_data[] = ['name'=>$transaction['created_at'], 'y'=>$transactions_time];
        }

        //return $create_user;
        return view('admin.home')
        ->with(["data" => json_encode($datos)])
        ->with(["users" => json_encode($create_user)])
        ->with(["transac" => json_encode($transaction_data)]);
   
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
Use App\Models\Objects_user;

class UserController extends Controller
{

    public function index()
    {
        $objects = Objects_user::all();
        return $objects;
        //return view('profile.user',compact($objects));
    }

    public function profile()
    {
        return view('profile');
    }
}

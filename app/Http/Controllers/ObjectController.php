<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Objects_user;
use App\Models\Action;

class ObjectController extends Controller
{

    public function save_objects(Request $request)
    {

        $object = new Objects_user();

        $object->owner = auth()->user()->id;
        $object->action = $request->action;
        $object->name_object = $request->name_object;
        $object->description = $request->description;
        $object->image = $request->image;

        $object->save();

        return redirect()->route('object.user');
    }

    public function create_objects()
    {
        $actions = Action::all(); // esto consulta y manda todos los registros de la base de datos
        return view('object_create',compact('actions'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Objects_user;
use App\Models\Action;

class ObjectController extends Controller
{

    public function save_objects(Request $request)
    {

        $request->validate([ //validacion, si falla ejecuta el error en el html
            'name_object' => 'required|string',
            'action' => 'required|string',
            'description' => 'required|string'
        ]);

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

    public function edit_objects(Request $request, Objects_user $object){
        $actions = Action::all();

        return view('object_edit',compact('object'),compact('actions'));

    }
    public function delete_objects(Objects_user $object){
        $object->delete();
        return redirect()->route('object.user');
    }

    public function update_objects(Request $request, Objects_user $object){

        $request->validate([ //validacion, si falla ejecuta el error en el html
            'name_object' => 'required|string',
            'action' => 'required|string',
            'description' => 'required|string'
        ]);
        
        $object->owner = auth()->user()->id;
        $object->action = $request->action;
        $object->name_object = $request->name_object;
        $object->description = $request->description;
        $object->image = $request->image;

        $object->save();
        return redirect()->route('object.user');
    }

}

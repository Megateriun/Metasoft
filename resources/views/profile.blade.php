@extends('layouts.home')

@section('title', 'Perfil')
@section('name_user','En proceso')
@section('content')

<h1>Aqui se muestan todos los datos del usuario</h1>
<ul>

    

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Dueño</th>
                <th scope="col">Estado</th>
                <th scope="col">Acticcion</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
            </tr>
        </thead>
        @foreach ($objects as $object)
        <tbody>
            <tr>
                <td scope="row" class="table-checkbox"><input type="checkbox" name="" id=""></td>
                <td>{{$object->owner}}</td>
                <td>{{$object->state}}</td>
                <td>{{$object->action}}</td>
                <td>{{$object->name_object}}</td>
                <td>{{$object->description}}</td>
            </tr>

        </tbody>
        @endforeach
    </table>

    

</ul>

{{$objects->links()}}

@endsection
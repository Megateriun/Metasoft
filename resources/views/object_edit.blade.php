@extends('layouts.home_layout')

@section('title', 'Editar Objeto')

@section('css')
<link href="{{ asset('css/object_create.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('name_user')
{{auth()->user()->name}}
@endsection


@section('content')

<div class="contenedor">
    <form class="formulario" action="{{route('edit.button',$object)}}" method="POST">   <!-- al colocar POST en el metodo apunta a la url de /form que tenga el metodo post -->

       @csrf <!-- esto es un toque(lo hace laravel para que terceros no ingresen a los formularios) que solucita laravel para enviar el formulario por el metodo post  -->
       @method('put')
    <h1>Editar Objeto</h1>


        <div class="input-contenedor">
        <input class="input-text" type="text" value="{{$object->name_object}}" placeholder="Nombre del objeto" name="name_object">   
        </div>

        @error('name_object')<p> {{$message}} </p>@enderror

        <div class="input-contenedor">  
            <select  class="input-select"  name="action">
                <option disabled value="{{$object->action}}" selected>{{$object->innerjoin_action->action}}</option>
                @foreach ($actions as $action)
                <option value="{{$action->id}}">{{$action->action}}</option>
                @endforeach
            </select>  
        </div>

        @error('action')<p> {{$message}} </p>@enderror

        <div class="input-contenedor">      
        <input class="input-text" type="text" value="{{$object->description}}" placeholder="Descricción" name="description">        
        </div>

        @error('description')<p> {{$message}} </p>@enderror

        <div class="input-contenedor">      
        <input class="input-text" value="null" type="text" value="{{$object->image}}" placeholder="Imagen" name="image">        
        </div>

        <button class="button" type="submit" >Editar</button>

    </form>
</div>

@endsection

@section('script')
@endsection
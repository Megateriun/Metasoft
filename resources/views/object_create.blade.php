@extends('layouts.home')

@section('title', 'Crear Objeto')

@section('css')
@endsection

@section('name_user')
{{auth()->user()->name}}
@endsection


@section('content')

<div class="contenedor">

    <form class="formulario" action="{{route('object.save')}}" method="POST">   <!-- al colocar POST en el metodo apunta a la url de /form que tenga el metodo post -->

       @csrf <!-- esto es un toque(lo hace laravel para que terceros no ingresen a los formularios) que solucita laravel para enviar el formulario por el metodo post  -->

    <h1>Crear Objeto</h1>

        <div class="input-contenedor">
        <input class="input-text" type="text" placeholder="Nombre del objeto" name="name_object">   
        </div>

        <div class="input-contenedor">  
            <select name="action">
                @foreach ($actions as $action)
                <option value="{{$action->id}}">{{$action->action}}</option>
                @endforeach
            </select>  
        </div>

        <div class="input-contenedor">      
        <input class="input-text" type="text" placeholder="Descricción" name="description">        
        </div>

        <div class="input-contenedor">      
        <input class="input-text" type="text" placeholder="Imagen" name="image">        
        </div>


        <button class="button" type="submit" >Crear</button>

    </form>
</div>

@endsection

@section('script')
@endsection
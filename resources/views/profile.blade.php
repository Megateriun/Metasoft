@extends('layouts.home_layout')

@section('title', 'Perfil')

@section('css')
<link href="{{ asset('css/profile.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('name_user')
{{auth()->user()->name}}
@endsection


@section('content')


<form class="formulario" action="{{route('edit.profile')}}" method="POST" >
       
    @csrf <!-- esto es un toque(lo hace laravel para que terceros no ingresen a los formularios) que solucita laravel para enviar el formulario por el metodo post  -->
    @method('put')

    <div class="parent">
    <!--   <div class="div1"> <p>{{auth()->user()->image}}</p> </div>--> 
        <div class="div1"> 
            <div class="input-contenedor">
                <p>Foto</p>
                <img style="width: 200px" src="{{ asset('img/defaull/Programador.svg') }}" alt=""> 
            </div>
        </div>
        <div class="div2"> 
            <div class="input-contenedor">
                <p>Nombre:</p>
                <input id="nombre" disabled class="input-text" value="{{auth()->user()->name}}" type="text" placeholder="Nombre" name="name"> 
            </div>
            @error('name')<p> {{$message}} </p>@enderror
        </div>
        <div class="div3"> 
            <div class="input-contenedor">
                <p>Documento:</p>
                <input  id="documento" disabled class="input-text" disabled value="{{auth()->user()->document}}" type="text" placeholder="Documento" name="document"> 
            </div>
            @error('document')<p> {{$message}} </p>@enderror
        </div>
        <div class="div4"> 
            <div class="input-contenedor">
                <p>Correo:</p>
                <input  id="correo" disabled class="input-text" disabled value="{{auth()->user()->email}}" type="text" placeholder="Correo" name="email">
            </div>
            @error('email')<p> {{$message}} </p>@enderror
        </div>
        <div class="div5"> 
            <p>Contraseña</p>

            <button class="button" type="submit" >Cambiar</button>
        </div>
    </div>

    <button id="save" style="display:none" class="button" type="submit">Guardar cambios</button>

</form>
<button id="edit" onclick="activar_input()" class="button" type="submit">Editar perfil</button>

<script>
    function activar_input(){
        document.getElementById('nombre').disabled = false;
        document.getElementById('documento').disabled = false;
        document.getElementById('correo').disabled = false;

        document.getElementById('save').style.display = "inline";
        document.getElementById('edit').style.display = "none";
    }
</script>

@endsection

@section('script')
@endsection
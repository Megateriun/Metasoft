<!DOCTYPE html>
<html lang="es" dir="ltr" ng-app="Metasoft">
<head>
	<meta charset="UTF-8">
	<title>Login</title> 
    <link rel="shortcut icon" href="{{ asset('img/icono.png') }}" type="image/x-icon">
	<link href="{{ asset('css/form.css') }}" rel="stylesheet" type="text/css">
</head>  
<body>
    <h1 style="background-color: #62008f; margin: 0px; padding: 20px; color: #FFF"><a style="color: #FFF" class="link" href="{{route('index')}}">Metasoft</a></h1>
<div class="contenedor">   

    

    <form class="formulario" action="{{route('login.store')}}" method="POST">
        <h1>Login</h1>        
        @csrf <!-- Para no tener errores, dejar este token en el form -->

         <div class="input-contenedor">
         <input placeholder="Correo" class="input-text" type="text" name="correo" value="{{old('correo')}}">
         </div>

         @error('correo')<p> {{$message}} </p>@enderror
         
         <div class="input-contenedor">
         <input placeholder="Contraseña" class="input-text" type="password" name="contraseña" value="{{old('contraseña')}}">
         </div>

         @error('contraseña')<p> {{$message}} </p>@enderror

         @if (session('mensaje'))
         <div class="">
            <p style="color: red"> {{session('mensaje')}} </p>
         </div>
         @endif

         <button class="button"  type="submit">Login</button>
         <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
         <p>¿No tienes una cuenta? <br> <a class="link" href="{{route('form')}}">Registrate </a></p>
    </form>
</div>
</body>
</html>
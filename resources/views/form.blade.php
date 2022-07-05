<!DOCTYPE html>
<html lang="es" dir="ltr" ng-app="Metasoft">
<head>
	<meta charset="UTF-8">
	<title>Registro</title>
    <link rel="shortcut icon" href="{{ asset('img/icono.png') }}" type="image/x-icon">
    <link href="{{ asset('css/form.css') }}" rel="stylesheet" type="text/css">
    
<!--
    <script  src="../Clases/usuario.js"></script> 
    <script  src="../Logica/Registrar.js"></script>
-->    
</head>  
<body ng-controller="Registrar">
    <!--  -->
<h1 style="background-color: #62008f; margin: 0px; padding: 20px; color: #FFF"><a style="color: #FFF" class="link" href="{{route('index')}}"> Metasoft</a></h1>

<div class="contenedor">

     <form class="formulario" action="{{route('form.store')}}" method="POST">   <!-- al colocar POST en el metodo apunta a la url de /form que tenga el metodo post -->

        @csrf <!-- esto es un toque(lo hace laravel para que terceros no ingresen a los formularios) que solucita laravel para enviar el formulario por el metodo post  -->

     <h1>Registrate</h1>

         <div class="input-contenedor">
         <input class="input-text" type="text" placeholder="Nombre Completo" name="name" id="name" value="{{ old('name') }}">   
         </div>

         @error('name')<p> {{$message}} </p>@enderror

         <div class="input-contenedor">        
         <input class="input-text" type="text" placeholder="Correo personal" name="email" value="{{old('email')}}">       
         </div>

         @if (session('error_correo'))
         <div class="">
            <p style="color: red"> {{session('error_correo')}} </p>
         </div>
         @endif

         @error('email')<p> {{$message}} </p>@enderror

         <div class="input-contenedor">      
         <input class="input-text" type="text" placeholder="Documento" name="document" value="{{old('document')}}">        
         </div>

         @if (session('error_documento'))
         <div class="">
            <p style="color: red"> {{session('error_documento')}} </p>
         </div>
         @endif

         @error('document')<p> {{$message}} </p>@enderror

         <div class="input-contenedor">      
         <input class="input-text" type="password" placeholder="Contraseña" name="password">        
         </div>

         @error('password')<p> {{$message}} </p>@enderror

         <div class="input-contenedor">      
         <input class="input-text" type="password" placeholder="Verificar Contraseña" name="password_check">        
         </div>

         @error('password_check')<p> {{$message}} </p>@enderror

         @if (session('error'))
         <div class="">
            <p style="color: red"> {{session('error')}} </p>
         </div>
         @endif
                 
         <button class="button" type="submit" >Registrate</button>

         <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
         <p>¿Ya tienes una cuenta? <br> <a class="link" href="{{route('login')}}"> Iniciar Sesion</a></p> 

     </form>
 </div>
   
</body>
</html>
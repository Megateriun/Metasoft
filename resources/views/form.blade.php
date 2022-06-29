<!DOCTYPE html>
<html lang="es" dir="ltr" ng-app="Metasoft">
<head>
	<meta charset="UTF-8">
	<title>Registro</title>
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
         <input class="input-text" type="text" placeholder="Nombre Completo" name="name">   
         </div>

         <div class="input-contenedor">        
         <input class="input-text" type="text" placeholder="Correo personal" name="email">       
         </div>

         <div class="input-contenedor">      
         <input class="input-text" type="text" placeholder="Documento" name="document">        
         </div>

 <!--
         <div class="input-contenedor"  ng-init="Ver_sedes()">  
         <select name="sede" ng-options = "sede.coddep as sede.desdep for sede in sedes" ></select>
       
         </div>
-->
         <div class="input-contenedor">      
         <input class="input-text" type="password" placeholder="Contraseña" name="password">        
         </div>

         <div class="input-contenedor">      
         <input class="input-text" type="password" placeholder="Verificar Contraseña" name="password_check">        
         </div>
                 
         <button class="button" type="submit" >Registrate</button>

         <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
         <p>¿Ya tienes una cuenta? <br> <a class="link" href="{{route('login')}}"> Iniciar Sesion</a></p> 

     </form>
 </div>
   
</body>
</html>
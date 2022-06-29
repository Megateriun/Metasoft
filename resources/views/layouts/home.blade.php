<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('img/icono.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

<!-- CSS only -->
@yield('css')
<!--   
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
-->    
</head>

<body>
    <!--BANER-->
    <h1 style="text-align: center; background-color: #A01BC4; margin: 0px; padding: 20px; color: #FFF">Metasoft</h1>
<div id="container">
    <div id="sidemenu" class="menu-collapsed">
        <!--HEADER-->
        <div id="header">
            <div id="title"><span>Menú</span></div>
            <div id="menu-btn">
                <div class="img-menu" id="photo"><img src="{{ asset('img/menu.svg') }}" alt=""></div>
            </div>
        </div>

        <!--PROFILE-->
        <div id="profile">
            <div id="photo"><img src="{{ asset('img/Programador.svg') }}" alt=""></div>
            <div id="name"><span>@yield('name_user')</span></div>
        </div>

        <!--ITEMS-->

        
    <div id="menu-items">

            <div class="item">
                <a href="{{route('home.user')}}">
                    <div class="icon"><img src="{{ asset('img/Home.svg') }}" alt=""></div>
                    <div class="title"><span>Inicio</span></div>
                </a>
            </div>

        <div class="item separator"></div>
        
            <div class="item">
                <a href="{{route('profile.user')}}">
                    <div class="icon"><img src="{{ asset('img/Programador.svg') }}" alt=""></div>
                    <div class="title"><span> Mi perfil</span></div>
                </a>
            </div>

            <div class="item separator"></div>

            <div class="item">
                <a href="{{route('object.user')}}">
                    <div class="icon"><img src="{{ asset('img/Object_acquired.svg') }}" alt=""></div>
                    <div class="title"><span>Mis Objetos</span></div>
                </a>
            </div>

            <div class="item separator"></div>

            <div class="item">
                <a href="{{route('acquired.user')}}">
                    <div class="icon"><img src="{{ asset('img/User_object.svg') }}" alt=""></div>
                    <div class="title"><span>Objetos Adquiridos</span></div>
                </a>
            </div>

            <div class="item separator"></div>

            <div class="item">
                <a href="{{route('destroy.user')}}">
                    <div class="icon"><img src="{{ asset('img/Log_out.svg') }}" alt=""></div>
                    <div class="title"><span>Cerrar sesión</span></div>
                </a>
            </div>

        </div>
    </div>
    <div id="main-container" class="main-container-collapsed">
        

 <!--aqui se agrega el contenido-->
@yield('content')



    </div>
</div>


@yield('script')

    <script>

        const btn = document.querySelector('#menu-btn');
        const menu = document.querySelector('#sidemenu');
        const container = document.querySelector('#main-container');

        //esta funcion hace el cambio de css en la el div
        btn.addEventListener('click', e =>{
            //toggle agrega o quita la clase

            menu.classList.toggle("menu-expanded"); // agrega la expancion
            menu.classList.toggle("menu-collapsed"); // quita el colapzo       
        });

    </script>



<footer>
    <div class="contenedor-footer">
        <div class="content-foo">
            <h4>Phone</h4>
            <p>8296312</p>
        </div>
        <div class="content-foo">
            <h4>Email</h4>
            <p>8296312</p>
        </div>
        <div class="content-foo">
            <h4>Location</h4>
            <p>8296312</p>
        </div>
    </div>
    <h2 class="titulo-final">&copy; Metasoft | Sofware de intercambios y ventas</h2>
</footer>


</body>
</html>
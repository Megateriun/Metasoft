<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Metasoft</title>
    <link rel="shortcut icon" href="{{ asset('img/icono.png') }}" type="image/x-icon">
    <link href="{{ asset('css/index.css') }}" rel="stylesheet"> <!-- Esta es la manera de llamar los css en laravel, deben de estar en la carpeta public/css -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> <!-- se usa para el script (está al lado del footer) que baja lento hasta el footer -->
</head>
<!---->

<body>
    <header>
        <nav>
            <a href="{{route('login')}}">Inicio Sesión</a>
            <a href="{{route('form')}}">Registrarse</a>
            <a href="#footer">Contacto</a>
        </nav>
        <section class="textos-header">
            <h1>Metasoft</h1>
            <h2>Página web de cambio y venta de objetos</h2>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;">
            <!--esto ayuda hacer la forma undulada -->
            <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                    style="stroke: none; fill: #fff;">
                </path>
            </svg>
        </div>
    </header>
    <main>
        <section class="contenedor sobre-nosotros">
            <h2 class="titulo">Nuestro producto</h2>
            <div class="contenedor-sobre-nosotros">
                <img src="{{ asset('img/ilustracion2.svg') }}" alt="" class="imagen-about-us">
                <div class="contenido-textos">
                    <h3><span>1</span>Los mejores productos</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt veniam eius aspernatur ad
                        consequuntur aperiam minima sed dicta odit numquam sapiente quam eum, architecto animi pariatur,
                        velit doloribus laboriosam ut.</p>
                    <h3><span>2</span>Los mejores productos</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt veniam eius aspernatur ad
                        consequuntur aperiam minima sed dicta odit numquam sapiente quam eum, architecto animi pariatur,
                        velit doloribus laboriosam ut.</p>
                </div>
            </div>
        </section>

        <section class="about-services">
            <div class="contenedor">
                <h2 class="titulo">Nuestros servicios</h2>
                <div class="servicio-cont">
                    <div class="servicio-ind">
                        <img src="{{ asset('img/ilustracion1.svg') }}" alt="">
                        <h3>Publica los objetos que quieras</h3>
                        <p>Podras agregar productos que quieras prestar o vender</p>
                    </div>
                    <div class="servicio-ind">
                        <img src="{{ asset('img/ilustracion4.svg') }}" alt="">
                        <h3>Facil contacto</h3>
                        <p>La persona que esté interesado en tu producto te contactara o te hara un propuesta para llegar a un acuerdo</p>
                    </div>
                    <div class="servicio-ind">
                        <img src="{{ asset('img/ilustracion3.svg') }}" alt="">
                        <h3>Compras y ventas de manera sencilla</h3>
                        <p>Al final todo se reducie en un combenio con la otra persona</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

<script>
    $(document).ready(function() {
        $('a[href^="#"]').click(function() {
          var destino = $(this.hash); //this.hash lee el atributo href de este
          $('html, body').animate({ scrollTop: destino.offset().top }, 700); //Llega a su destino con el tiempo deseado
          return false;
        });
      });
</script>

    <footer id="footer">
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

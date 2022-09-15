<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo asset('css/base.css')?>" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


</head>
<body>
<nav class="navbar-nav navbar-expand-sm navbar-light bg-light navbar" id="topheader">
    <h1>Sistema administrativo @if (auth()->user()->tipo_usuario == 'admin' || auth()->user()->tipo_usuario == 'logistica' || auth()->user()->tipo_usuario == 'compras')
        [{{ auth()->user()->tipo_usuario }}]
        @endif</h1>

    <h5>Usuario: {{ auth()->user()->name }}</h5>
    <div class="mx-auto d-sm-flex d-block flex-sm-nowrap">
        <div class="container-fluid">
            <img src="{{ asset('img/logo.jpg')}}" class="logo" style="width: 125px; height: 125px; float:center; display:block;margin:0 auto 0 auto; border-radius:10%">
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-center" id="navbar">
            <ul class="navbar-nav">
                <div class="dropdown btn">
                <a class="dropbtn button btn" href="{{route('inicio')}}">INICIO</a>
                </div>
                @if (auth()->user()->tipo_usuario == 'admin' || auth()->user()->tipo_usuario == 'compras' || auth()->user()->tipo_usuario == 'logistica')
                <div class="dropdown btn">
                    <button class="dropbtn">ADMINISTRACIÓN</button>
                <div class="dropdown-content">
                    <a href="{{route('actMascota')}}">Mascotas</a>
                    <a href="{{route('actArticulo')}}">Artículos</a>
                    @if (auth()->user()->tipo_usuario == 'admin')
                    <a href="{{route('actUser')}}">Usuarios</a>
                    @else
                    <a href="{{route('actUser')}}" style="display: none">Usuarios</a>
                    @endif
                </div>
                </div>
                @else
                <div class="dropdown btn">
                    <button class="dropbtn" style="display: none">ADMINISTRACIÓN</button>
                <div class="dropdown-content">
                    @if (auth()->user()->tipo_usuario == 'user')
                    <a href="{{route('actMascota')}}" style="display: none">Mascotas</a>
                    <a href="{{route('actArticulo')}}" style="display: none">Artículos</a>
                    @else
                    <a href="{{route('actMascota')}}">Mascotas</a>
                    <a href="{{route('actArticulo')}}">Artículos</a>
                    @endif

                    @if (auth()->user()->tipo_usuario == 'admin')
                    <a href="{{route('actUser')}}">Usuarios</a>
                    @else
                    <a href="{{route('actUser')}}" style="display: none">Usuarios</a>
                    @endif
                </div>
                </div>
                @endif
                @if (auth()->user()->tipo_usuario == 'admin' || auth()->user()->tipo_usuario == 'compras' || auth()->user()->tipo_usuario == 'logistica')
                 <div class="dropdown btn">
                <button class="dropbtn">ESTADISTICAS</button>
                <div class="dropdown-content">
                    <a href="{{route('estMascotas')}}">Mascotas</a>
                    <a href="{{route('estArticulos')}}">Artículos</a>
                    @if (auth()->user()->tipo_usuario == 'admin')
                    <a href="{{route('estUsuarios')}}">Usuarios</a>
                    @else
                    <a href="{{route('estUsuarios')}}" style="display: none">Usuarios</a>
                    @endif
                </div>
                </div>
                @else
                 <div class="dropdown btn">
                <button class="dropbtn" style="display: none">ESTADISTICAS</button>
                <div class="dropdown-content">
                    @if (auth()->user()->tipo_usuario == 'user')
                    <a href="{{route('estMascotas')}}" style="display: none">Mascotas</a>
                    <a href="{{route('estArticulos')}}" style="display: none">Artículos</a>
                    @else
                    <a href="{{route('estMascotas')}}">Mascotas</a>
                    <a href="{{route('estArticulos')}}">Artículos</a>
                    @endif

                    @if (auth()->user()->tipo_usuario == 'admin')
                    <a href="{{route('estUsuarios')}}">Usuarios</a>
                    @else
                    <a href="{{route('estUsuarios')}}" style="display: none">Usuarios</a>
                    @endif
                </div>
                </div>
                @endif
                @if (auth()->user()->tipo_usuario == 'admin' || auth()->user()->tipo_usuario == 'user' || auth()->user()->tipo_usuario == 'logistica')
                <div class="dropdown btn">
                <a class="dropbtn button btn" href="{{route('SolicitarAdopcion')}}">ADOPCIÓN</a>
                </div>
                @else
                <div class="dropdown btn">
                <a class="dropbtn button btn" href="{{route('SolicitarAdopcion')}}" style="display: none">ADOPCIÓN</a>
                </div>
                @endif
                @if (auth()->user()->tipo_usuario == 'admin' || auth()->user()->tipo_usuario == 'user' || auth()->user()->tipo_usuario == 'compras' || auth()->user()->tipo_usuario == 'logistica')
                <div class="dropdown btn">
                <a class="dropbtn button btn" href="{{route('SolicitarArticulo')}}">COMPRAS</a>
                </div>
                @else
                <div class="dropdown btn">
                <a class="dropbtn button btn" href="{{route('SolicitarArticulo')}}" style="display: none">COMPRAS</a>
                </div>
                @endif

            </ul>
            <ul>
                <div class="dropdown btn">
                <a class="dropbtn button btn" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('SALIR') }}
                                    </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                </div>
            </ul>
    </div>
</nav>





@yield('contenido')





<footer class="text-center text-lg-start text-dark"style="background-color: #ECEFF1">
    <!-- Section: Social media -->
    <section
             class="d-flex justify-content-between p-4 text-white"
             style="background-color: green"
             >
      <!-- Left -->
      <div class="me-5">
        <span>Mantente conectado con nostros, siguenos en nuestras redes sociales:</span>
      </div>
      <!-- Left -->

      <!-- Right -->
      <div>
        <a class="text-white me-4" href="">
        <img src="{{ asset('img/facebook.png')}}" class="img-responsive" style="filter: invert(1.0)">
        </a>
        <a  class="text-white me-4" href="">
        <img src="{{ asset('img/twitter.png')}}" class="img-responsive" style="filter: invert(1.0)">
        </a>
        <a class="text-white me-4" href="">
        <img src="{{ asset('img/youtube.png')}}" class="img-responsive" style="filter: invert(1.0)">
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold">Mundo Peludo</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p>
              "Un refugio para mascotas"
            </p>
          </div>

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Contactanos</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p><i class="fas fa-home mr-3"></i> Calle de la montaña #825 Queretaro</p>
            <p><i class="fas fa-envelope mr-3"></i> mundo-peludo@gmail.com</p>
            <p><i class="fas fa-phone mr-3"></i> 555 555 5555</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div
         class="text-center p-3"
         style="background-color: rgba(0, 0, 0, 0.2)">© {{date('Y')}} Copyright:
      <a class="text-dark" >mundoPeludo</a>
    </div>
    <!-- Copyright -->
  </footer>



</body>
</html>

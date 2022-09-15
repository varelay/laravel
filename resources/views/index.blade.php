<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo asset('css/base.css')?>" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="<?php echo asset('css/inicio.css')?>" type="text/css">

</head>
<body>


<nav class="navbar-nav navbar-expand-sm navbar-light bg-light navbar" id="topheader">
    <h1>Mundo peludo</h1>
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
                    <a class="dropbtn button btn" href="{{route('login')}}">Ingresar</a>
                </div>
            </ul>
            <ul class="navbar-nav">
                <div class="dropdown btn">
                    <a class="dropbtn button btn" href="{{route('registro')}}">Registrarse</a>
                </div>
            </ul>
    </div>
</nav>


<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel" style="width: 100hv">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="{{ asset('img/carrusel1.jpg')}}" class="d-block imgCr" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="{{ asset('img/carrusel2.jpg')}}" class="d-block imgCr" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('img/carrusel3.jpg')}}" class="d-block imgCr" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<br>
<br>


<h1 id=inicioh1>Bienvenidos</h1>

<div id="cont">

<div id="texto1"><center> Se puden relizar adopciones</center></div>
<p class="box1"><img src="{{ asset('img/adp.jpg')}}">

<div id="texto2"><center>Tambien se pueden ralizar compra</center></div>
<p class="box2"><img src="{{ asset('img/mscar1.jpg')}}"/></p>

<div id="texto1"><center>Proyecto de la UPQ</center></div>
<p class="box1"><img  src="{{ asset('img/logo.svg')}}"/></p>
</div>


</body>
</html>

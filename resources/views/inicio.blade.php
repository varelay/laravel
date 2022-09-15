@extends('base')

@section('contenido')
@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif
<link rel="stylesheet" href="<?php echo asset('css/inicio.css')?>" type="text/css">

<title>Mundo Peludo|Inicio</title>

<section>
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
</section>
<br>
<br>

<section>
<h1 id=inicioh1>Bienvenidos</h1>

<div id="cont">

<div id="texto1"><center> Se puden relizar adopciones</center></div>
<p class="box1"><img src="{{ asset('img/adp.jpg')}}">

<div id="texto2"><center>Tambien se pueden ralizar compra</center></div>
<p class="box2"><img src="{{ asset('img/mscar1.jpg')}}"/></p>

<div id="texto1"><center>Proyecto de la UPQ</center></div>
<p class="box1"><img  src="{{ asset('img/logo.svg')}}"/></p>
</div>
</section>



@stop

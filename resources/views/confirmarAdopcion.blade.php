@extends('base')
@section('contenido')

<div class="container" style="padding-top: 100px; padding-bottom: 100px">
    <h5>Datos de quien adopta</h5>
    <label>Nombre:  </label><a style="font-weight: bold"> {{ auth()->user()->name }}</a><br>
    <label>Email: </label><a style="font-weight: bold"> {{ auth()->user()->email }}</a><br>
    <label>Fecha de adopcion: </label><a style="font-weight: bold"> {{ date('D-M-Y') }} </a><br><br>
    <h5>Datos de la mascota</h5>
@foreach ($mascotas as $mascota)
<img src="/img/mascotas/{{$mascota->imagen}}" alt="" width="200px" height="200px"><br>
<label>Mascota: </label><a style="font-weight: bold"> {{$mascota->especie}} </a><br>
<label>Raza: </label><a style="font-weight: bold"> {{$mascota->raza}} </a><br>
<label>Edad: </label><a style="font-weight: bold"> {{$mascota->edad}} </a><br>
<label>Sexo: </label><a style="font-weight: bold"> {{$mascota->sexo}} </a><br>
<br>
<p style="color: blue">*Pongase en contacto con nosotros para su recolección</p>

@endforeach
</div>


@stop

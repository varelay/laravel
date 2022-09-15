@extends('base')

@section('contenido')
    <!-- https://material.io/resources/icons/?style=baseline -->
<link href="https://fonts.googleapis.com/css2?family=Material+Icons"
      rel="stylesheet">
<!-- https://material.io/resources/icons/?style=outline -->
<link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined"
      rel="stylesheet">
<!-- https://material.io/resources/icons/?style=round -->
<link href="https://fonts.googleapis.com/css2?family=Material+Icons+Round"
      rel="stylesheet">
<!-- https://material.io/resources/icons/?style=sharp -->
<link href="https://fonts.googleapis.com/css2?family=Material+Icons+Sharp"
      rel="stylesheet">
<!-- https://material.io/resources/icons/?style=twotone -->
<link href="https://fonts.googleapis.com/css2?family=Material+Icons+Two+Tone"
      rel="stylesheet">

<link rel="stylesheet" href="<?php echo asset('css/Admin_user.css')?>" type="text/css">

<title>Mundo Peludo|Articulos</title>

@include('sweetalert::alert')

<div class="container">
<h3 style="text-align: center; padding-top:25px">Administración de articulos de venta</h3>
<form class="form-search content-search navbar-form" action="" style="align: center">
    <div style="padding-left: 25px">
        <a class="btn btn-outline-success button" href="{{route('NArticulos')}}">Nuevo artículo</a>
    </div>

</form>

<div class="container-fluid" style="padding: 25px">
    <table class="table table-success">
  <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Artículo</th>
        <th scope="col">Descripción</th>
        <th scope="col">Precio</th>
        <th scope="col">Cantidad</th>
         <th scope="col">Estatus</th>
        <th scope="col">imagen</th>
        <th scope="col">Editar</th>
        <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($articulos as $articulo)
        <tr>
            <td>00{{$articulo->id}}</td>
            <td>{{$articulo->articulo}}</td>
            <td>{{$articulo->descripcion}}</td>
            <td>${{$articulo->precio}}.00</td>
            <td>{{$articulo->cantidad}} piezas</td>
            <td>{{$articulo->estatus}} </td>
            <td>
                <img src="/img/articulos/{{$articulo->imagen}}" alt="" width="100px" height="100px">
            </td>
            <td><a type="button" class="material-icons-outlined" href="{{route('articulosUpdate',$articulo->id)}}">edit</a></td>
             <td>
                <form action="{{route('articulosDelete',$articulo->id)}}" method="POST" class="eliminarArticulo">
                @csrf
                @method('DELETE')
                <button class="material-icons-outlined" type="submit">delete</button>
            </form>

            </td>
        </tr>
       @endforeach
  </tbody>
</table>
</div>
</div>




@stop

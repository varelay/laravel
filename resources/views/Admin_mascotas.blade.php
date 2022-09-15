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
<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">

<title>Mundo Peludo|Mascotas</title>

@include('sweetalert::alert')

<div class="container">
<h3 style="text-align: center; padding-top:25px">Administración de mascotas</h3>
<form class="form-search content-search navbar-form" action="" style="align: center">
    <div style="padding-left: 25px">
        <a class="btn btn-outline-success button" href="{{route('NMascotas')}}">Nueva mascota</a>
    </div>

</form>

<div class="container-fluid" style="padding: 25px">
    <table class="table table-success">
  <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Especie</th>
        <th scope="col">Raza</th>
        <th scope="col">Edad</th>
        <th scope="col">Condicion de salud</th>
        <th scope="col">Vacunado</th>
        <th scope="col">Sexo</th>
        <th scope="col">Foto</th>
        <th scope="col">Estatus</th>
        <th scope="col">Editar</th>
        <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($mascotas as $mascota)
        <tr>
            <td>00{{$mascota->id}}</td>
            <td>{{$mascota->especie}}</td>
            <td>{{$mascota->raza}}</td>
            <td>{{$mascota->edad}} meses</td>
            <td>{{$mascota->condicion_salud}}</td>
            <td>{{$mascota->vacunado}}</td>
            <td>{{$mascota->sexo}}</td>
            <td><img src="/img/mascotas/{{$mascota->imagen}}" alt="" width="100px" height="100px"></td>
            <td>{{$mascota->status}}</td>
            <td><a type="button" class="material-icons-outlined" href="{{route('mascotasUpdate',$mascota->id)}}">edit</a></td>
            <td>
                <form action="{{route('mascotasDelete',$mascota->id)}}" method="POST" class="eliminarMascota">
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
<script>

</script>
@stop

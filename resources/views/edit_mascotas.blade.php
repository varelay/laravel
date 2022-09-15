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


<div class="container">
<h3 style="text-align: center; padding-top:25px">Edición de Articulos</h3>

        @foreach ($mascotas as $mascota)

       @endforeach

<!-- Modal -->
<div class="container">
    <h5 style="color: blue">id de la mascota: 00{{$mascotas->id}} </h5>
    <img src="/img/mascotas/{{$mascotas->imagen}}" alt="" width="200px" height="200px">

    <form class="contenedorform2 mt-4" action="{{route('mascotaUpdated',$mascotas->id)}}" method="POST" enctype="multipart/form-data">

        <div class="form-group" style="padding: auto">

            @csrf

           <label class="form-group p-2"><b>Especie:</label>

           <input type="" class="" id="txtEspecie" name="especie" value="{{ $mascotas->especie }}" style="WIDTH: auto;">
            <br>
        </div>

        <div class="form-group p-2" style="padding: auto">
           <label>Raza:</label>
           <input type="" class="" id="txtRaza" name="raza" value="{{ $mascotas->raza }}" style="WIDTH: auto;align:self">
            <br>
        </div>
        <div class="form-group p-2" style="padding: auto">
           <label>Edad:</label>
           <input type="" class="" id="txtEdad" name="edad" value="{{ $mascotas->edad }}"  style="WIDTH: auto;">
            <br>
        </div>
        <div class="form-group p-2" style="padding: auto">
           <label>condicion de salud:</label>
           <input type="" class="" id="txtCondicionSalud" name="condicion_salud" value="{{$mascotas->condicion_salud}}"  style="WIDTH: auto;">
        </div>
        <div class="form-group p-2" style="padding: auto">
           <label>Sexo:</label>
           <input type="" class="" id="txtSexo" name="sexo" value="{{$mascotas->sexo}}"  style="WIDTH: auto;">
        </div>
        <div class="form-group p-2" style="padding: auto">
           <label>Estatus:</label>
           <input type="" class="" id="txtStatus" name="status" value="{{$mascotas->status}}"  style="WIDTH: auto;">
        </div>
        <div class="form-group p-2" style="padding: auto">
           <label>Vacunado:</label>
           <input type="" class="" id="txtStatus" name="vacunado" value="{{$mascotas->vacunado}}"  style="WIDTH: auto;">
        </div>

        <div class="form-group" style="padding: 10px">
              <label>imagen:</label>
               <div class="form-group">
                    <img id="imagenSeleccionada" style="max-height: 100px">
               </div>
                <input type="file" name="imagen" id="imagen" class="btn-primary" value="{{$mascotas->imagen}}">
        </div>
        <div class="modal-footer">
        <a type="button" class="btn btn-secondary" href="{{route('actMascota')}}">Cancelar</a>
        <button class="btnAgregar btn btn-primary" type="submit">Actualizar registro</button>
      </div>
          </form>
      </div>

</div>

<script>
        $(document).ready(function(e){
            $("#imagen").change(function(e){
                var file = e.target.files[0];
                var reader = new FileReader();
                reader.onload = function(e){
                    $("#imagenSeleccionada").attr("src", e.target.result);
                }
                reader.readAsDataURL(file);
            });
        });
    </script>


@stop

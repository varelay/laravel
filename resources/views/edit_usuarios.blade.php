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
<h3 style="text-align: center; padding-top:25px">Edición de Usuarios</h3>

        @foreach ($usuarios as $usuario)

       @endforeach

<!-- Modal -->
<div class="container">
    <h5 style="color: blue">Actualizar Tipo de usuario en id: 00{{$usuarios->id}} </h5>

    <form class="contenedorform2 mt-4" action="{{route('usuarioUpdated',$usuarios->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <h3>Nombre: {{ $usuarios->name }}</h3>
        <div style="display: none">
            <div class="form-group" style="padding: auto">

           <label class="form-group p-2"><b>Nombre:</label>

           <input type="" class="" id="txtNombre" name="name" value="{{ $usuarios->name }}" style="WIDTH: auto;">
            <br>
        </div>
        <div class="form-group p-2" style="padding: auto">
           <label>email:</label>
           <input type="" class="" id="txtemail" name="email" value="{{$usuarios->email}}"  style="WIDTH: auto;">
        </div>

        <div class="form-group p-2" style="padding: auto">
           <label>sexo:</label>
           <input type="" class="" id="txtSexo" name="sexo" value="{{$usuarios->sexo}}"  style="WIDTH: auto;">
        </div>

        <div class="form-group p-2" style="padding: auto">
           <label>Contraseña:</label>
           <input type="" class="" id="txtContraseña" name="password" value="{{$usuarios->password}}"  style="WIDTH: auto;">
        </div>
        </div>

        <div class="form-group p-2" style="padding: auto">
           <label>Tipo de usuario:</label>
           <select type="" class="" id="txtTipoUs" name="tipo_usuario"  style="WIDTH: auto;">
            <option value="{{$usuarios->tipo_usuario}}">{{$usuarios->tipo_usuario}}</option>
            <option value="admin">admin</option>
            <option value="compras">compras</option>
            <option value="logistica">logistica</option>
            <option value="user">user</option>
           </select>
        </div>


        <div class="modal-footer">
        <a type="button" class="btn btn-secondary" href="{{route('actUser')}}">Cancelar</a>
        <button class="btnAgregar btn btn-primary" type="submit">Actualizar registro</button>
      </div>
          </form>
      </div>

</div>



@stop

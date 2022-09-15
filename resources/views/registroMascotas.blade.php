
@extends('base')

@section('contenido')

 <link rel="stylesheet" href="css/mascotas.css">

    <title>Registro de Mascotas</title>
  </head>
  <body>
    <div class="container-fluid" style="padding: 50px">

        <h1 class="display-4 text-center" style = "font-family:Calisto MT;"><FONT COLOR="Black">Agregar mascota</FONT></h1>

    <div id="general" style="padding: 25px">
       <br>
      <H3 align="center"  style = "font-family:Calisto MT;"><FONT COLOR="black">Formulario de mascotas</FONT></H3>
      <center>
      <img src="img/logo1.png" width="60" height="60" /></center>


      <form class="contenedorform2 mt-4" action="{{route('nuevaMascota.registro_mascota')}}" method="POST" enctype="multipart/form-data">
        @if (session()->has('mensaje'))
            <h5 style="color: blue">{{ session('mensaje') }}</h5>
        @endif

        <div class="form-group" style="padding: 5px">

             @csrf

              <left>
           <label><FONT COLOR="white">Especie: </FONT>  </label>
           <input type="" class="" id="txtEspecie" name="especie" value="{{ old('especie') }}" placeholder="Ingrese la especie del animal" style="WIDTH: auto;">
           <label style="color: red">{{ $errors -> first('especie') }}</label>
              </left>
              </ñ>
        </div>

        <div class="form-group" style="padding: 5px">
              <left>
           <label><FONT COLOR="white">Raza: </FONT>  </label>
           <input id="txtRaza" name="raza" name="raza" value="{{ old('raza') }}" placeholder="Ingrese la raza del animal" style="WIDTH: auto;">
              <label style="color: red">{{ $errors -> first('raza') }}</label>
              </left>
        </div>

        <div class="form-group" style="padding: 5px">
              <left>
           <label><FONT COLOR="white">Edad: </FONT>  </label>
           <input id="txtEdad" name="edad" value="{{ old('edad') }}"  placeholder="Ingrese la edad del animal" style="WIDTH: auto;">
                <label style="color: red">{{ $errors -> first('edad') }}</label>
              </left>
        </div>

        <div class="form-group" style="padding: 10px">
              <left>
           <label><FONT COLOR="white">Condición de salud: </FONT>  </label>
           <input id="txtCondicion" name="condicion_salud" value="{{ old('condicion_salud') }}"  placeholder="Ingrese si existe alguna condición del animal" style="WIDTH: auto;">
                <label style="color: red">{{ $errors -> first('condicion_salud') }}</label>
              </left>
        </div>

        <div class="form-group" style="padding: 10px">
              <left>
           <label><FONT COLOR="white">Vacunado: </FONT>  </label>
           <input type="" class="" id="txtVacunado" name="vacunado" value="{{ old('vacunado') }}"  placeholder="Indique si ha recibido las vacunas" style="WIDTH: auto;">
                <label style="color: red">{{ $errors -> first('vacunado') }}</label>
              </left>
        </div>

        <div class="form-group" style="padding: 10px">
              <left>
           <label><FONT COLOR="white">Sexo: </FONT>  </label>
           <input type="" class="" id="txtSexo" name="sexo"  value="{{ old('sexo') }}" value="disponible" placeholder="Indique si es hembra o macho" style="WIDTH: auto;">
                <label style="color: red">{{ $errors -> first('sexo') }}</label>
              </left>
        </div>
        <div class="form-group" style="padding: 10px">
              <left>
           <label><FONT COLOR="white">Estatus: </FONT>  </label>
           <input type="" class="" id="txtEstatus" name="status"  value="{{ old('status') }}"  placeholder="Indique si esta disponible" style="WIDTH: auto;">
                <label style="color: red">{{ $errors -> first('status') }}</label>
              </left>
        </div>
        <div class="form-group" style="padding: 10px">
            <left>
              <label><FONT COLOR="white">imagen: </FONT>  </label>
               <div class="form-group">
                    <img id="imagenSeleccionada" style="max-height: 100px">
               </div>
                <input type="file" name="imagen" id="imagen" class="btn-primary">
            </left>
        </div>

            <center><button class="btnAgregar" type="submit">Agregar registro</button></center>
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


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
@stop

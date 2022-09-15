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
    <title>Mundo Peludo|Registro</title>


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
<br><br>
<div class="container">

<form class="container" style="padding-right: 25%;padding-left:25%" action="{{route('user.registro')}}" method="POST">
    @csrf
    <div class="mb-3">
    <label for="name" class="form-label" >Nombre</label>
    <input name="name" value="{{ old('name') }}" type="text" class="form-control" id="name" aria-describedby="emailHelp">
    <label style="color: red">{{ $errors -> first('name') }}</label>
</div>
  <div class="mb-3">
    <label for="email" class="form-label">Correo electronico</label>
    <input type="email" name="email" value="{{ old('email') }}" class="form-control" id="email">
    <label style="color: red">{{ $errors -> first('email') }}</label>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Contraseña</label>
    <input type="password" name="password" value="{{ old('password') }}" class="form-control" id="exampleInputPassword1">
    <label style="color: red">{{ $errors -> first('password') }}</label>
</div>
  <button type="submit" class="btn btn-primary">Registrarse</button>
</form>

</div>


</body>
</html>

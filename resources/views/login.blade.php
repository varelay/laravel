
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
<meta charset="UTF-8">
<title>Login</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="<?php echo asset('css/login.css')?>" type="text/css">
</head>
<body>

<div class="container">

</div>

<div class="container">
@include('sweetalert::alert')

  <form  class="contenedorform">
      <h1 class="display-5  text-center" style="color:#BD9B37"; >Inicio de sesión</h1>

        <div class="form-group" style="padding: 15px">

            <label style="color:#DEC57B">Correo:</label>
           <input type="text" name="email" class="form-control">

        </div>
          <div class="form-group" style="padding: 15px">

            <label style="color:#DEC57B">Contraseña:</label>
            <input type="password" name="password" class="form-control">

          </div>
          <div style="padding: 5px">
          </div>

<div>
    <button type="submit" name="btnadm" class="btn btn-lg btn-block" style="background-color:#C7BE9E" >Entrar</button>
</div>


</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>

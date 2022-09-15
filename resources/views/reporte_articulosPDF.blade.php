<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ReporteArticulos</title>

    <style>
        table {
            font-family: Arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>

<body>
<h2 style="text-align: center">Reporte de Artículos</h2>
<br><br>
<h4>Artículos en existencia</h4>
<table>
    <thead>
            <th scope="col">ID</th>
            <th scope="col">Artículo</th>
            <th scope="col">Descripción</th>
            <th scope="col">Precio</th>
            <th scope="col">estatus</th>
            <th scope="col">Cantidad</th>
    </thead>
    <br><br><br>
    <tbody>
        <tr>
            @foreach ($articulos as $articulo)
                <tr>
                    <td>00{{$articulo->id}}</td>
                    <td>{{$articulo->articulo}}</td>
                    <td>{{$articulo->descripcion}}</td>
                    <td>${{$articulo->precio}}.00</td>
                    <td>{{$articulo->estatus}}</td>
                    <td>{{$articulo->cantidad}} piezas</td>
                </tr>
            @endforeach
        </tr>
    </tbody>
</table>
<br>

<h5>generado el {{ date('Y-m-d H:i:s') }} por {{ auth()->user()->name }}</h5>
</body>
</html>

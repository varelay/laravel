<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ReporteMascotas</title>

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
<h2 style="text-align: center">Reporte de Mascotas</h2>
<br><br>
<h4>Mascotas disponibles</h4>
<table>
    <thead>
        <th>Id</th>
        <th>Especie</th>
        <th>Raza</th>
        <th>Edad</th>
        <th>Condición de salud</th>
        <th>Vacunado</th>
        <th>Sexo</th>
        <th>Estatus</th>
    </thead>
    <br><br><br>
    <tbody>
        <tr>
        @foreach ($mascotas as $mascota)
        <tr>
            <td>00{{$mascota->id}}</td>
            <td>{{$mascota->especie}}</td>
            <td>{{$mascota->raza}}</td>
            <td>{{$mascota->edad}} meses</td>
            <td>{{$mascota->condicion_salud}}</td>
            <td>{{$mascota->vacunado}}</td>
            <td>{{$mascota->sexo}}</td>
            <td>{{$mascota->status}}</td>
        </tr>
        @endforeach
    </tr>

    </tbody>

</table>
<h5>generado el {{ date('Y-m-d H:i:s') }} por {{ auth()->user()->name }}</h5>
</body>
</html>


@extends('base')

@section('contenido')
<h3 style="text-align: center; padding-top:25px">Carrito de compras</h3>
<div class="container">
    <div class="container-fluid" style="padding: 25px">
    <table class="table table-success">
  <thead>
    <tr>
        <th scope="col">Artículo</th>
        <th scope="col">Descripción</th>
        <th scope="col">Precio</th>
        <th scope="col">Cantidad</th>
        <th scope="col">imagen</th>
        <th scope="col">Administrar</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($articulos as $articulo)
        <tr>
            <td>{{$articulo->articulo}}</td>
            <td>{{$articulo->descripcion}}</td>
            <td>${{$articulo->precio}}.00</td>
            <td> 1 pieza</td>
            <td>
                <img src="/img/articulos/{{$articulo->imagen}}" alt="" width="100px" height="100px">
            </td>
            <td><form action="{{route('disponible',$articulo->id)}}" method="POST">
                @csrf
                <button class="btn btn-warning" type="submit">eliminar del carrito</button>
            </form></td>
        </tr>
       @endforeach
  </tbody>
</table>
<a type="button" class="btn btn-primary" href="{{route('pagando')}}">Pagar</a>
</div>

</div>
@stop

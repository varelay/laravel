@extends('base')

@section('contenido')

<div class="container" style="padding: 35px">
    <h3 style="text-align: center">Solicitar Artículo</h3>

    <div class="container">
    <h4>Articulos Disponibles</h4>
    @foreach ($articulos->chunk(5) as $chunk)
        <div class="row">
            @foreach ($chunk as $articulo)
                <div class="card" style="width: 18rem;">
            <img src="/img/articulos/{{$articulo->imagen}}" alt="" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">Artículo: {{$articulo->articulo}}</h5>
                <p class="card-text">Descripción: {{$articulo->descripcion}}</p>
                <p class="card-text"> Precio: ${{$articulo->precio}}.00</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Cantidad: {{$articulo->cantidad}}</li>
            </ul>
            <div class="card-body">
                 <td>
                <form action="{{route('carrito',$articulo->id)}}" method="POST">
                    @csrf
                    @method('POST')
                    <button class="button btn-dark" type="submit">Agregar al carrito</button>
                </form>
            </td>
            </div>
        </div>
    @endforeach
    </div>

    @endforeach

</div>
<br><br><br>

    <div class="container">
        <a class="btn btn-primary" href="{{route('carritoCompras')}}">Carrito de compras</a>
    </div>
</div>


@stop

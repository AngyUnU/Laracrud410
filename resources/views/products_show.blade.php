@extends('layout.main_template')

@section('content')

<h1>Detalles del producto </h1>
<h3>Producto:{{$product->nameproduct}}</h3>
<h3>Cantidad:{{$product->stock}}</h3>
<h3>Precio:{{$product->unit_price}}</h3>
<h3>imagen:{{$product->imagen}}</h3>
<!-- TODO show image -->

@endsection
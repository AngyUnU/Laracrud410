@extends('layout.main_template')

@section('content')

<h1>Marcas</h1>
<h3>id:{{$brand->id}}</h3>
<h3>Marca:{{$brand->brand}}</h3>
<h3>Descripcion:{{$brand->description}}</h3>

<!-- TODO show image -->

@endsection
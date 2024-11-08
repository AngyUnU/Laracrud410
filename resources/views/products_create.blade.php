@extends('layout.main_template')
@section('content')
@include('fragments.formstyle')

<h1 id="titulo">Create productor</h1>
<form action="{{route('products.store')}}" method="POST">
    @csrf
    <br>
    <label for="" class="">Nombre del producto</label>
    <input type="text" name = 'nameProduct'>

    <label for="" class="">Marca</label>
    <select name="brand_id" id="">
        <option value="">Selecciona...</option>
        @foreach ( $brands as $brand => $id )
            <option  value="{{$id}}">{{$brand}} </option>
    @endforeach
    
    </select>
<br>
    <label for="">Cantidad</label>
    <input type="text" name="stock">

    <label for="">Precio Unitario</label>
    <input type="text" name = "unit_price">

    <label for="">Imagen</label>
    <input type="text" name="imagen">
    
    <button type="submit">Registrar</button>
</form>
@endsection
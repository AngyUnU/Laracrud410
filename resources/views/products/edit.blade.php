@extends('layout.main_template')
@section('content')
@include('fragments.formstyle')

<h1 id="titulo">Editar productos</h1>
<form action="{{route('products.update',$product->id)}}" method="POST" enctype="multipart/form-data">

    @csrf
    @method('PUT')
    <br>
    <label for="">Nombre del producto</label>
    <input type="text" name ='nameproduct' value="{{$product->nameproduct}}">
<br>
    <label for="">Marca</label>
    <select name="brand_id" id="">
        <option value="">Selecciona...</option>

        @foreach ( $brands as $brand => $id )
            <option  value="{{$id}}">{{$brand}} </option>
    @endforeach
    
    </select>
<br>
    <label for="">Cantidad</label>
    <input type="text" name="stock" value="{{$product->stock}}">
<br>
    <label for="">Precio Unitario</label>
    <input type="text" name ="unit_price" value="{{$product->unit_price}}">
<br>
    <label for="">Imagen</label>
    <input type="file" name="imagen" value="{{$product->imagen}}">
    <br>
    <button type="submit"> Actualizar</button>
</form>
@endsection
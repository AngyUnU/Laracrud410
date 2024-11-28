@extends('layout.main_template')
@section('content')
@include('fragments.formstyle')

<h1 id="titulo">Create productor</h1>

@if($errors->any())
@foreach ($errors->all() as $e )
    <div class="error">
        {{$e}}
    </div>
@endforeach
@endif

<form action="{{route('products.store')}}" enctype="multipart/form-data"  method="POST" >
    @csrf
    <br>
    <label for="" class="">Nombre del producto</label>
    <input type="text" name = 'nameproduct'>
<br>
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
<br>
    <label for="">Precio Unitario</label>
    <input type="text" name = "unit_price">
<br>
    <label for="">Imagen</label>
    <input type="file" name="imagen">
    <br>
    <button type="submit"> Registrar</button>
</form>
@endsection
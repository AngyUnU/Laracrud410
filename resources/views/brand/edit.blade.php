@extends('layout.main_template')
@section('content')
@include('fragments.formstyle')

<h1 id="titulo">Editar Marcas</h1>
<form action="{{route('brands.update',$brand->id)}}" method="POST">

    @csrf
    @method('PUT')
    <br>
    <label for="">Nombre de la Marca</label>
    <input type="text" name ='brand' value="{{$brand->brand}}">
<br>
    <label for="">Descripcion</label>
    <select name="description" id="">
      <br>
    <button type="submit"> Actualizar</button>
</form>
@endsection
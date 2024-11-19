@extends('layout.main_template')
@section('content')
@include('fragments.formstyle')

<h1 id="titulo">Create Marcas</h1>
<form action="{{route('brands.store')}}" method="POST">
    @csrf
    <br>
    <label for="" class="">Nombre de la marca</label>
    <input type="text" name = 'brand'>
<br>
    <label for="" class="">Descripcion</label>
    <input type="text" name = 'description'>
    <br>
    <button type="submit"> Registrar</button>
</form>
@endsection
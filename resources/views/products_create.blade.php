@extends('layout.main_template')
@section('content')
@include('fragments.formstayles')
<h1>Creacion de productos </h1>
<form action="{{route('products.store')}}" method="POST">
    <label for="">Nombre del producto</label>
    <input type="text" name = 'nameProduct'>
    <label for="">Marca</label>
    <input type="text" name="brand">
    <label for="">Cantidad</label>
    <input type="text" name="stock">
    <label for="">Precio Unitario</label>
    <input type="text" name = "unit_price">
    <label for="">Imagen</label>
    <input type="text" name="imagen">
</form>
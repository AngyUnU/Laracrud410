@extends('layout.main_template')
@section('content')
<h2> index products</h2>
<br>
<table>
    <thead>
        <th> Nombre producto</th>
        <th>Marca_Id</th>
        <th>Cantidad</th>
        <th>Precio</th>
        <th>Imagen</th>
        <th>Acciones</th>
    </thead>
    <tbody>
        @foreach ($products as $p )
        <tr>
            <td>{{$p->nameproduct}}</td>
            <td>{{$p->brand_id}}</td>
            <td>{{$p->stock}}</td>
            <td>{{$p->unit_price}}</td>
            <td>{{$p->imagen}}</td>
            <td>
                <button><a href="{{route('products.show',$p)}}">Mostrar</a></button>
                <button><a href="">Editar</a></button>
                <button><a href="">Eliminar</a></button>
            </td>
        </tr>
            
        @endforeach

</tbody>
</table>
<button><a href="{{route('products.create')}}">Registrar</a></button>
@endsection
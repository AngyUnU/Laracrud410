@extends('layout.main_template')
@section('content')
<h2> Marcas</h2>
<br>
<button><a href="{{route('brands.create')}}">Registrar Nueva Marca</a></button>
<table>
    <thead>
        <th>Marcas_Id</th>
        <th>Nombre</th>
        <th>Descripcion</th>
    </thead>
    <tbody>
        @foreach ($brands as $b )
        <tr>
            <td>{{$b->id}}</td>
            <td>{{$b->brand}}</td>
            <td>{{$b->description}}</td>
            <td>
    
                
            </td>
        </tr>
            
        @endforeach

</tbody>
</table>

@endsection
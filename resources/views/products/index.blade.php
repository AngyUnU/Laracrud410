@extends('layout.main_template')
@section('content')
<h2> PRODUCTOS</h2>
<br>
<button><a href="{{route('products.create')}}">Crear Producto</a></button>
<button><a href="{{route('brands.create')}}">Registrar Marca</a></button>
<button><a href="{{route('brands.index')}}">Mostrar Marca</a></button>
<td class="table-info"><table class="table table-bordered border-primary">
    <thead>
        <th scope="col">Producto</th>
        <th scope="col">Marca</th>
        <th scope="col">Descripcion</th>
        <th scope="col">Cantidad</th>
        <th scope="col">Precio</th>
        <th scope="col">Imagen</th>
        <th scope="col">Acciones</th>
    </thead>
    <tbody>
        @foreach ($products as $p )
        <tr class="table-primary">
            <td class="table-info">{{$p->nameproduct}}</td>
            <td class="table-info">{{$p->brand->brand}}</td>
            <td class="table-info">{{$p->brand->description}}</td>
            <td class="table-info">{{$p->stock}}</td>
            <td class="table-info">{{$p->unit_price}}</td>
            <td class="table-info"><img src="/imagen/products/{{$p->imagen}}" width="60" alt="producto"></td>
            <td class="table-info">
                
            
                <a class="btn btn-info" href="{{route('products.show',$p)}}"> <i class="fa-solid fa-plus"></i></a>
                    <button type="button" class="btn btn-success" href="{{route('products.edit',$p)}}">Editar</a></button>
                    <button type="button" class="btn btn-danger"href="{{route('products.delete',$p)}}">Eliminar</a></button>
    
                
            </td>
        </tr>
            
        @endforeach

</tbody>
</table>


{{$products->links()}}

@endsection
@extends('layout.main_template')
@section('content')
@include('fragments.formstyle')

<style>
form button{
    width:100px;
    padding:8px 17px;
    margin-block-start:32px;
    border:1px solid #000;
    border-radius:5px;
    display:block;
    color:#ffffff;
    background-color:#000;
}

form a{
    text-decoration: none;
}
form h3{
    width: 100%;
    height: 10px;
    font-weight: bold;
    font-family: Arial, Helvetica, sans-serif;
    display: inline-block;
}
</style>
<table>
<thead>
    <h3>¿esta seguro de eliminbar el producto {{$brand->brand}} ?</h3>
</thead>
<tbody>
<tr>
    <td>
        <form action="{{route('brand.index')}}"> 
            <button type="submit">
                    NO
            </button>
        </form>
    </td>
    <td>
        <form action="{{route('brand.destroy', $brand->id)}}"  method="POST"> 
           @method("DELETE")
           @csrf
            <button type="submit">
                    si
            </button>
        </form>
    </td>
</tr>
</tbody>
</table>
@endsection
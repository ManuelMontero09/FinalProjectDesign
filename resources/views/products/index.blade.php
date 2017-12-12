@extends('layouts.app')

@section('content')

<h1 class="text-primary">Control de Productos</h1>

<table class="table table-bordered" id="MyTable">
  <thead>
    <tr>
        <th class="text-center">ID</th>
        <th class="text-center">Producto</th>
        <th class="text-center">Descripcion</th>
        <th class="text-center">Cantidad</th>
        <th class="text-center">Precio</th>
        <th class="text-center">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($products as $product)
        <tr>
            <td class="text-center">{{ $product->id }}</td>
            <td class="text-center">{{ $product->Product }}</td>
            <td class="text-center">{{ $product->Description }}</td>
            <td class="text-center">{{ $product->Quantity }}</td>
            <td class="text-center">{{ $product->Price }}</td>
            <td class="text-center"> 
            <form action=" route(products.destroy , {{ $product->id }}" method= "post">
                <input name="_method" type="hidden" value="DELETE"/>
                <button type="submit"> Eliminar</button>
            </form>
            </td>
        </tr>
    @endforeach
  </tbody>
  <tfoot>
    <tr>
        <th class="text-center">ID</th>
        <th class="text-center">Producto</th>
        <th class="text-center">Descripcion</th>
        <th class="text-center">Cantidad</th>
        <th class="text-center">Precio</th>
        <th class="text-center">Acciones</th>
    </tr>
  </tfoot>
</table>

@stop



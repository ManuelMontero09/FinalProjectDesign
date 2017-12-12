<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/products/{{ $product -> id }}" method="post">
        {{ csrf_field() }}
        <input name="_method" type="hidden" value="PUT"/>
        <input type="text" name="Product" placeholder="producto" value="{{$product -> id}}">
        <input type="text" name="Product" placeholder="producto" value="{{$product -> Product}}">
        <textarea name="Description" cols="30" rows="10" placeholder="Descripcion"> {{$product -> Description}}</textarea>
        <input type="number" name="Quantity" placeholder="Cantidad" value="{{$product -> Quantity}}">
        <input type="number" name="Price" placeholder="Precio" value="{{$product -> Price}}">
         
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/products" method="post">
        {{ csrf_field() }}

        <input type="text" name="Product" placeholder="producto"/>
        <textarea name="Description" cols="30" rows="10" placeholder="Descripcion"></textarea>
        <input type="number" name="Quantity" placeholder="Cantidad"/>
        <input type="number" name="Price" placeholder="Precio"/>   
        <button type="submit">Crear</button>

    </form>
</body>
</html>
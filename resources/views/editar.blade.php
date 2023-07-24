<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1> aqui se va a mostrar la vista de editar</h1>
<form method="POST" action="{{route("productos.update",$producto->id)}}">
    @csrf @method("PUT")
    <input value="{{$producto->nombre}}" name="nombre" placeholder="nombre:" type="text">
    <input value="{{$producto->precio}}" name="precio" placeholder="precio:" type="number">
    <input value="{{$producto->cantidad}}" name="cantidad" placeholder="cantidad:" type="text">
    <input value="{{$producto->fecha_ingreso}}" name="fecha_ingreso" placeholder="fecha de ingreso:" type="date">
    <input value="{{$producto->id_tiposProducto}}" name="id_tiposProducto" placeholder="idtipo:" type="text">
    <button type="submit">editar</button>
</form>
</body>
</html>

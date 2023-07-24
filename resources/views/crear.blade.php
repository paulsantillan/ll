<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1> aqui se va a mostrar la vista de crear</h1>
<form method="POST" action="{{route("productos.store")}}">
    @csrf @method("POST")
    <input name="nombre" placeholder="nombre:" type="text">
    <input name="precio" placeholder="precio:" type="number">
    <input name="cantidad" placeholder="cantidad:" type="text">
    <input name="fecha_ingreso" placeholder="fecha de ingreso:" type="date">
    <input name="id_tiposProducto" placeholder="idtipo:" type="text">
    <button type="submit">guardar</button>
</form>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <a href="{{ route('productos.create') }}"> crear</a>
    <table border="1">
        <thead>
            <tr>
                <th>id</th>
                <th> nombre</th>
                <th>precio</th>
                <th>cantidad</th>
                <th>fecha de ingreso</th>
                <th>estado</th>
                <th>id_tipo</th>
                <th>acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->nombre }}</td>
                    <td>{{ $item->precio }}</td>
                    <td>{{ $item->cantidad }}</td>
                    <td>{{ $item->fecha_ingreso }}</td>
                    <td>{{ $item->estado }}</td>
                    <td>{{ $item->id_tiposProducto }}</td>
                    <td>
                        <form method="POST" action="{{ route('productos.destroy',$item->id) }} ">
                            @method('DELETE') @csrf
                            <button type="submit"> eliminar</button>
                        </form>
                        <a href="{{route("productos.edit",$item->id)}}">editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>

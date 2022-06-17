<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Productos</title>
    <link rel="stylesheet" href="{{public_path('../resources/css/app.css')}}" type="text/css">
</head>
<body>
    <h1 style="text-align: center">Reporte de Productos</h1>
    <div style="width: 420px;margin-left:10%;margin-right: auto;">
    <table class="table table table-sm">
     <tr>
       <th>Id</th>
       <th>Nombre</th>
       <th>Categoria</th>
       <th>Descripcion</th>
       <th>Precio</th>
       <th>Existencia</th>
     </tr>  
     @foreach ($producto as $productos)                 
     <tr>
       <td>{{$productos->id_producto}}</td>
       <td>{{$productos->nombre}}</td>
       <td>{{$productos->categoria}}</td>
       <td>{{$productos->descripcion}}</td>
       <td>{{$productos->precio}}</td>
       <td>{{$productos->existencia}}</td>
     </tr>
     @endforeach
   </table>
</div>
 </div>
</body>

</html>
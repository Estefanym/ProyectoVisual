<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale-1.0">
    <link rel="stylesheet" href="{{asset('../resources/css/productstyles.css')}}">
    <title>Pedido</title>
    <!-- favicon -->
    <link rel="icon"  href="{{asset('/img/engranajes.png')}}">
    <!-- estilos -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
</head>
    <style>
      .navbar{
        --bs-navbar-color: white;
        --bs-navbar-brand-color:white;
        --bs-navbar-hover-color: rgba(22, 83, 137, 0.749);
        --bs-navbar-brand-hover-color: rgba(22, 83, 137, 0.749);
    }
    #fake-body{
        box-align: center;
         padding: 25px;
         background-image: url("{{asset('/img/fondo.jpg')}}");
         width: 100% auto;
      }
    th,td{
        color:white;
    }
    h2,h1{
        color:white;
    }
    .form-group{
        color: white;
    }
    body{
        background-image: url("{{asset('/img/back.jpg')}}");
        margin: 0cm;
    }
		
    footer {
        width: 100%;
        height: 81px;
        position: absolute;
        bottom: 0;
        left: 0;
    }
    </style>


<body><!-- header -->

    <!-- nav -->
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/proyectoLPV/public/admin">
              <img src="{{asset('/img/engranajes.png')}}" alt="" width="30" height="30">Techno</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav mx-auto mb-2 mb-lg-0"  style="text-align: center;">
                  <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="/proyectoLPV/public/admin">Inicio</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="/proyectoLPV/public/admin/productos">Productos</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="/proyectoLPV/public/admin/reparacion">Reparaciones</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="/proyectoLPV/public/admin/tecnicos">Tecnicos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/proyectoLPV/public/admin/pedidos">Pedidos</a>
                </li>
              </ul>
              </div>
        </div>
    </nav>
        <!-- Section-->
            <div class="container px-4 px-lg-5 mt-5">
                
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                   <h1>Pedidos</h1>
                   <table class="table table table-sm">
                    <tr>
                      <th>Id</th>
                      <th>Piezas</th>
                      <th>tipo de entrega</th>
                      <th>Fecha de entrega</th>
                      <th>Id Producto</th>
                      <th>Id Cliente</th>
                      <th>Id Garantia</th>
                    </tr>  
                    @foreach ($pedido as $pedidos)                 
                    <tr>
                      <td>{{$pedidos->id_pedido}}</td>
                      <td>{{$pedidos->piezas}}</td>
                      <td>{{$pedidos->tipo_entrega}}</td>
                      <td>{{$pedidos->fecha_entrega}}</td>
                      <td>{{$pedidos->id_producto}}</td>
                      <td>{{$pedidos->id_cliente}}</td>
                      <td>{{$pedidos->id_garantia}}</td>
                    </tr>
                    @endforeach
                  </table>
                </div>
                <br>
                </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js" ></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- footer -->
    <footer class="bg-dark-expand-lg-dark text-center text-white">
        <!-- Grid container -->
            <br>
            Techno© 2022 
            <br>
            <br>
    </footer>
  </body>
  </html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale-1.0">
    <link href="../resources/css/style.css" rel="stylesheet">
    <title>@yield('title')</title>
    <!-- favicon -->
    <link rel="icon"  href="{{asset('/img/engranajes.png')}}">
    <!-- estilos -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
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
      
		
    </style>
</head>

<body>
    <!-- header -->

    <!-- nav -->
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/proyectoLPV/public/admin/index">
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
    
    @yield('content')
      
    <!-- footer -->
    <footer class="bg-dark text-center text-white">
      <!-- Grid container -->
          <br>
          Techno© 2022 
          <br>
          <br>
  </footer>
    <!-- script -->
    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js" ></script>
</body>
</html>
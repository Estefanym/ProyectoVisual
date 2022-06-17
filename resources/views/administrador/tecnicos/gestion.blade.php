<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale-1.0">
    <link rel="stylesheet" href="{{asset('../resources/css/productstyles.css')}}">
    <title>Tecnicos</title>
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
        <section class="py-5"style="background-image: url({{asset('/img/back.jpg')}}); margin=0;">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div style="text-align: center"><h1>Tecnicos</h1></div>
                   <table class="table table table-xs" style="white-space: nowrap;display:float;">
                        <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Acciones</th>
                        </tr>  
                    @foreach ($tecnico as $tecnicos)                 
                    <tr>
                      <td>{{$tecnicos->id_tecnico}}</td>
                      <td>{{$tecnicos->nombre}}</td>
                      <td>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="{{route('tecnicos.edit',$tecnicos->id_tecnico)}}" name="modificar" class="btn btn-warning" type="submit" style="display:inline-block;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                              </svg></a>
                            <form action="{{route('tecnicos.destroy',$tecnicos->id_tecnico)}}" method="POST" style="display:inline-block;" onsubmit="return confirm('¿Está seguro?')">
                                @method('delete')
                                @csrf
                                    <button name="borrar" class="btn btn-danger" type="submit">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                  </table>
                </div>
                <br>
                <h2>Agregar tecnico</h2>
                <form action="{{route('tecnicos.create')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group col-4 col-m-4 col-lg-4">
                        <label for="Agregar Tecnico" class="form-label">Id Tecnico</label>
                        <input type="text" class="form-control" name="id_tecnico" placeholder="">
                    </div>
                    <div class="form-group col-4 col-m-4 col-lg-4">
                        <label for="Agregar Tecnico" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombre">
                    </div><br>
                <button name="agregar" class="btn btn-success col-2" type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                      </svg> Agregar Tecnico
                </button>
                </form>
            </div>
        </section>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js" ></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- footer -->
    <footer class="bg-dark text-center text-white">
        <!-- Grid container -->
            <br>
            Techno© 2022 
            <br>
            <br>
    </footer>
  </body>
  </html>
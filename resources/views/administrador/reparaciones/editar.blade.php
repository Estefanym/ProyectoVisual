<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale-1.0">
    <link rel="stylesheet" href="{{asset('../resources/css/productstyles.css')}}">
    <title>Reparaciones</title>
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


<body>
        <!-- Section-->
        <section class="py-5"style="background-image: url({{asset('/img/back.jpg')}})">
            <div class="container px-4 px-lg-5 mt-5">      
                <h2>Modificar reparacion</h2>
                <form action="{{route('reparaciones.update',$reparacion->id_reparacion)}}" method="POST"  enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group col-4 col-m-4 col-lg-4">
                        <label for="Agregar Producto" class="form-label">Id Reparacion</label>
                        <input type="text" class="form-control" name="id_reparacion" placeholder="{{$reparacion->id_reparacion}}" disabled>
                    </div>           
                    <div class="form-group col-4 col-m-4 col-lg-4">
                        <label for="Agregar Producto" class="form-label">Precio</label>
                        <input type="number" class="form-control" name="precio" placeholder="$" value="{{$reparacion->precio}}">
                    </div>  
                    <div class="form-group col-4 col-m-4 col-lg-4">
                        <label for="Agregar Producto" class="form-label">Descripción</label>
                        <textarea class="form-control" name="descripcion" cols="4" rows="5">{{$reparacion->descripcion}}</textarea>
                    </div>
                  <br>
                  <a class="btn btn-outline-danger" text-align="center" href="{{ url("/admin/reparacion") }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                    <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
                    </svg> Regresar</a>
                    <button name="agregar" class="btn btn-outline-success" type="submit">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                  </svg> Guardar
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
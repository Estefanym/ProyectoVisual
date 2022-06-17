<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale-1.0">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <link href="../resources/css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="icon"  href="{{asset('/img/engranajes.png')}}">
    <title>Productos</title>
        <!-- Header-->
    <body>
        <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="/proyectoLPV/public/">
                  <img src="{{asset('/img/engranajes.png')}}" alt="" width="30" height="30">Techno</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                          <a class="nav-link" aria-current="page" href="/proyectoLPV/public/">Inicio</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="/proyectoLPV/public/productos">Productos</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="/proyectoLPV/public/reparaciones">Reparaciones</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="/proyectoLPV/public/contactos">Contáctanos</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="/proyectoLPV/public/garantia">Garantía</a>
                      </li>
                  </ul>
                  </div>
                  <a class="btn btn-outline-primary" text-align="center" href="{{ url("/login") }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                  </svg>  Iniciar sesion</a>
                <form class="d-flex">
                  <a class="btn btn-outline-primary" type="submit" href="{{ url("/carrito") }}">
                      <i class="bi-cart-fill me-1"></i>
                      Carrito
                      <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                  </a>
              </form>
            </div>
        </nav>
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Techno</h1>
                    <p class="lead fw-normal text-white-50 mb-0"><i>Lo que buscas al alcance de un clic...</i></p>
                </div>
            </div>
        </header>       
    
        <!-- Section-->
        <section class="py-5"style="background-image: url({{asset('/img/back.jpg')}})">
            <div class="container px-4 px-lg-5 mt-5">
                
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                   @foreach ($producto as $productos) 
                   <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                           <img class="card-img-top" src="{{asset($productos->imagen)}}" alt="..." width="220px"/>
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Nombre Producto-->
                                    <h5 class="fw-bolder">{{$productos->nombre}}</h5><br>
                                    <!-- Descripcion Producto-->
                                    <p class="fw-bolder">{{$productos->descripcion}}</p>
                                    <!-- Precio Product-->
                                    ${{$productos->precio}}
                                </div>
                            </div>
                            <!-- Product actions-->
                            <!-- Product actions-->
                            <form action="{{ route('carrito.store') }}" method="POST">
                                @csrf
                                <input type="hidden" value="{{ $productos->id }}" id="id" name="id">
                                <input type="hidden" value="{{ $productos->nombre }}" id="nombre" name="nombre">
                                <input type="hidden" value="1" id="cantidad" name="cantidad">
                                <input type="hidden" value="{{ $productos->precio }}" id="precio" name="precio">
                                <input type="hidden" value="{{ $productos->imagen }}" id="imagen" name="imagen">
                            </form>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <button class="btn btn-outline-dark mt-auto" title="add to cart" href="#">
                                        Añadir al carrito <i class="fa fa-shopping-cart">
                                        </i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div> 
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
 <!-- footer -->
 <footer class="bg-dark text-center text-white">
    <!-- Grid container -->
    <div class="container p-2 pb-2">
      <!-- Section: Social media -->
      <section class="mb-2">
        <!-- Facebook -->
        <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998;"href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
          </svg></i>
        </a>
  
        <!-- Twitter -->
        <a class="btn btn-primary btn-floating m-1" style="background-color: #55acee;" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
          </svg></i>
        </a>
  
        <!-- Google -->
        <a class="btn btn-primary btn-floating m-1" style="background-color: #dd4b39;" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
            <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"/>
          </svg></i>
        </a>
  
        <!-- Linkedin -->
        <a class="btn btn-primary btn-floating m-1" style="background-color: #0082ca;" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
            <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
          </svg></i>
        </a>
        <br>
        Techno© 2022 
</footer>
  <!-- script -->
  <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js" ></script>
</body>
</html>
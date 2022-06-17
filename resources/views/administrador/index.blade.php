@extends('layouts.master')
@section('title','Administrador Techno')
@section('content')
  <header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
      <div class="text-center text-white">
          <h1 class="display-4 fw-bolder">Techno</h1>
          <p class="lead fw-normal text-white-50 mb-0"><i>Bienvenido Administrador</i></p>
        </div>
    </div>
  </header>
  <section id="fake-body">
    <div class="card-group">
        <div class="card" style="width: 18rem;">
            <img src="{{asset('/img/computador.png')}}" class="card-img-top" alt="..." href="{{asset('/proyectoLPV/public/admin/productos')}}">
            <div class="card-body">
                <h3 class="card-text">Productos</h3>
            <p class="card-text">Visualiza o modifica los productos</p>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="{{asset('/img/tecnico.jpg')}}" class="card-img-top" alt="..." href="{{ url("/admin/reparacion") }}">
            <div class="card-body">
                <h3 class="card-text">Reparaciones</h3>
            <p class="card-text">Visualiza o modifica los productos</p>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="{{asset('/img/reparaciones.webp')}}" class="card-img-top" alt="..." href="{{asset('/proyectoLPV/public/admin/tecnicos')}}">
            <div class="card-body">
                <h3 class="card-text">Tecnicos</h3>
            <p class="card-text">Visualiza o modifica los productos</p>
            </div>
        </div>
    </div>
@endsection
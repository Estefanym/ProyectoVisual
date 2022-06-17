@extends('layouts.plantilla')
@section('title','Inicio')
@section('content')
<section id="fake-body">
<div id="carouselExampleIndicators" class="carousel slide d-block w-50 mx-auto" data-bs-ride="true">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{asset('/img/celulares.webp')}}" class="d-block w-100" alt="promocion celulares">
      </div>
      <div class="carousel-item">
        <img src="{{asset('/img/promos.webp')}}" class="d-block w-100" alt="celulares">
      </div>
      <div class="carousel-item">
        <img src="{{asset('/img/laptop.webp')}}" class="d-block w-100" alt="">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
<br>
<div class="card-group">
    <div class="card" style="width: 18rem;">
        <img src="{{asset('/img/computo.jpg')}}" class="card-img-top" alt="..." href="{{asset('/proyectoLPV/public/productos/index')}}">
        <div class="card-body">
            <h3 class="card-text">Equipos de computo</h3>
        <p class="card-text">Aqui encontraras tus mejores opciones para computo</p>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <img src="{{asset('/img/celularesxiaomi.webp')}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h3 class="card-text">Celulares</h3>
        <p class="card-text">Adquiere las mejores gamas por un bajo costo</p>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <img src="{{asset('/img/reparaciones.webp')}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h3 class="card-text">Reparaciones</h3>
        <p class="card-text">¿Sin tiempo? Programa una revisión a tu equipo !sin espera¡</p>
        </div>
    </div>
</div>
</section>
@endsection

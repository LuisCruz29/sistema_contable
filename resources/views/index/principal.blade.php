@extends('layouts.app')
@section('title')
    Principal
@endsection
@section('estilo-classes')
    max-width: 1200px; margin: 0 auto;
@endsection
@push('css')
    <link rel="stylesheet" href="{{ asset('css/principalHome.css') }}">
@endpush

@section('extra-classes')my-5 section @endsection

@section('content')
     
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/imagen-1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption">
              <h5>Bienvenidos a nuestro Sistema contable</h5>
                              <p>Lleva y organiza tu trabajo de manera eficiente.</p>
                              <p><a href="#" class="btn btn-warning mt-3">VAMOS</a></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/imagen-3.webp" class="d-block w-100" alt="...">
            <div class="carousel-caption">
              <h5>Crea y organiza tu libro diario</h5>
                              <p>Vas a poder falicitar las cuentas de la empresa</p>
                              <p><a href="#" class="btn btn-warning mt-3">VAMOS</a></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/imagen-2-transformed.webp" class="d-block w-100" alt="...">
            <div class="carousel-caption">
              <h5>Genera balances y cuentas T</h5>
                              <p>Para ver las entradas y salidas de dinero y el estado de la empresa</p>
                              <p><a href="#" class="btn btn-warning mt-3">VAMOS</a></p>
            </div>
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

      <!-- about section starts -->
      <section id="about" class="about section-padding">
          <div class="container">
              <div class="row">
                  <div class="col-lg-4 col-md-12 col-12">
                      <div class="about-img">
                          <img src="img/imagen-4.webp" alt="" class="img-fluid">
                      </div>
                  </div>
                  <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                      <div class="about-text">
                            <h2>Nuestros servicios son</h2>
                            <br>
                            <br>
                            <p>Poder gestionar ayudar y hacer que los empresarios esten al dia de las salidas y entradas de 
                                dinero y los contadores puedan hacer su trabajo lo mas rapido facil y un mejor control de las cuentas que se trabajan</p>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- about section Ends -->

      <!-- team starts -->
      <section class="team section-padding" id="team">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5">
                        <h2>Nuestro grupo de trabajo</h2>
                        <p>Todos estudiantes de la Universidad de El Salvador</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <div class="img-container">
                                <img src="img/nayib.png" alt="Santos Josue Romero Ochoa">
                            </div>
                            <h3 class="card-title py-2">Santos Josue Romero Ochoa</h3>
                            <p class="card-text">Ingeniero en Sistemas Informáticos</p>
                            <p class="socials">
                                <i class="bi bi-twitter text-dark mx-1"></i>
                                <i class="bi bi-facebook text-dark mx-1"></i>
                                <i class="bi bi-linkedin text-dark mx-1"></i>
                                <i class="bi bi-instagram text-dark mx-1"></i>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <div class="img-container">
                                <img src="img/shafig.jpeg" alt="Luis Alejandro Cruz Portillo">
                            </div>
                            <h3 class="card-title py-2">Luis Alejandro Cruz Portillo</h3>
                            <p class="card-text">Ingeniero en Sistemas Informáticos</p>
                            <p class="socials">
                                <i class="bi bi-twitter text-dark mx-1"></i>
                                <i class="bi bi-facebook text-dark mx-1"></i>
                                <i class="bi bi-linkedin text-dark mx-1"></i>
                                <i class="bi bi-instagram text-dark mx-1"></i>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <div class="img-container">
                                <img src="img/Manuel-Flores-1.jpg" alt="Kevin Nathanael Granados Perez">
                            </div>
                            <h3 class="card-title py-2">Kevin Nathanael Granados Perez</h3>
                            <p class="card-text">Ingeniero en Sistemas Informáticos</p>
                            <p class="socials">
                                <i class="bi bi-twitter text-dark mx-1"></i>
                                <i class="bi bi-facebook text-dark mx-1"></i>
                                <i class="bi bi-linkedin text-dark mx-1"></i>
                                <i class="bi bi-instagram text-dark mx-1"></i>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <div class="img-container">
                                <img src="img/daniel-ortega-regreso-presidencia-nicaragua.jpeg" alt="Cristian Geovanny Rubio Garcia">
                            </div>
                            <h3 class="card-title py-2">Cristian Geovanny Rubio Garcia</h3>
                            <p class="card-text">Ingeniero en Sistemas Informáticos</p>
                            <p class="socials">
                                <i class="bi bi-twitter text-dark mx-1"></i>
                                <i class="bi bi-facebook text-dark mx-1"></i>
                                <i class="bi bi-linkedin text-dark mx-1"></i>
                                <i class="bi bi-instagram text-dark mx-1"></i>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <style>
        .img-container {
            width: 150px; /* Ajusta el tamaño según sea necesario */
            height: 150px; /* Ajusta el tamaño según sea necesario */
            margin: 0 auto 1rem auto;
            overflow: hidden;
            border-radius: 50%;
            border: 2px solid #ddd;
        }

        .img-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

    </style>
@endsection
@extends('layouts.master')

@section('title', 'Portafolio - Páginas Web en Cusco')

@section('content')

  <section class="container">
    <!--Section heading-->
    <h1 class="py-5 font-weight-bold text-center">Portafolio</h1>
    <!--Section description-->
    <p class="px-5 mb-5 pb-3 lead grey-text text-center">
      Estos son algunos de nuestros <strong class="orange-text">Diseños de Páginas Web en Cusco</strong>, que se encuentran en los primeros puestos de los motores de Busqueda.
    </p>

    <!--Grid row-->
    <div class="row text-center">

        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-4">


          <!-- Card -->
          <div class="card wow fadeInLeft">

          <!-- Card image -->
          <div class="view overlay">
            <img class="card-img-top" src="{{ asset('assets/img/web/machupicchu.png') }}" alt="Card image cap">
            <a href="#!">
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>

          <!-- Card content -->
          <div class="card-body">

            <!-- Title -->
            <h4 class="card-title">Machupicchu Adventure</h4>
            <!-- Text -->
            <!-- Button -->
            <a href="#" class="btn btn-warning"><i class="fas fa-2x fa-link"></i></a>

          </div>

          </div>
          <!-- Card -->

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4">

          <!-- Card -->
          <div class="card">

          <!-- Card image -->
          <div class="view overlay">
            <img class="card-img-top" src="{{ asset('assets/img/web/retreat.png') }}" alt="Card image cap">
            <a href="#!">
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>

          <!-- Card content -->
          <div class="card-body">

            <!-- Title -->
            <h4 class="card-title">Ayahuasca Retreat</h4>
            <!-- Text -->
            <!-- Button -->
            <a href="#" class="btn btn-warning"><i class="fas fa-2x fa-link"></i></a>

          </div>

          </div>
          <!-- Card -->

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4">

          <!-- Card -->
          <div class="card">

          <!-- Card image -->
          <div class="view overlay">
            <img class="card-img-top" src="{{ asset('assets/img/web/caisae.png') }}" alt="Card image cap">
            <a href="#!">
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>

          <!-- Card content -->
          <div class="card-body">

            <!-- Title -->
            <h4 class="card-title">Caisae</h4>
            <!-- Text -->
            <!-- Button -->
            <a href="#" class="btn btn-warning"><i class="fas fa-2x fa-link"></i></a>

          </div>

          </div>
          <!-- Card -->

        </div>
        <!--Grid column-->

    </div>
    <!--Grid row-->

    <!--Grid row-->
    <div class="row text-center">

        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-4">


          <!-- Card -->
          <div class="card">

          <!-- Card image -->
          <div class="view overlay">
            <img class="card-img-top" src="{{ asset('assets/img/web/wachuma.png') }}" alt="Card image cap">
            <a href="#!">
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>

          <!-- Card content -->
          <div class="card-body">

            <!-- Title -->
            <h4 class="card-title">Ayahuasca Wachuma</h4>
            <!-- Text -->
            <!-- Button -->
            <a href="#" class="btn btn-warning"><i class="fas fa-2x fa-link"></i></a>

          </div>

          </div>
          <!-- Card -->

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4">

          <!-- Card -->
          <div class="card">

          <!-- Card image -->
          <div class="view overlay">
            <img class="card-img-top" src="{{ asset('assets/img/web/tambopata.png') }}" alt="Card image cap">
            <a href="#!">
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>

          <!-- Card content -->
          <div class="card-body">

            <!-- Title -->
            <h4 class="card-title">Tambopata Expeditions</h4>
            <!-- Text -->
            <!-- Button -->
            <a href="#" class="btn btn-warning"><i class="fas fa-2x fa-link"></i></a>

          </div>

          </div>
          <!-- Card -->

        </div>
        <!--Grid column-->



    </div>
    <!--Grid row-->

  </section>


@endsection

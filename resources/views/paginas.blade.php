@extends('layouts.master')

@section('title', 'Páginas Web en Cusco, Diseño de Páginas web Cusco Perú, Posicionamiento SEO, Comercio Electronico')

@section('content')


<!--Section: Features v.2-->
<section class="text-center container">

  <!--Section heading-->
  <h1 class="py-5 font-weight-bold">Diseño de Páginas Web</h1>
  <!--Section description-->
  <p class="px-5 mb-5 pb-3 lead grey-text">
    Especialistas en <strong class="orange-text">Diseño y Desarrollo de Páginas Web</strong>, creamos diseños exclusivos para cada uno de nuestros clientes, utilizamos lo último en tecnología de diseño y desarrollo Web.
  </p>

  <!--Grid row-->
  <div class="row text-left">

  <!--Section heading-->
  <div class="col-md-12">
    <h3 class="py-2 font-weight-bold">Características:</h3>
    <hr>
  </div>
  <!--Section description-->

  <!--Grid column-->
  <div class="col-md-4 mb-4 wow fadeInLeft">
      <div class="col-1 col-md-2 float-left">
      <i class="fas fa-code blue-text fa-2x"></i>
      </div>
      <div class="col-10 col-md-9 col-lg-10 float-right">
      <h4 class="font-weight-bold">Diseño Exclusivo</h4>
      <p class="grey-text">
        Porque sabemos que cada empresa tiene su propia imagen, desarrollamos diseños exclusivos.
      </p>
      </div>
  </div>
  <!--Grid column-->

  <!--Grid column-->
  <div class="col-md-4 mb-4 wow fadeInUp">
      <div class="col-1 col-md-2 float-left">
      <i class="fas fa-laptop pink-text fa-2x"></i>
      </div>
      <div class="col-10 col-md-9 col-lg-10 float-right">
      <h4 class="font-weight-bold">Responsivo/Adaptable</h4>
      <p class="grey-text">
        Páginas web Adaptables a todo tipo de Dispositivos Móviles (Celulares, Tablets, Pcs).
      </p>
      </div>
  </div>
  <!--Grid column-->

  <!--Grid column-->
  <div class="col-md-4 mb-4 wow fadeInRight">
      <div class="col-1 col-md-2 float-left">
      <i class="fas fa-paint-brush purple-text fa-2x"></i>
      </div>
      <div class="col-10 col-md-9 col-lg-10 float-right">
      <h4 class="font-weight-bold">Diseño Profesional</h4>
      <p class="grey-text">
        Páginas Web con un Diseño profesional, recuerde que la primera impresión cuenta.
      </p>
      </div>
  </div>
  <!--Grid column-->

  </div>
  <!--Grid row-->

</section>
<!--Section: Features v.2-->

<section class="container">
  <div class="row">
    <!--Section heading-->
    <div class="col-md-12">
      <h3 class="py-2 font-weight-bold">Dirigido a:</h3>
      <hr>
    </div>
    <!--Section description-->
    <div class="col-md-4 mb-4 wow fadeInUp">
      <!-- Card -->
      <div class="card text-center">

        <!-- Card image -->
        <div class="view overlay">
          <img class="card-img-top" src="{{ asset('assets/img/web/corporativo.png') }}" alt="Diseño Paginas Web Cusco">
          <a href="#!">
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>

        <!-- Card content -->
        <div class="card-body">

          <!-- Title -->
          <h4 class="card-title">Páginas Web Corporativas</h4>
          <!-- Text -->
          <p class="card-text">
            Diseños Web dirigidos a empresas como Agencias de Turismo, Hoteles, Restaurant y demás. Venda sus paquetes turísticos de una manera más fácil y detallada.
          </p>
          <!-- Button -->
          <a href="{{ url('contacto') }}" class="btn btn-warning">Consultar</a>

        </div>

      </div>
      <!-- Card -->
    </div>
    <div class="col-md-4 mb-4 wow fadeInUp">
      <!-- Card -->
      <div class="card text-center">

        <!-- Card image -->
        <div class="view overlay">
          <img class="card-img-top" src="{{ asset('assets/img/web/ecommerce.jpg') }}" alt="Diseño Paginas Web Cusco | Comercio Electronico">
          <a href="#!">
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>

        <!-- Card content -->
        <div class="card-body">

          <!-- Title -->
          <h4 class="card-title">Páginas Web E-Commerce (Tiendas Virtuales)</h4>
          <!-- Text -->
          <p class="card-text">
            Si su Empresa se dedica a la venta de productos, que mejor una Página Web que muestre un catalogo detallado de sus Productos.
          </p>
          <!-- Button -->
          <a href="{{ url('contacto') }}" class="btn btn-success">Consultar</a>

        </div>

      </div>
      <!-- Card -->
    </div>
    <div class="col-md-4 mb-4 wow fadeInUp">
      <!-- Card -->
      <div class="card text-center">

        <!-- Card image -->
        <div class="view overlay">
          <img class="card-img-top" src="{{ asset('assets/img/web/aplicaciones.png') }}" alt="Diseño Paginas Web Cusco | Aplicaciones Web">
          <a href="#!">
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>

        <!-- Card content -->
        <div class="card-body">

          <!-- Title -->
          <h4 class="card-title">Aplicaciones Web (MicroEmpresas)</h4>
          <!-- Text -->
          <p class="card-text">
            Desarrollo de Sistemas Web a medida para todo tipo de Empresas. Totalmente adaptables a dispositivos móviles, y sobre todo Seguras.
          </p>
          <!-- Button -->
          <a href="{{ url('contacto') }}" class="btn btn-info">Consultar</a>

        </div>

      </div>
      <!-- Card -->
    </div>
  </div>
</section>

@endsection

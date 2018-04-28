  <!--Navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark scrolling-navbar fixed-top">
    <div class="container">
      <!-- Navbar brand -->
      <img src="{{ asset('assets/img/web/logo.png') }}" height="90" width="250" class="d-inline-block align-top" alt="">
      <!-- Collapse button -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Collapsible content -->
      <div class="collapse navbar-collapse" id="basicExampleNav">

        <!-- Links -->
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{ url('/') }}">Inicio
                <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('nosotros') }}">Nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('diseño-de-paginas-web-en-cusco') }}">Páginas Web</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('blog') }}">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('portafolio') }}">Portafolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('contacto') }}">Contacto</a>
          </li>
        </ul>
        <!-- Links -->
      </div>
      <!-- Collapsible content -->
    </div>
  </nav>
  <!--/.Navbar-->

  <!--Carousel Wrapper-->
  <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
      <!--Indicators-->
      <ol class="carousel-indicators">
          <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-2" data-slide-to="1"></li>
          <li data-target="#carousel-example-2" data-slide-to="2"></li>
      </ol>
      <!--/.Indicators-->
      <!--Slides-->
      <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
              <div class="view">
                <img class="d-block w-100" src="{{ asset('assets/img/web/bg.jpg') }}" alt="Páginas Web en Cusco | Sitios Web">
                <div class="mask rgba-black-light"></div>
                <div class="full-bg-img flex-center mask rgba-indigo-light white-text">
                  <ul class="animated fadeInUp col-md-12 list-unstyled list-inline">
                    <li>
                      <h1 class="font-weight-bold text-uppercase">
                        Diseño de Páginas Web Profesionales
                      </h1>
                    </li>
                    <li>
                      <p class="font-weight-bold text-uppercase py-4">
                        Comprometidos con el Éxito de tu Empresa.
                      </p>
                    </li>
                    <li class="list-inline-item">
                      <a target="_blank" href="{{ url('contacto') }}" class="btn btn-cyan btn-lg btn-rounded ml-0">Consultar</a>
                    </li>
                  </ul>
                </div>
              </div>

          </div>
          <div class="carousel-item">
              <!--Mask color-->
              <div class="view">
                <img class="d-block w-100" src="{{ asset('assets/img/web/bg1.jpg') }}" alt="Páginas Web en Cusco | Sistemas Web">
                <div class="mask rgba-black-strong"></div>
                  <div class="full-bg-img flex-center mask rgba-purple-light white-text">
                    <ul class="animated fadeInUp col-md-12 list-unstyled">
                      <li>
                        <h1 class="font-weight-bold text-uppercase">Desarrollo de Aplicaciones Web</h1>
                      </li>
                      <li>
                        <p class="font-weight-bold text-uppercase py-4">Creamos sistemas a medida para todo tipo de Empresas.</p>
                      </li>
                      <li>
                        <a target="_blank" href="{{ url('contacto') }}" class="btn btn-primary btn-rounded btn-lg">Consultar</a>
                      </li>
                    </ul>
                  </div>
              </div>
          </div>
          <div class="carousel-item">
              <!--Mask color-->
              <div class="view">
                  <img class="d-block w-100" src="{{ asset('assets/img/web/bg2.jpg') }}" alt="Páginas Web en Cusco | Marketing Digital">
                  <div class="mask rgba-black-slight"></div>
                  <div class="full-bg-img flex-center mask rgba-blue-light white-text">
                    <ul class="animated fadeInUp col-md-12 list-unstyled">
                      <li>
                        <h1 class="font-weight-bold text-uppercase">Marketing Digital</h1></li>
                      <li>
                        <p class="font-weight-bold text-uppercase py-4">Optimizamos su Página Web para un mejor Posicionamiento en buscadores.</p>
                      </li>
                      <li>
                        <a target="_blank" href="{{ url('contacto') }}" class="btn btn-lg btn-indigo btn-rounded">Consultar</a>
                      </li>
                    </ul>
                  </div>
              </div>
          </div>
      </div>
      <!--/.Slides-->
      <!--Controls-->
      <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
      </a>
      <!--/.Controls-->
  </div>
  <!--/.Carousel Wrapper-->

@extends('layouts.master')

@section('title', 'Contacto')

@section('content')

<!--Section: Contact v.2-->
<section>

    <div class="container">
      <!--Section heading-->
      <h2 class="text-center h1 py-5">Contacto</h2>
      <!--Section description-->
      <p class="text-center mb-5">
        Para mayor información de nuestros servicios comuníquese a nuestros teléfonos o envíenos un mensaje a nuestros correos electrónicos, nos comunicaremos a la brevedad posible con UD.
      </p>

      <div class="row">

          <!--Grid column-->
          <div class="col-md-8 col-xl-9">
              <form>

                  <!--Grid row-->
                  <div class="row">

                      <!--Grid column-->
                      <div class="col-md-6">
                        <div class="md-form">
                            <input type="text" id="name" class="form-control">
                            <label for="contact-Subject" class="">Nombres</label>
                        </div>
                      </div>
                      <!--Grid column-->

                      <!--Grid column-->
                      <div class="col-md-6">
                        <div class="md-form">
                            <input type="text" id="name" class="form-control">
                            <label for="contact-Subject" class="">Email</label>
                        </div>
                      </div>
                      <!--Grid column-->

                  </div>
                  <!--Grid row-->

                  <!--Grid row-->
                  <div class="row">
                    <!--Grid column-->
                    <div class="col-md-6">
                      <div class="md-form">
                          <input type="text" id="name" class="form-control">
                          <label for="contact-Subject" class="">Telefono</label>
                      </div>
                    </div>
                    <!--Grid column-->
                    <!--Grid column-->
                    <div class="col-md-6">
                      <div class="md-form">
                          <select class="form-control" name="select" id="select">
                            <option value="#">Selecccione el Tipo de servicio a Contratar</option>
                            <option value="paginasWeb">Página Web</option>
                            <option value="sistemasWeb">Sistema Web (Aplicación)</option>
                            <option value="tiendaVirtual">Tienda Virtual</option>
                            <option value="SEO_SEM">Posicionamieto Web SEO | SEM</option>
                            <option value="servicioTecnico">Servicio Técnico</option>
                          </select>
                      </div>
                    </div>
                    <!--Grid column-->
                  </div>
                  <!--Grid row-->

                  <!--Grid row-->
                  <div class="row">

                      <!--Grid column-->
                      <div class="col-md-12">

                          <div class="md-form">
                              <textarea type="text" id="contact-message" class="form-control md-textarea" rows="3"></textarea>
                              <label for="contact-message">Su Mensaje</label>
                          </div>

                      </div>
                  </div>
                  <!--Grid row-->

              </form>

              <div class="text-center text-md-left">
                  <button class="btn btn-outline-primary waves-effect" type="submit">Send<i class="fa fa-paper-plane-o ml-2"></i></button>
              </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-4 col-xl-3 text-center">
              <ul class="list-unstyled">
                  <li>
                      <i class="fa fa-map-marker fa-2x blue-text"></i>
                      <p>Urb. Micaela Bastidas C-9 | Cusco</p>
                  </li>

                  <li>
                      <i class="fa fa-phone fa-2x mt-4 blue-text"></i>
                      <p>+51 949 054 338</p>
                      <p>+084 218323</p>
                  </li>

                  <li>
                      <i class="fa fa-envelope fa-2x mt-4 blue-text"></i>
                      <p>info@webdesigncusco.com</p>
                      <p>ventas@webdesigncusco.com</p>
                  </li>
              </ul>
          </div>
          <!--Grid column-->

      </div>
    </div>

</section>
<!--Section: Contact v.2-->


@endsection

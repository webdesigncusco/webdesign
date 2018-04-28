@extends('layouts.master')

@section('title', 'Diseño Páginas Web, Sitios Web, Sistemas Web, Aplicaciones Android, Actualidad')

@section('content')

<!--Section: Blog v.4-->
<section class="pt-5 mt-4 pb-3">

    <div class="container">
      <!--Section heading-->
      <h1 class="py-3 font-weight-bold text-center orange-text">Posts Recientes</h1>
      <!--Section description-->
      <p class="px-3 mb-5 pb-3 lead grey-text text-center">
        Nos basamos principalmente en crear las mejores <strong class="orange-text">Páginas web en cusco</strong>, más novedosas y que estas estén optimizadas para que sean visibles tanto en web como para móvil, y posicionar tu negocio en los primeros lugares de los buscadores, ya que esto va de la mano para llegar al éxito de cualquier negocio en internet.
      </p>
      <!--Grid row-->
      <div class="row wow fadeInUp">
          <div class="col-md-12">
              <!--Featured image-->
              <div class="card card-cascade wider reverse">
                  <div class="view overlay">
                      <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(142).jpg" alt="Wide sample post image" class="img-fluid">
                      <a>
                          <div class="mask rgba-white-slight"></div>
                      </a>
                  </div>

                  <!--Post data-->
                  <div class="card-body text-center">
                      <h2>
                          <a class="font-weight-bold">This is title of the news.</a>
                      </h2>
                      <p>Written by
                          <a>Abby Madison</a>, 26/08/2018</p>


                  </div>
                  <!--Post data-->
              </div>

              <!--Excerpt-->
              <div class="excerpt mt-5">
                  <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
                      deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non
                      provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum
                      fuga. Et harum quidem rerum facilis est et expedita distinctio.
                  </p>

                  <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime
                      placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem
                      quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae
                      sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut
                      reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus.
                  </p>

                  <a class="btn btn-success btn-md mb-3">Read more</a>

              </div>
          </div>
      </div>
      <!--Grid row-->

      <hr class="mb-5 mt-4">

      <!--Grid row-->
      <div class="row wow fadeInUp">
          <div class="col-md-12">
              <!--Featured image-->

              <div class="card card-cascade wider reverse">
                  <div class="view overlay">
                      <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(146).jpg" alt="Second wide sample post image" class="img-fluid">
                      <a>
                          <div class="mask rgba-white-slight"></div>
                      </a>
                  </div>

                  <!--Post data-->
                  <div class="card-body text-center">
                      <h2>
                          <a class="font-weight-bold">The beauty of the mountain nature.</a>
                      </h2>
                      <p>Written by
                          <a>Abby Madison</a>, 22/08/2016</p>

                  </div>
                  <!--Post data-->
              </div>

              <!--Excerpt-->
              <div class="excerpt mt-5">
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                      totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                      dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
                      sed quia consequuntur magni dolores eos qui ratione voluptatem.
                  </p>

                  <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed
                      quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                      Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi
                      ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate
                      velit esse quam nihil molestiae consequatur.
                  </p>

                  <a class="btn btn-success btn-md mb-3">Read more</a>

              </div>
          </div>
      </div>
      <!--Grid row-->

      <hr class="mb-5 mt-4">

      <!--Pagination -->
      <nav aria-label="pagination example">
          <ul class="pagination pagination-circle pg-blue justify-content-center mb-0">

              <!--First-->
              <li class="page-item disabled"><a class="page-link">First</a></li>

              <!--Arrow left-->
              <li class="page-item disabled">
                  <a class="page-link" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                      <span class="sr-only">Previous</span>
                  </a>
              </li>

              <!--Numbers-->
              <li class="page-item active"><a class="page-link">1</a></li>
              <li class="page-item"><a class="page-link">2</a></li>
              <li class="page-item"><a class="page-link">3</a></li>
              <li class="page-item"><a class="page-link">4</a></li>
              <li class="page-item"><a class="page-link">5</a></li>

              <!--Arrow right-->
              <li class="page-item">
                  <a class="page-link" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                      <span class="sr-only">Next</span>
                  </a>
              </li>

              <!--Last-->
              <li class="page-item"><a class="page-link">Last</a></li>

          </ul>
      </nav>

      <hr class="mb-5 mt-4">

    </div>

</section>
<!--Section: Blog v.4-->

@endsection

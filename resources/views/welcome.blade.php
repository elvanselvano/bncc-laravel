@extends("layouts.app")

@section('title', 'BNCC News')

@section("content")

  <!-- BODY CONTAINER -->
  <div class="container">

    <!-- Heading -->
    <div class="row mb-2">
      <div class="col-12 text-center pt-3">
        <h1>BNCC NEWS</h1>
        <p>Stay up-to-date with BNCC's breaking news and in-depth reports.</p>
      </div>

      <div class="col-12 text-center pt-3">
        <a href="/db" class="btn btn-primary">LATEST ARTICLES</a>
      </div>
    </div>

    <!-- Carousel -->
    <div class="row">
      <div class="col-12 pb-5">
        <section class="row">
          <!-- Carousel Slide -->
          <div class="col-12 col-md-6 pb-0 pb-md-3 pt-2 pr-md-1">
            <div id="featured" class="carousel slide carousel" data-ride="carousel">
              <div class="carousel-inner">

                <!-- News Slider -->
                <div class="carousel-item active">
                  <div class="card border-0 rounded-0 text-light overflow zoom">
                    <div class="position-relative">
                      <!-- Thumbnail -->
                      <div class="ratio_left-cover-1 image-wrapper">
                        <img class="img-fluid w-100" src="/images/image1.jpg" alt="">
                      </div>
                      <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                        <!--title-->
                        <h2 class="h3 post-title text-white my-1">
                          Cegah Kantor Polisi Diserang, TNI-Polri Patroli Besar-besaran
                        </h2>
                        <!-- meta title -->
                        <div class="news-meta">
                          <span class="news-author">by <strong>Budi</strong></span>
                          <span class="news-date">Sept 28, 2020</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- News Slider -->
                <div class="carousel-item">
                  <div class="card border-0 rounded-0 text-light overflow zoom">
                    <div class="position-relative">
                      <!-- Thumbnail -->
                      <div class="ratio_left-cover-1 image-wrapper">
                        <img class="img-fluid w-100" src="/images/image2.jpg" alt="">
                      </div>
                      <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                        <!--title-->
                        <h2 class="h3 post-title text-white my-1">
                          Startup E-Commerce Sirclo Raih Dana Rp88 M Kala Covid-19
                        </h2>
                        <!-- meta title -->
                        <div class="news-meta">
                          <span class="news-author">by <strong>Siti</strong></span>
                          <span class="news-date">Sept 28, 2020</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Navigation -->
            <a class="carousel-control-prev" href="#featured" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#featured" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

          <!-- 2x2 Box Container -->
          <div class="col-12 col-md-6 pt-2 pl-md-1 mb-3 mb-lg-4">
            <div class="row">
              <!-- News Container -->
              <div class="col-6 pb-1 pt-0 pr-1">
                <div class="card border-0 rounded-0 text-white overflow zoom">
                  <div class="position-relative">
                    <!-- Thumbnail -->
                    <div class="ratio_left-cover-1 image-wrapper">
                      <img class="img-fluid w-100" src="/images/image3.jpg" alt="">
                    </div>

                    <!-- Category and Title -->
                    <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                      <a class="p-1 badge badge-primary rounded-0" href="">Science</a>
                      <h2 class="h5 text-white my-1">
                        Satelit Tua NASA Usia 56 Tahun Jatuh ke Bumi
                      </h2>
                    </div>
                  </div>
                </div>
              </div>

              <!-- News Container -->
              <div class="col-6 pb-1 pl-1 pt-0">
                <div class="card border-0 rounded-0 text-white overflow zoom">
                  <div class="position-relative">
                    <!-- Thumbnail -->
                    <div class="ratio_left-cover-1 image-wrapper">
                      <img class="img-fluid w-100" src="/images/image4.jpg" alt="">
                    </div>
                    <!-- Category and Title -->
                    <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                      <a class="p-1 badge badge-primary rounded-0" href="">Otomotif</a>
                      <h2 class="h5 text-white my-1">
                        Komunitas Otomotif Minta Ganjil Genap Motor Dikaji Ulang
                      </h2>
                    </div>
                  </div>
                </div>
              </div>

              <!-- News Container -->
              <div class="col-6 pb-1 pr-1 pt-1">
                <div class="card border-0 rounded-0 text-white overflow zoom">
                  <div class="position-relative">
                    <!-- Thumbnail -->
                    <div class="ratio_left-cover-1 image-wrapper">
                      <img class="img-fluid w-100" src="/images/image5.jpg" alt="">
                    </div>
                    <!-- Category and Title -->
                    <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                      <a class="p-1 badge badge-primary rounded-0" href="">Sains</a>
                      <h2 class="h5 text-white my-1">
                        Kantong Plastik dari Tumbuhan Rusak Lingkungan
                      </h2>
                    </div>
                  </div>
                </div>
              </div>

              <!-- News Container -->
              <div class="col-6 pb-1 pl-1 pt-1">
                <div class="card border-0 rounded-0 text-white overflow zoom">
                  <div class="position-relative">
                    <!-- Thumbnail -->
                    <div class="ratio_left-cover-1 image-wrapper">
                      <img class="img-fluid w-100" src="/images/image6.jpg" alt="">
                    </div>
                    <!-- Category and Title -->
                    <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                      <a class="p-1 badge badge-primary rounded-0" href="">Film</a>
                      <h2 class="h5 text-white my-1">
                        Netflix Tunda Acara Promosi Film Chadwick Boseman
                      </h2>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
    @endsection

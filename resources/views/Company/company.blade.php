<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Foursen Network Company</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet"/>

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet"/>

    <!-- Libraries Stylesheet -->
    <link href="{{asset('Reservasi/lib/animate/animate.min.css')}}" rel="stylesheet" />
    <link href="{{asset('Reservasi/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('Reservasi/css/bootstrap.min.css')}}" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="{{asset('Reservasi/css/style.css')}}" rel="stylesheet" />
  </head>


  <body>
    <div class="container-xxl bg-white p-0">
      <!-- Spinner Start, Menampilkan animasi loading spinner saat halaman sedang dimuat-->
      <div
        id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
      <div
        class="spinner-border text-primary" style="width: 3rem; height: 3rem" role="status">
        <span class="sr-only">Loading...</span>
      </div>
      </div>
      <!-- Spinner End -->

      <!-- Navbar Start -->
      <div class="container-fluid nav-bar bg-transparent">
        <nav class="navbar navbar-expand-lg bg-primary navbar-light py-0 px-4">
          <a
            href="index.html"
            class="navbar-brand d-flex align-items-center text-center"
          >
            <div class="icon p-2 me-2">
              <img
                class="img-fluid"
                src="{{asset('Reservasi/img2/Font Dan Symbol/Untitled-2.png')}}"
                alt="Icon"
                style="width: 30px; height: 30px"
              />
            </div>
            <h1 class="m-0 text-danger">Foursen</h1>
          </a>
          <button
            type="button"
            class="navbar-toggler"
            data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto">
              <a href="/company" class="nav-item nav-link active">Dashboard</a>
             


               <div class="nav-item dropdown">
                <a
                  href="#"
                  class="nav-link dropdown-toggle"
                  data-bs-toggle="dropdown"
                  >Form</a
                >
                <div class="dropdown-menu rounded-0 m-0">
                  <a href="/partner" class="dropdown-item"
                    >Partner</a
                  >
                </div>
              </div>

              <div class="nav-item dropdown">
                <a
                  href="#"
                  class="nav-link dropdown-toggle"
                  data-bs-toggle="dropdown"
                  >Analisis</a
                >
                <div class="dropdown-menu rounded-0 m-0">
                  <a href="Company.data" class="dropdown-item"
                    >Data</a
                  >
                </div>
              </div>
              <a href="Company.pesan" class="nav-item nav-link">Pesan</a>
            </div>
            <a href="" class="btn btn-primary px-3 d-none d-lg-flex"
              >Setting</a
            >
          </div>
        </nav>
      </div>
      <!-- Navbar End -->

      <!-- Header Start -->
      <div class="container-fluid header bg-white p-0">
        <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
          <div class="col-md-6 p-5 mt-lg-5">
            <h1 class="display-5 animated fadeIn mb-4">
              Find A <span class="text-danger">Perfect Home</span> To Live With
              Your Family
            </h1>
            <p class="animated fadeIn mb-4 pb-2">
              Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no.
              Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.
            </p>
            <a href="" class="btn btn-primary py-3 px-5 me-3 animated fadeIn"
              >Get Started</a
            >
          </div>
          <div class="col-md-6 animated fadeIn">
            <div class="owl-carousel header-carousel">
              <div class="owl-carousel-item">
                <img class="img-fluid" src="{{asset('Reservasi/img/carousel-1.jpg')}}" alt="" />
              </div>
              <div class="owl-carousel-item">
                <img class="img-fluid" src="{{asset('Reservasi/img/carousel-2.jpg')}}" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Header End -->

      <!-- Search Start -->

      <div
        class="container-fluid bg-primary mb-5 wow fadeIn"
        data-wow-delay="0.1s"
        style="padding: 35px"
      >
        <div class="container">
          <div class="row g-2">
            <div class="col-md-10">
              <div class="row g-2">
                <div class="col-md-4">
                  <input
                    type="text"
                    class="form-control border-0 py-3"
                    placeholder="Search Keyword"
                  />
                </div>
                <div class="col-md-4">
                  <select class="form-select border-0 py-3">
                    <option selected>Property Type</option>
                    <option value="1">Property Type 1</option>
                    <option value="2">Property Type 2</option>
                    <option value="3">Property Type 3</option>
                  </select>
                </div>
                <div class="col-md-4">
                  <select class="form-select border-0 py-3">
                    <option selected>Location</option>
                    <option value="1">Location 1</option>
                    <option value="2">Location 2</option>
                    <option value="3">Location 3</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-md-2">
              <button class="btn btn-dark border-0 w-100 py-3">Search</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Search End -->

      <!-- CONTENT -->
      <main class="container">
        <center> <h1> Data Partner </h1> </center>
        <!-- START DATA -->
        <div class="my-3 p-3 bg-body rounded shadow-sm">
          <!-- FORM PENCARIAN -->

          <div class="pb-3">
            @if (Session::has('success'))
            <div class="pt-3">
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            </div>
            @endif
            <form class="d-flex" action="" method="get">
                <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
                <button class="btn btn-secondary" type="submit">Cari</button>
            </form>
          </div>

          <!-- TOMBOL TAMBAH DATA -->

          <div class="pb-3">
            <a href="{{ url('/partner') }}" class="btn btn-primary">Tambah Data</a>
          </div>

          <table class="table table-striped">
              <thead>
                  <tr>
                      <th class="col-md-1">No</th>
                      <th class="col-md-1">Nama Partner</th>
                      <th class="col-md-1">Batas Kontrak</th>
                      <th class="col-md-1">Alamat</th>
                      <th class="col-md-1">No.Telp</th>
                      <th class="col-md-1">Opsi</th>
                  </tr>
              </thead>
              <tbody>
                @php
                $id = 1;
                @endphp
                @foreach ($data as $item)
            <tr>
                <td>{{ $id++ }}</td> <!-- $id yang kita tambahkan setiap kali iterasi melalui loop foreach. Variabel ini digunakan untuk menampilkan ID yang berurutan dari 1 sampai akhir. -->
                <td>{{ $item->nampart }}</td>
                <td>{{ $item->bkontrak }}</td>
                <td>{{ $item->alamat }}</td>
                <td>{{ $item->notel }}</td>
                <td>
                <a href='' class="btn btn-warning btn-sm">Edit</a>
                <a href='' class="btn btn-danger btn-sm">Del</a>
                </td>
            </tr>
                @endforeach

              </tbody>
          </table>


           <!-- CONTENT -->
      <main class="container">
        <center> <h1> Data Client </h1> </center>
        <!-- START DATA -->
        <div class="my-3 p-3 bg-body rounded shadow-sm">
          <!-- FORM PENCARIAN -->

          <div class="pb-3">
            @if (Session::has('success'))
            <div class="pt-3">
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            </div>
            @endif
            <form class="d-flex" action="" method="get">
                <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
                <button class="btn btn-secondary" type="submit">Cari</button>
            </form>
          </div>
        <div>
          <table class="min-w-full bg-white">
              <thead>
                  <tr>
                      <th class="col-md-1">Foto Profil</th>
                      <th class="col-md-1">Nama</th>
                      <th class="col-md-1">Email</th>
                      <th class="col-md-1">Jenis Kelamin </th>
                      <th class="col-md-1">Tanggal Lahiir</th>
                      <th class="col-md-1">ALamat</th>
                      <th class="col-md-1">Telepon</th>
                  </tr>
              </thead>
              <tbody>
               
            @forelse ($profiles as $items)
            <tr>
                
                <td class="text-center"><img src="{{ asset('/storage/Reservasi/'.$items->image) }}" class="rounded" style="width: 150px"></td>
                <td>{{ $items->name }}</td>
                <td>{{ $items->email }}</td>
                <td>{{ $items->gender }}</td>
                <td>{{ $items->birth }}</td>
                <td>{{ $items->address }}</td>
                <td>{{ $items->phone }}</td>
            
            </tr>
            @empty
            <div class="alert alert-danger">
                tidak ada Data
            </div>
                @endforelse

              </div>

              </tbody>
          </table>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
        </main>
        <!-- AKHIR DATA -->
        <!-- END CONTENT -->


         <!-- CONTENT -->
         <main class="container">
          <center> <h1> History Reservasi Client </h1> </center>
          <!-- START DATA -->
          <div class="my-3 p-3 bg-body rounded shadow-sm">
            <!-- FORM PENCARIAN -->
  
            <div class="pb-3">
              @if (Session::has('success'))
              <div class="pt-3">
                  <div class="alert alert-success">
                      {{ Session::get('success') }}
                  </div>
              </div>
              @endif
              <form class="d-flex" action="" method="get">
                  <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
                  <button class="btn btn-secondary" type="submit">Cari</button>
              </form>
            </div>
          <div>
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th class="col-md-1">Destinasi</th>
                        <th class="col-md-1">Check-In</th>
                        <th class="col-md-1">Check-Out</th>
                        <th class="col-md-1">Status</th>
                       
                    </tr>
                </thead>
                <tbody>
                 
                  @foreach ($reservasis as $reservasi)
                  <tr>
                      <td>{{ $reservasi->destination }}</td>
                      <td>{{ $reservasi->check_in }}</td>
                      <td>{{ $reservasi->check_out }}</td>
                      <td>{{ $reservasi->status }}</td>
                
                  </tr>
              @endforeach
  
                </div>
  
                </tbody>
            </table>
          </div>

      <!-- Footer Start -->
      <div
        class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn"
        data-wow-delay="0.1s"
      >
        <div class="container py-5">
          <div class="row g-5">
            <div class="col-lg-3 col-md-6">
              <h5 class="text-white mb-4">Get In Touch</h5>
              <p class="mb-2">
                <i class="fa fa-map-marker-alt me-3"></i>Cut Nyak Dien Street,
                Slawi, Tegal
              </p>
              <p class="mb-2">
                <i class="fa fa-phone-alt me-3"></i>+62 8351 7268 9380
              </p>
              <p class="mb-2">
                <i class="fa fa-envelope me-3"></i>foursen@gmail.com
              </p>
              <div class="d-flex pt-2">
                <a class="btn btn-outline-light btn-social" href=""
                  ><i class="fab fa-twitter"></i
                ></a>
                <a class="btn btn-outline-light btn-social" href=""
                  ><i class="fab fa-facebook-f"></i
                ></a>
                <a class="btn btn-outline-light btn-social" href=""
                  ><i class="fab fa-youtube"></i
                ></a>
                <a class="btn btn-outline-light btn-social" href=""
                  ><i class="fab fa-linkedin-in"></i
                ></a>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <h5 class="text-white mb-4">Quick Links</h5>
              <a class="btn btn-link text-white-50" href="">About Us</a>
              <a class="btn btn-link text-white-50" href="">Contact Us</a>
              <a class="btn btn-link text-white-50" href="">Our Services</a>
              <a class="btn btn-link text-white-50" href="">Privacy Policy</a>
              <a class="btn btn-link text-white-50" href=""
                >Terms & Condition</a
              >
            </div>
            <div class="col-lg-3 col-md-6">
              <h5 class="text-white mb-4">Photo Gallery</h5>
              <div class="row g-2 pt-2">
                <div class="col-4">
                  <img
                    class="img-fluid rounded bg-light p-1"
                    src="img/property-1.jpg"
                    alt=""
                  />
                </div>
                <div class="col-4">
                  <img
                    class="img-fluid rounded bg-light p-1"
                    src="img/property-2.jpg"
                    alt=""
                  />
                </div>
                <div class="col-4">
                  <img
                    class="img-fluid rounded bg-light p-1"
                    src="img/property-3.jpg"
                    alt=""
                  />
                </div>
                <div class="col-4">
                  <img
                    class="img-fluid rounded bg-light p-1"
                    src="img/property-4.jpg"
                    alt=""
                  />
                </div>
                <div class="col-4">
                  <img
                    class="img-fluid rounded bg-light p-1"
                    src="img/property-5.jpg"
                    alt=""
                  />
                </div>
                <div class="col-4">
                  <img
                    class="img-fluid rounded bg-light p-1"
                    src="img/property-6.jpg"
                    alt=""
                  />
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <h5 class="text-white mb-4">Newsletter</h5>
              <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
              <div class="position-relative mx-auto" style="max-width: 400px">
                <a class="btn btn-primary py-3 px-5 mt-3" name="logout" href="logout">Logout</a>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="copyright">
            <div class="row">
              <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                &copy; <a class="border-bottom" href="#">Your Site Name</a>, All
                Right Reserved.

                <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                Designed By
                <a class="border-bottom" href="https://htmlcodex.com"
                  >HTML Codex</a
                >
              </div>
              <div class="col-md-6 text-center text-md-end">
                <div class="footer-menu">
                  <a href="">Home</a>
                  <a href="">Cookies</a>
                  <a href="">Help</a>
                  <a href="">FQAs</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer End -->

      <!-- Back to Top -->
      <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"
        ><i class="bi bi-arrow-up"></i
      ></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('Reservasi/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('Reservasi/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('Reservasi/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('Reservasi/lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('Reservasi/js/main.js')}}"></script>
  </body>
</html>

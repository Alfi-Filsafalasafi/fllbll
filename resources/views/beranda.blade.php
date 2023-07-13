<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>ONLINE SHOP</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
      <a class="navbar-brand" href="#">
      <img src="image/Bella.png" alt="" width="50" height="50" class="me-2">
      <strong>BELLA SHOP</strong>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
     <form class="d-flex ms-auto">
      <input class="form-control me-2" type="search" placeholder="Cari Produk Anda" aria-label="Cari">
      <button class="btn btn-light" type="submit">Cari</button>
    </form>
	 <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="singleproduct">Detail Produk</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="keranjang">Keranjang</a>
        </li>
		    <li class="nav-item">
          <a class="nav-link" href="contact">Contact</a>
        </li>
		    <li class="nav-item">
          <a class="nav-link" href="praktikum">Praktikum</a>
        </li>
        @if (Route::has('login'))
            @auth
              @if(Auth::user()->level == 1 )
              <a href="{{ url('/home') }}" class="nav-link">Halaman Admin</a>
              @else
              <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
              @endif
            @else
              <a href="{{ route('login') }}" class="nav-link">Log in</a>

            @if (Route::has('register'))
              <a href="{{ route('register') }}" class="ml-4 nav-link">Register</a>
            @endif
          @endauth
        @endif
      </ul>
    </div>
  </div>
</nav>

<!--home-->
<div class="container">
<div id="carouselExampleControls" class="carousel slide mt-5" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/img1.jpg" class="d-block" alt="...">
    </div>
    <div class="carousel-item">
      <img src="image/img2.jpg" class="d-block" alt="...">
    </div>
    <div class="carousel-item">
      <img src="image/img3.jpg" class="d-block" alt="...">
    </div>
    <div class="carousel-item">
      <img src="image/img4.jpg" class="d-block" alt="...">
    </div>
    <div class="carousel-item">
      <img src="image/img5.jpg" class="d-block" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
<!--home-->

<!--kategori-->
<div class="container mt-5">
  <div class="judul-kategori" style="background-color: #EAEAEA; padding: 5px 10px;">
    <h5 class="text-center" style="margin-top 5px">  KATEGORI</h5>
  </div>
  <div class="row text-center row-container mt-2">
    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
      <div class="menu-kategori">
        <a href="#"><img src="image/baju.png"  class="img-image mt-3"></a>
        <p class="mt-2"> Baju </p>
      </div>
    </div>

    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
      <div class="menu-kategori">
        <a href="#"><img src="image/celana.png"  class="img-image mt-3"></a>
        <p class="mt-2"> Celana </p>
      </div>
    </div>

    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
      <div class="menu-kategori">
        <a href="#"><img src="image/elektronik.png"  class="img-image mt-3"></a>
        <p class="mt-2"> Elektronik </p>
      </div>
    </div>

    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
      <div class="menu-kategori">
        <a href="#"><img src="image/fotografi.png"  class="img-image mt-3"></a>
        <p class="mt-2"> Fotografi </p>
      </div>
    </div>

    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
      <div class="menu-kategori">
        <a href="#"><img src="image/hp.png"  class="img-image mt-3"></a>
        <p class="mt-2"> Handphone </p>
      </div>
    </div>

    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
      <div class="menu-kategori">
        <a href="#"><img src="image/jamtangan.png"  class="img-image mt-3"></a>
        <p class="mt-2"> Jam Tangan </p>
      </div>
    </div>

    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
      <div class="menu-kategori">
        <a href="#"><img src="image/kecantikan.png"  class="img-image mt-3"></a>
        <p class="mt-2"> Kecantikan </p>
      </div>
    </div>

    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
      <div class="menu-kategori">
        <a href="#"><img src="image/kesehatan.png"  class="img-image mt-3"></a>
        <p class="mt-2"> Kesehatan </p>
      </div>
    </div>

    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
      <div class="menu-kategori">
        <a href="#"><img src="image/laptop.png"  class="img-image mt-3"></a>
        <p class="mt-2"> Laptop </p>
      </div>
    </div>

    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
      <div class="menu-kategori">
        <a href="#"><img src="image/otomotif.png"  class="img-image mt-3"></a>
        <p class="mt-2"> Otomotif </p>
      </div>
    </div>

    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
      <div class="menu-kategori">
        <a href="#"><img src="image/sepatu.png"  class="img-image mt-3"></a>
        <p class="mt-2"> Sepatu </p>
      </div>
    </div>

    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
      <div class="menu-kategori">
        <a href="#"><img src="image/tas.png"  class="img-image mt-3"></a>
        <p class="mt-2"> Tas </p>
      </div>
    </div>
  </div>
</div>
<!--kategori-->

<!--produk-->
  <div class="container mt-5">
    <div class="judul-kategori" style="background-color: #EAEAEA; padding: 5px 10px;">
      <h5 class="text-center" style="margin-top 5px"> PRODUK </h5>
      <div class="row text-center row-container mt-5">
      @forelse ($product as $data)
      <div class="col-lg-2 col-md-2 col-sm-4 col-6 my-1">
            <div class="card text-center">
              <img src="img/{{$data->gambar}}" class="card-img-top" alt="...">
              <div class="card-body">
                <h6 class="card-title">{{$data->nama}}</h6>
                <p class="card-text">Rp. {{$data->harga}}</p>
                <a href="#" class="btn btn-dark d-grid">Beli</a>
              </div>
          </div>
        </div>
      @empty
        <p>Tidak ada Produk</p>
      @endforelse
      </div>
    </div>
  </div>
<!--produk-->

<!--footer-->
<footer class="bg-light p-5 mt-5">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <a href="" class="text-decoration-none">
          <img src="image/Bella.png" alt="" width="50" height="50" class="me-2">
       </a>
       <span> @2022 Fila Bella</span>
      </div>

      <div class="col-md-6 text-end">
        <a href="" class="text-decoration-none">
          <img src="image/instagram.png" class="ms-2" style="width: 32px;">
       </a>
       <a href="" class="text-decoration-none">
          <img src="image/facebook.png" class="ms-2" style="width: 32px;">
       </a>
       <a href="" class="text-decoration-none">
          <img src="image/linkedin.png" class="ms-2" style="width: 32px;">
       </a>
       <a href="" class="text-decoration-none">
          <img src="image/twitter.png" class="ms-2" style="width: 32px;">
       </a>
      </div>
    </div>
  </div>
</footer>
<!--footer-->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
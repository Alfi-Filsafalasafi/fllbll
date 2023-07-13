<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="htt"
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>ONLINE SHOP</title>
    <link rel="stylesheet" type="text/css" href="css/styleproduct.css">
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
          <a class="nav-link " aria-current="page" href="/">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="singleproduct">Detail Produk</a>
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
      </ul>
    </div>
  </div>
</nav>

<!--Breadcrumb-->
<div class="container">
<nav aria-label="breadcrumb" style="background-color: #EAEAEA" class="mt-3">
  <ol class="breadcrumb p-3">
    <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Beranda</a></li>
    <li class="breadcrumb-item"><a href="#"  class="text-decoration-none">Kategori</a></li>
    <li class="breadcrumb-item active" aria-current="page">Produk</li>
  </ol>
</nav>
</div>
<!--Breadcrumb-->

<!--Singleproduct-->

<div class="container">
    <div class="row-product">
        <div class="col-lg-7">
            <figure class="figure">
                <img src="image/produk3.jpg" class="figure-img img-fluid" style="border-radius: 5px; width: 450px;">
                <figcaption class="figure-caption d-flex justify-content-evenly">
                    <a href="#">
                        <img src="image/produk3.jpg" class="figure-img img-fluid" style="border-radius: 5px; width: 70px;">
                    </a>

                    <a href="#">
                        <img src="image/produk3.jpg" class="figure-img img-fluid" style="border-radius: 5px; width: 70px;">
                    </a>

                    <a href="#">
                        <img src="image/produk3.jpg" class="figure-img img-fluid" style="border-radius: 5px; width: 70px;">
                    </a>

                    <a href="#">
                        <img src="image/produk3.jpg" class="figure-img img-fluid" style="border-radius: 5px; width: 70px;">
                    </a>

                    <a href="#">
                        <img src="image/produk3.jpg" class="figure-img img-fluid" style="border-radius: 5px; width: 70px;">
                    </a>
                </figcaption>
            </figure>
        </div>

        <div class="container">
        <div class="row-product">
        <div class="col-lg-7">
        <h4>Nike Air Jordan Black and Red</h4>
            <h3 class="text-muted">Rp. 2.700.000</h3>

            <div class="small mb-1"></div>
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                jumlah
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">1</a></li>
                <li><a class="dropdown-item" href="#">2</a></li>
                <li><a class="dropdown-item" href="#">3</a></li>
                <li><a class="dropdown-item" href="#">4</a></li>
                <li><a class="dropdown-item" href="#">5</a></li>
              </ul>
            </div>
                                                <p class="mb-0 small"></p>
                                </div>
            </div> 
            <span class="mx-2">Tersisa 25 pasang</span>

            <div class="btn-produk mt-3">
              <a href="#" class="btn btn-dark btn-lg" style="font-size: 14px"> Masukkan Keranjang</a>
              <a href="#" class="btn btn-warning btn-lg" style="font-size: 14px"> Beli Sekarang</a>
            </div>
          </div>
        </div>
    </div>
  </div>

<!--review-->
<div class="container">
    <div class="row row-product">
      <div class="col-12">
                  <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="Deskripsi-tab" data-bs-toggle="tab" data-bs-target="#Deskripsi" type="button" role="tab" aria-controls="Deskripsi" aria-selected="true">Deskripsi</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="Review-tab" data-bs-toggle="tab" data-bs-target="#Review" type="button" role="tab" aria-controls="Review" aria-selected="false">Review Produk</button>
              </li>
            </ul>
            <div class="tab-content p-3" id="myTabContent">
              <div class="tab-pane fade show active Deskripsi" id="Deskripsi" role="tabpanel" aria-labelledby="Deskripsi-tab">
                <p>
                  Nike Air Jordan Black & Red</br>
                  Spesifikasi : </br>
                    Style : Basketball Shoes</br>
                    Material : Premium Leather</br>
                    Desain : Trendy</br>
                    Color : Black and Red</br>
                    Note : Neat stitching, eyelets, dan outsole yang nyaman</br>
                    Cocok digunakan berolahraga setiap hari</br>
                </p>
              </div>
              <div class="tab-pane fade Review" id="Review" role="tabpanel" aria-labelledby="Review-tab">
                <div class="row">
                  <div class="col-1">
                  <img src="image/p5.jpg" alt="" width="50" height="50" class="reviw-img rounded-circle">
                  </div>
                  <div class="col">
                    <h5 class="review-name">Nandaya</h5>
                    <p class="review-des"> Produk Original, packing rapi, dan pengiriman cepat</p>
                  </div>
                </div>

                <div class="row">
                  <div class="col-1">
                  <img src="image/p3.jpg" alt="" width="50" height="50" class="reviw-img rounded-circle">
                  </div>
                  <div class="col">
                    <h5 class="review-name">Nurcahaya</h5>
                    <p class="review-des"> Produk Original, packing rapi, dan aku suka sekaliii</p>
                  </div>
                </div>

                <div class="row">
                  <div class="col-1">
                  <img src="image/p2.jpg" alt="" width="50" height="50" class="reviw-img rounded-circle">
                  </div>
                  <div class="col">
                    <h5 class="review-name">Febrifeb</h5>
                    <p class="review-des"> Produk Original, packing rapi, pengiriman cepat sekali, dan semoga awet</p>
                  </div>
                </div>

                <div class="row">
                  <div class="col-1">
                  <img src="image/p1.jpg" alt="" width="50" height="50" class="reviw-img rounded-circle">
                  </div>
                  <div class="col">
                    <h5 class="review-name">Rizkyabi</h5>
                    <p class="review-des"> Produk Original, packing rapi, dan nyaman di pakai</p>
                  </div>
                </div>

                <div class="row">
                  <div class="col-1">
                  <img src="image/p4.jpg" alt="" width="50" height="50" class="reviw-img rounded-circle">
                  </div>
                  <div class="col">
                    <h5 class="review-name">Ahmadyono</h5>
                    <p class="review-des"> Produk Original, packing rapi, dan ukuranya pas sekali</p>
                  </div>
                </div>
              </div>
            </div>
      </div>
</div>
<!--review-->
<!--Singleproduct-->

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
  
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
  </body>
</html>
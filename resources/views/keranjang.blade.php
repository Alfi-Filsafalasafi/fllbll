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
    <link rel="stylesheet" type="text/css" href="css/Keranjang.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">  
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
      </ul>
    </div>
  </div>
</nav>

<!--Breadcrumb-->
<div class="container">
<nav aria-label="breadcrumb" style="background-color: #EAEAEA" class="mt-3">
  <ol class="breadcrumb p-3">
    <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Beranda</a></li>
    <li class="breadcrumb-item active" aria-current="page">Keranjang</li>
  </ol>
</nav>
</div>
<!--Breadcrumb-->


<!--Keranjang-->
<div class="container">
    <div class="row row-product">
        <div class="col">
        <div class="table-responsive">
        <table class="table">
            <thead class="table-primary">
                <tr>
                <th scope="col">Hapus</th>
                <th scope="col">Produk</th>
                <th scope="col">Gambar</th>
                <th scope="col">Harga</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Sub Total</th>
                </tr>
            </thead>
            <tbody class="align-middle">
                <tr>
                <th scope="row"><a href=""><i class="fa-solid fa-trash-can"></a></i></th>
                <td>Nike Air Jordan</td>
                <td><img src="image/produk3.jpg" class="img-keranjang"></td>
                <td>Rp. 2.700.000</td>
                <td>
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
                <td>Rp. 2.700.000</td>
                </tr>

                <tr>
                <th scope="row"><a href=""><i class="fa-solid fa-trash-can"></a></i></th>
                <td>Keyboard</td>
                <td><img src="image/produk9.jpg" class="img-keranjang"></td>
                <td>Rp. 150.000</td>
                <td>
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
                <td>Rp. 150.000</td>
                </tr>

                <tr>
                <th scope="row"><a href=""><i class="fa-solid fa-trash-can"></a></i></th>
                <td>Jam Tangan</td>
                <td><img src="image/produk4.jpg" class="img-keranjang"></td>
                <td>Rp. 160.000</td>
                <td>
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
                <td>Rp. 160.000</td>
                </tr>
            </tbody>
            </table>
        </div>
        <div>
            <div class="row">
                <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col" colspan="2">Total Keranjang Belanja</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td class="fw-bold">Total Harga</td>
                        <td>Rp. 3.050.000</td>
                        </tr>
                        <tr>
                            <td><button class="button btn-dark btn-lg btn-sm" >Checkout</button></td>
                        </tr>
                    </tbody>
                    </table>
        </div>
        </div>
    </div>
</div>
<!--Keranjang-->


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
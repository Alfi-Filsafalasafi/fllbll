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
    <link rel="stylesheet" type="text/css" href="font-awesome/css/stylehome.css">  
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
          <a class="nav-link active" aria-current="page" href="Beranda.php">Beranda</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="singleproduct.php">Detail Produk</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Keranjang.php">Keranjang</a>
        </li>
		 <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="praktikum.php">Praktikum</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!--Praktikum-->
<div class="container mt-5">
    <div class="row">
        <div class="col">
        <ul>
        <body>
         <?php
         $bobotxz=array(-0.5,-0.4,-0.3,-0.2,-0.1, 0, 0.1, 0.2, 0.3, 0.4, 0.5);

         $hidden=5;
         $jumlah_x=5;
         echo "<table border=1>";
         for ($j=1; $j<=$jumlah_x; $j++) {
            echo "<tr>";
            for ($i=1; $i<=$hidden; $i++) {      
               echo "<td>";
               //echo "&nbsp".$bobotxz[array_rand($bobotxz)]."&nbsp";
               echo "$j.$i";
               echo "</td>";      	
            }
            echo "</tr>";
         }
         echo "</table>";
         ?>
        </ul> 
        </div>
    </div>
</div>
<!--Praktikum-->

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

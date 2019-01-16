<?php 
  include ('javaScript.php');
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Shin Shop">
  <meta name="description" content="OnlineShop">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <title>CSS Website Layout</title>
  <title></title>

  <style type="text/css">
  .color{
    color: black;
  }
    .header {
      background-color: #808080;
      text-align: center;
      padding: 50px;
    }
    .keren{
      font-style: oblique;
      color: #8B008B;
      text-shadow: 3px 3px #FA8072;
      font-weight: bold;
    }
    .body{
      /*background-image: url(assets/img/4.jpeg);*/
      background-color: #FFF8DC;
      background-size:cover;
      background-repeat:repeat;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }
    .dropdown-child {
        display: none;
        background-color: #E9967A;
        min-width: 150px;
        position: absolute;
    }
    .dropdown-child a {
        color: #006400;
        padding: 5px;
        padding-left: 10px;
        text-decoration: none;
        display: block;
    }
    .dropdown:hover .dropdown-child {
        display: block;
    }
  </style>
</head>
<body class="body" >

<!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-#DC143C bg-transparan">
  <div class="container" alt="Responsive">
       
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
             <li class="nav-item dropdown">
              
                <a class="nav-link dropdown" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Clothing</a>
                  <div class="dropdown-child">
                    <a href="coba.php">Atasan Woman</a>
                    <a href="alamatnya">Bawahan Woman</a>
                    <a href="alamatnya">Cardigan</a>
                  </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">shoes</a>
                  <div class="dropdown-child">
                    <a href="coba.php">Flats</a>
                    <a href="alamatnya">Heels</a>
                    <a href="alamatnya">Sneakers</a>
                  </div>
            </li>
            
            <li class="nav-item dropdown">
                <a class="nav-link dropdown" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                bag</a>
                <div class="dropdown-child">
                  <a  href="coba.php">Big Bags</a>
                  <a  href="#">Wallets</a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Accesories</a>
                <div class="dropdown-child">
                  <a  href="coba.php">Hats</a>
                  <a  href="#">Watches</a>
                </div>
            </li>

            <li class="nav">
              <a class="nav-link" href="login.php"><b>Login</b></a>
            </li>

            <li class="nav">
              <a class="nav-link" href="daftar.php"><b>Daftar</b></a>
            </li>

          </ul>


        </div>
  </div>
</nav>    


<!-- content -->
<!-- Slide -->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="assets/img/3.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="assets/img/4.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="assets/img/2.jpg" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
</div>
    <h1 class="my-4"><b>Atasan Woman</b></h1><br>

<div class="container">
<!--   <div id="main">
  </div> -->
    <div class="row">
        <div class="products">

          <ul>
            <li> <a href="#"><img src="assets/content/clothing/atasan/1.jpg" alt="" /></a>
              <div class="product-info">
                <h3>Discount 30%</h3>
                <div class="product-desc">
                  <h4>WOMEN’S</h4>
                  <p>Lyla Long Sleeve<br />Button Down White</p>
                  <strong class="price">IDR229.000</strong>
                </div>
              </div>
            </li>

            <li> <a href="#"><img src="assets/content/clothing/atasan/1.jpg" alt="" /></a>
              <div class="product-info">
                <h3>Discount 30%</h3>
                <div class="product-desc">
                  <h4>WOMEN’S</h4>
                  <p>Lyla Long Sleeve<br />Button Down White</p>
                  <strong class="price">IDR229.000</strong>
                </div>
              </div>
            </li>

            <li> <a href="#"><img src="assets/content/clothing/atasan/1.jpg" alt="" /></a>
              <div class="product-info">
                <h3>Discount 30%</h3>
                <div class="product-desc">
                  <h4>WOMEN’S</h4>
                  <p>Lyla Long Sleeve<br />Button Down White</p>
                  <strong class="price">IDR229.000</strong>
                </div>
              </div>
            </li>

            <li> <a href="#"><img src="assets/content/clothing/atasan/1.jpg" alt="" /></a>
              <div class="product-info">
                <h3>Discount 30%</h3>
                <div class="product-desc">
                  <h4>WOMEN’S</h4>
                  <p>Lyla Long Sleeve<br />Button Down White</p>
                  <strong class="price">IDR229.000</strong>
                </div>
              </div>
            </li>

          </ul>

        </div>

        <div class="products">

          <ul>
            <li> <a href="#"><img src="assets/content/clothing/atasan/1.jpg" alt="" /></a>
              <div class="product-info">
                <h3>Discount 30%</h3>
                <div class="product-desc">
                  <h4>WOMEN’S</h4>
                  <p>Lyla Long Sleeve<br />Button Down White</p>
                  <strong class="price">IDR229.000</strong>
                </div>
              </div>
            </li>

            <li> <a href="#"><img src="assets/content/clothing/atasan/1.jpg" alt="" /></a>
              <div class="product-info">
                <h3>Discount 30%</h3>
                <div class="product-desc">
                  <h4>WOMEN’S</h4>
                  <p>Lyla Long Sleeve<br />Button Down White</p>
                  <strong class="price">IDR229.000</strong>
                </div>
              </div>
            </li>

            <li> <a href="#"><img src="assets/content/clothing/atasan/1.jpg" alt="" /></a>
              <div class="product-info">
                <h3>Discount 30%</h3>
                <div class="product-desc">
                  <h4>WOMEN’S</h4>
                  <p>Lyla Long Sleeve<br />Button Down White</p>
                  <strong class="price">IDR229.000</strong>
                </div>
              </div>
            </li>

            <li> <a href="#"><img src="assets/content/clothing/atasan/1.jpg" alt="" /></a>
              <div class="product-info">
                <h3>Discount 30%</h3>
                <div class="product-desc">
                  <h4>WOMEN’S</h4>
                  <p>Lyla Long Sleeve<br />Button Down White</p>
                  <strong class="price">IDR229.000</strong>
                </div>
              </div>
            </li>

          </ul>

        </div>

        <div class="products">

          <ul>
            <li> <a href="#"><img src="assets/content/clothing/atasan/1.jpg" alt="" /></a>
              <div class="product-info">
                <h3>Discount 30%</h3>
                <div class="product-desc">
                  <h4>WOMEN’S</h4>
                  <p>Lyla Long Sleeve<br />Button Down White</p>
                  <strong class="price">IDR229.000</strong>
                </div>
              </div>
            </li>

            <li> <a href="#"><img src="assets/content/clothing/atasan/1.jpg" alt="" /></a>
              <div class="product-info">
                <h3>Discount 30%</h3>
                <div class="product-desc">
                  <h4>WOMEN’S</h4>
                  <p>Lyla Long Sleeve<br />Button Down White</p>
                  <strong class="price">IDR229.000</strong>
                </div>
              </div>
            </li>

            <li> <a href="#"><img src="assets/content/clothing/atasan/1.jpg" alt="" /></a>
              <div class="product-info">
                <h3>Discount 30%</h3>
                <div class="product-desc">
                  <h4>WOMEN’S</h4>
                  <p>Lyla Long Sleeve<br />Button Down White</p>
                  <strong class="price">IDR229.000</strong>
                </div>
              </div>
            </li>

            <li> <a href="#"><img src="assets/content/clothing/atasan/1.jpg" alt="" /></a>
              <div class="product-info">
                <h3>Discount 30%</h3>
                <div class="product-desc">
                  <h4>WOMEN’S</h4>
                  <p>Lyla Long Sleeve<br />Button Down White</p>
                  <strong class="price">IDR229.000</strong>
                </div>
              </div>
            </li>

          </ul>

        </div>

    </div>

    <!-- footer link -->
    <h1 class="my-4"><b>Subscribe Newsletter</b></h1>
      <h1 class="footer-link2"><b>Stay update for new collection & special offer</b></h1><br>

      <div class="row">
        <div class="col-lg-4 mb-4">
            <div class="footer-link">
              <a ><h6>INFORMASI</h6></a>
              <a href="info.php" class="color">Tentang Kami</a><br>
              <a href="#" class="color">Syarat Penggunaan</a><br>
              <a href="#" class="color">Ketentuan Privasi</a><br>
              <a href="#" class="color">Kontak Kami</a><br>
            </div>
            
        </div>
        <div class="col-lg-4 mb-4">
            <div class="footer-link">
              <a ><h6>BANTUAN</h6></a>
              <a href="#" class="color">Bayar Ditempat</a><br>
              <a href="#" class="color">Cara Pemesanan</a><br>
              <a href="#" class="color">Ketentuan Pengambilan</a><br>
              <a href="#" class="color">Ketentuan Pengiriman</a><br>
            </div>
        </div>
      </div>


</div>

    <!-- Footer -->
    <footer class="py-2 bg-dark">
        <p class="m-0 text-center text-white font-italic">Copyright &copy; 2018 ShinShop.Com </p>
      </div>
    </footer>

    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery-1.4.1.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery-func.js"></script>
    <script type="text/javascript" src="assets/js/jquery.jcarousel.pack.js"></script>

</body>
</html>
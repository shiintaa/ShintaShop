<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	<meta name="author" content="Shin Shop">
  	<meta name="description" content="OnlineShop">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<title>CSS Website Layout</title>
	<title></title>

	<style type="text/css">
  .color{
    color: black;
  }
	.huruf{
		font: italic small-caps 14px/2 cursive;
		font-family: system-ui;
    text-align: center;
	}
	.login{
		align-content: center;
    text-align: center;
	}
	.h2 {
   		letter-spacing: 3px;
   		text-shadow: 3px 2px #DB7093 ;
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
      background-image: url(assets/img/2.png);
      /*background-color: #FFF8DC;*/
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

<!-- navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-#E9967A bg-transparan fixed-top">
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
</nav><br><br><br><br><br><br>		


<!-- content -->
<div class="container">

	<td><h2 class="login"><b>TENTANG SHINSHOP</b></h2></td><br>

	<td><h2 class="huruf">ShinShip.com adalah situs belanja online fesyen dan kecantikan ternama di Indonesia. Berrybenka menjual lebih dari 1000 merek lokal dan internasional, termasuk produk in-house label.ShinShop menawarkan kombinasi produk fesyen dan kecantikan terkini untuk setiap gaya personal yang beragam.</h2></td>
	<td><h2 class="huruf">Kami menyediakan produk berkualitas terbaik untuk wanita dan pria, bervariasi dari pakaian, aksesori, sepatu, tas, produk olahraga dan kecantikan. Komitmen kami adalah memberikan pengalaman belanja online yang menyenangkan, mudah, dan terpercaya untuk memuaskan pelanggan dengan koleksi baru dan penawaran spesial setiap harinya, serta beragam keuntungan seperti kemudahan pengembalian produk hingga 14 hari setelah barang diterima, layanan bayar di tempat dan pengiriman gratis.</h2></td>
  <br><br><br><br><br><br><br>

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
    </footer>

    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.min.js"></script>
</body>
</html>
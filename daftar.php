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
	.huruf{
		font-size: 12px;
		font: italic small-caps 16px/2 cursive;
		font-family: system-ui;
	}
	.login{
		align-content: center;
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
      background-image: url(assets/img/E.jpg);
     /* background-color: #FFF8DC;*/
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
<nav class="navbar fixed-top navbar-expand-lg navbar-#DC143C bg-transparan fixed-top">
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
</nav><br><br><br>		


<!-- content -->
<div class="container">
	
	<td><h2>CREATE ACCOUNT</h2></td><br>
	
	<div>
		<form method="POST" action="aksi/proses_daftar.php">
			<div class="form-group">
				<label for="nama">Nama</label>
				<input type="text" class="form-control" name="nama" placeholder="Masukkan Nama">
			</div>
			<div class="form-group">
				<label for="username">Username</label>
				<input type="text" class="form-control" name="username" placeholder="Masukkan Username">
			</div>

	
	        <div class="form-group">
	            <label for="password">Password</label>
	            <input type="password" class="form-control" name="password" placeholder="Masukkan Password" >
	        </div>
	        <div class="form-group">
	            <label for="email">Email</label>
	            <input type="email" class="form-control" name="email"  placeholder="Masukkan Email" >
	        </div>
	        <div class="form-group">
	            <label for="jenis_kelamin">Jenis Kelamin</label>
	            <div class="jenis">
	              	<input type="radio" name="jenis_kelamin" value="laki-laki" >Laki-Laki
	            </div> 
	            <div class="jenis">
	              	<input type="radio" name="jenis_kelamin" value="perempuan"  >Perempuan 
	            </div>
              		            
            </div>
             <button  class="btn btn-primary" type="submit" value="daftar" name="daftar" >Daftar</button>
	
	</form>
    </div>

</div><br>

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
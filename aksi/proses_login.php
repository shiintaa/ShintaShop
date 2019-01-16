<?php
 include ('../koneksi.php');
 session_start();
 $username = $_POST['username'];
 $password = $_POST['password'];
 //buat login
 $perintah = "SELECT username, password FROM data_user WHERE $username AND $password";
 $hasil    = mysqli_query($con,$perintah);
 $row      = mysqli_fetch_array($hasil);
 if ($row['username'] == $username AND $row['password'] == $password) {
  $_SESSION['username'] = $row['username'];
  $_SESSION['password']= $row['password'];

  echo "<script>document.location.href='../index.php'</script>";
 }else{
   header('Location: ../login.php?status=gagal');
 }
?>

<?php 
	include ('../koneksi.php');

	if(isset($_POST['daftar'])){
		$nama			= $_POST['nama'];
		$username		= $_POST['username'];
		$password		= $_POST['password'];
		$email			= $_POST['email'];
		$jenis_kelamin	= $_POST['jenis_kelamin'];

		$query 	= "INSERT INTO data_user  VALUES ('$nama', '$username', '$password', '$email', '$jenis_kelamin')";
		$result = mysqli_query($con, $query);
	
		if( $result){
			/*echo "berhsil <a href='../index.php'>back</a>";*/
			header('Location: ../index.php?status=berhasil');
		}else{
			/*echo "gagal <a href='../daftar.php'>daftar</a>";*/
			header('Location: ../daftar.php?status=gagal');
		}
	}
 ?>
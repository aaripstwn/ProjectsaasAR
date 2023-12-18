<?php

//untuk memvalidasi inputan pada web dengan field yang ada pada tabel database  


session_start();
include "konek.php";
//menerima responn dari inputan
$user =$_POST['usernameDiWeb'];

$pass =$_POST['passwordDiWeb'];
// echo "ini adalah username ".$user. " dan ini adalah password ".$pass;

//kondisi user kosong
if (empty($user)) { 
	$_SESSION['info'] = 'Username dan password kosong wajib di isi';
	header("location: ../login.php");
	exit(); //mengakhiri sesi
} else {
	if (empty($pass)) { //kondisi pass kosong
		$_SESSION['info'] = 'Username dan password kosong wajib di isi';
	header("location: ../login.php");
	exit();
	} else {
			//menampung table dalam databases

		$sql = "SELECT * FROM tb_akun WHERE username LIKE '$user' AND password LIKE '$pass'";

		//mengkoneksikan database dengan apa yang dipanggil
		$cek = mysqli_query($kon,$sql);
		//memanggil data pada baris
		$row = mysqli_fetch_assoc($cek);
		//ID_AKUN/ NAMA_AKUN / EMAIL / USERNAME /PASSWRD/ FOTO/ HAK AKSES


		if ($row['username'] === $user && $row['password'] === $pass) {
			$_SESSION['login'] = true;

			
		
		}else{
			$_SESSION['info'] = 'username atau password salah';
			header("location:../login.php");
		}

		if (isset($_SESSION['login'])) {
			header("location: ../index.php");
		} else {
			header("location: ../login.php");
			exit();
		}

	}


}



	



 ?>
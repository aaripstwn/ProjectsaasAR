<?php 
// yang didalam kurung(server,username,password,nama_databases)

//mengkoneksikan 

$server = "localhost";

$username = "root";

$pass = "";

$namadb = "db_aripmobil";


$kon = mysqli_connect($server,$username,$pass,$namadb);

// if($kon){
// 	echo "koneksi berhasil";


// }else{
// 	echo "koneksi gagal";
// }

 ?>   
<?php
  session_start();

  if (isset($_SESSION['login'])) { 
  
  

?>
<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
  <div id="liveAlertPlaceholder"></div>

  <form action="vendor/system.php" method="post" class="container rounded mt-3 p-2" style="width: 400px; border: solid black 2px; color:#A7727D;">
  <input type="hidden" name="form" value="form1">
  <h3 class="text-center">Input Data</h3>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="namadiweb">
  </div>
  <div class="mb-3" >
    <label for="exampleInputPassword1" class="form-label">Kelas</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="kelasdiweb">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Jurusan</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="jurusandiweb">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Alamat</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="alamatdiweb">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Jenis Kelamin</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="jkdiweb">
  </div>
  <!-- <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label"></label>
    <input type="text" class="form-control" id="exampleInputPassword1">
  </div> -->
  <!-- Button trigger modal -->

<button type="submit" class="btn btn-outline-secondary" id="liveAlertBtn">simpan</button>
</form>


	<!-- form end -->

  <?php include "vendor/konek.php";  ?>


  <h4 class="text-center m-3">Tabel Siswa</h4>

 	<div class="container">
 		
 		<table class="table table-bordered table-info text-center">
				<tr class="table table-dark">       
 				<td>NO</td>
 				<td>NAMA</td>
 				<td>KELAS</td>
				<td>JURUSAN</td>
 				<td>ALAMAT</td>
 				<td>JK</td>
        <td>ACTION</td>
 			</tr>

			<?php 
				$sql = "SELECT * FROM tb_siswa";
				$ambil = mysqli_query($kon,$sql);
        $nu = 0;

				foreach ($ambil as $key) {
          $nu++;
					$id = $key['NO'];
					$nama = $key['NAMA'];
					$kategori = $key['KELAS'];
					$stok = $key['JURUSAN'];
					$harga = $key['ALAMAT'];
					$tanggal = $key['JK'];
  			?>
 			

			<tr>
				<td><?= $nu; ?></td>
				<td><?= $nama; ?></td>
				<td><?= $kategori; ?></td>
				<td><?= $stok; ?></td>
				<td><?= $harga; ?></td>
				<td><?= $tanggal; ?></td>
        <td><button type="submit" class="btn btn-outline-success" ><a href="edit.php?id=<?=$id?>" style="text-decoration: none; color: black;">edit</button></a>
        <button type="submit" class="btn btn-outline-success" ><a href="vendor/delete.php?del=<?=$id?>" style="text-decoration: none; color: black;">delete</button></a>
      </td>
			</tr> 

			<?php  } ?>
 		</table>
 	</div> 

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
      
      <!-- <script>
        const alertPlaceholder = document.getElementById('liveAlertPlaceholder')

const alert = (message, type) => {
  const wrapper = document.createElement('div')
  wrapper.innerHTML = [
    `<div class="alert alert-${type} alert-dismissible" role="alert">`,
    `   <div>${message}</div>`,
    '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
    '</div>'
  ].join('')

  alertPlaceholder.append(wrapper)
}

const alertTrigger = document.getElementById('liveAlertBtn')
if (alertTrigger) {
  alertTrigger.addEventListener('click', () => {
    alert('Nice, you triggered this alert message!', 'success')
  })
}
      </script> -->
</body>
</html> 

<?php
} else {
  header("location: login.php");
  exit();
}

?>
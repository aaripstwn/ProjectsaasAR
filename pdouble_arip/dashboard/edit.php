<?php
 include('vendor/konek.php');
  session_start();
  if (isset($_SESSION['login'])) { 
  
  


 ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>


    <?php 

    $data_siswa = mysqli_query($kon,"SELECT * FROM tb_siswa where NO =".$_GET['id']);
    foreach ($data_siswa as $key) {
      $id = $key['NO'];
      $nama = $key['NAMA'];
      $kls = $key['KELAS'];
      $jrs = $key['JURUSAN'];
      $alt = $key['ALAMAT'];
      $jk = $key['JK'];
    }
    ?>
    
    <h1>
      <?= $nama; ?>
      <!-- <?= $kls; ?>
      <?= $jrs; ?>
      <?= $alt; ?>
      <?= $jk; ?> -->
    </h1>


  <section class=" gradient-custom float-start" style=" width: 750px; height: 400px;">  <!-- bacground -->
  <div class="container py-3 ">
    <div class="row d-flex justify-content-center align-items-center " style="  width: 1000px; height: 400px;">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card  text-white " style="border-radius: 1rem; background-color:salmon;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-2 mt-md-4 pb-5m mx-auto">


            <h4 class="text-center">ISIKAN DATA SISWA DIBAWAH INI</h4>

                        <!-- from -->
              <form action="vendor/system.php?id=<?=$id;?>" method="post">
              <input type="hidden" name="form" value="form2">
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">NAMA</label>
                    <input type="text" value="<?= $nama; ?>" name="Enamadiweb" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">KELAS</label>
                    <input type="text" value="<?= $kls; ?>" name="Ekelasdiweb" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">JURUSAN</label>
                    <input type="text" value="<?= $jrs; ?>" name="Ejurusandiweb" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">ALAMAT</label>
                    <input type="text" value="<?= $alt; ?>" name="Ealamatdiweb" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">JENIS KELAMIN</label>
                    <input type="text" value="<?= $jk; ?>" name="Ejkdiweb" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                  </div>
                  <!-- <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                  </div> -->
                  <!-- <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div> -->
                  <div id="liveAlertPlaceholder"></div>
                  <!-- <button type="button" class="btn btn-primary" id="liveAlertBtn">Show live alert</button> -->
                  <button type="submit" class="btn btn-secondary">edit</button>
              </form>

    <!-- endfrom -->

          </div>
        </div>
      </div>
    </div>
  </div>
</section>



    <h1></h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>

<?php
} else {
  header("location: login.php");
  exit();
}

?>
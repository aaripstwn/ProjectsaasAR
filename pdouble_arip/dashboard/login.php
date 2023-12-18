<?php
  session_start();

  if (!isset($_SESSION['login'])) { //jika sessionnya bukan login
  
  

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="login.css">
  </head>
  <body>


  <section class="vh-100 gradient-custom" style=" ">  <!-- bacground -->
  <div class="container py-1 h-150  ">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card  text-white" style="border-radius: 1rem; background-color:grey;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5m mx-auto">

              <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
              <p class="text-white-50 mb-5">Please enter your login and password!</p>

              <!-- action akan mengarahkan data yang dikirim dari metod post ke halaman yang ditujuh -->

             <form  action="vendor/validasi.php" method="post">
              <div class="form-outline form-white mb-1">
                <label class="form-label" for="typeEmailX" >username</label>
                <input type="text" name="usernameDiWeb" id="typeEmailX" class="form-control form-control-lg"  />
                
              </div>

              <div class="form-outline form-white mb-1">  
                <label class="form-label" for="typePasswordX" >Password</label>
                <input type="password" name="passwordDiWeb" id="typePasswordX" class="form-control form-control-lg" />
                
              </div>

              <p class="small mb-1 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>

              <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>

             
            </div>

            <div>
              <p class="mb-0">Don't have an account? <a href="#!" class="text-white-50 fw-bold">Sign Up</a>
              </p>
            </div>

              <?php

              @session_start();
              if (isset($_SESSION["info"])) {
                
            
              ?>

              <div class="alert alert-warning alert-dismissible fade show" role="alert"> 

                  <?php echo $_SESSION['info'];
                  
                  ?>

              </div>

              <?php
              unset($_SESSION["info"]);
               }
              
              
              ?>

            </form>


          </div>
        </div>
      </div>
    </div>
  </div>
</section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>

<?php
} else {
  header("location: index.php");
  exit();
}

?>
<?php
require 'Pradika_function.php';

if (isset($_POST["daftar"])){
    
    if(registrasi($_POST)>0){
        echo "<script>
                alert('akun berhasil di daftarkan!'); 
            </script>";
    }else
    echo mysqli_error($conn);
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <title>Register</title>
  </head>
  <body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container mt-2 mb-2">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" aria-current="page" href="Pradika_FirstHome.php">Home</a>
                        </li>
                    </ul>
                    <div 
                    class="collapse navbar-collapse" 
                    id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item active">
                            <a href="Pradika_login.php" class="nav-link">
                                Login
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a href="Pradika_Register.php" class="nav-link active">
                                Register
                            </a>
                        </li>
                    </ul>
                    </div>
                </div>
            </div>
        </nav>
    <!-- End Navbar -->
    <!-- Card Login -->
    <section class="vh-100" style="background-color: #0000;">
  <div class="container py-0 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem; background-color: #eee">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="https://mediapool.bmwgroup.com/cache/P9/201712/P90289855/P90289855-the-world-s-first-bmw-m-and-bmw-m-performance-showroom-in-singapore-12-2017-2249px.jpg"
              alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;" />
            </div>
            <div class="col-md-5 col-lg-7 d-flex align-items-center">
              <div class="card-body p-lg-5 text-black">
            
                         <div class="card-body">
                <h2 class="fw-bold pb-2 text-uppercase">Register</h2>
            </div>
            <form method="POST" action="">
                                <label for="email"> <b>Email</b></label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="Masukan Alamat E-mail" required>
                                <br>
                                <label for="nama"> <b>Nama</b></label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Lengkap" required>
                                <br>
                                <label for="no_hp"> <b>Nomor Handphone</b></label>
                                <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Masukkan Nomor Handphone" required>
                                <br>
                                <label for="password"> <b>Kata Sandi</b></label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Kata Sandi Anda" required>
                                <br>
                                <label for="password2"> <b>Komfirmasi Kata Sandi</b></label>
                                <input type="password" class="form-control" id="password2" name="password2" placeholder="Konfirmasi Kata Sandi Anda" required>
                                <br>
                                <br>
                                <center><button type="submit" name="daftar" class="btn btn-primary" style="width: 140px;">Daftar</button></center>
                                <br>
                                <p class="text-center">Anda sudah punya akun? <a href="Pradika_login.php">Login</a></p>
                            </form>       

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  <!-- End Card Login  -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
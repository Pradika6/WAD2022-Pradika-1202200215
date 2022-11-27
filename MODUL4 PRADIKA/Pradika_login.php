    <?php
    session_start();
    require 'Pradika_function.php';

    //cek ada cookie?
    if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
        $id = $_COOKIE['id'];
        $key = $_COOKIE['key'];

        // ambil username berdasarkan id
        $result = mysqli_query($conn,"SELECT email FROM wad_modul4_users WHERE id = '$id'");
        $row = mysqli_fetch_assoc($result);

        // cek cookie dan username
        if ($key === hash('sha256', $row['email'])) {
            $_SESSION['logon'] = true;
        }

    }


    if (isset($_SESSION["login"])) {
        header("Location: Home-Pradika.php");
        exit;
    }


    if (isset ($_POST["login"])) {

        $email = $_POST["email"];
        $password = $_POST["password"];

        $result = mysqli_query($conn, "SELECT * FROM wad_modul4_users WHERE email = '$email'");

        // cek username
        if (mysqli_num_rows($result) === 1) {


            // cek password
            $row = mysqli_fetch_assoc($result);
            if(password_verify($password, $row["password"]) ){
                // set session
                $_SESSION["login"] = true;
                $_SESSION["id"]=$row["id"];

                //cek remember me
                if (isset($_POST["remember"])) {
                    // Buat COOKIE

                    setcookie('id', $row['id'], time()+3600);
                    setcookie('key', hash('sha256',$row['email']), time()+3600);
                }


                echo "
                <script>
                    alert('Anda Berhasil Login');
                    document.location.href='Home-Pradika.php';
                </script>
                ";
                exit;
            }

        }

        $error = true;
        if (isset($error)) {
            echo "<script>
                    alert('username atau password salah'); 
                </script>";
       }

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

        <title>Login</title>
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
                            <a href="Pradika_login.php" class="nav-link active">
                                Login
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a href="Pradika_Register.php" class="nav-link">
                                Register
                            </a>
                        </li>
                    </ul>
                    </div>
                </div>
            </div>
        </nav>
      <!-- End Navbar -->

<br>
<br>
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
            <div class="col-md-3 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">
              <div class="text-center">
                  <img src="https://drive.google.com/uc?export=view&id=1hqBNDU1Tx1RKd8wzC1bmnhwBr-7YsK23"
                    style="width: 185px;" alt="logo">
                </div>
                <br><br>
            <div class="card-body">
                <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
            </div>
            <form method="POST" action="">
                                    <label for="email"> <b>Email</b></label>
                                    <input type="text" class="form-control" id="email" name="email" placeholder="Masukan Alamat E-mail">
                                    <br>
                                    <label for="password"> <b>Kata Sandi</b></label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Kata Sandi Anda">
                                    <br>
                                    <input type="checkbox" name="remember" id="remember">                
                                    <label for="remember">Remember Me </label>
                                    <br><br>
                                    <center><button type="submit" name="login" class="btn btn-primary" style="width: 140px;">Login</button></center>
                                    <br>
                                    <p class="text-center">Anda belum punya akun? <a href="Pradika_register.php">Register</a></p>
                                </form>       

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


      </body>
    </html>

<?php
session_start();
require 'Pradika_function.php';
if (!isset($_SESSION["login"])) {
    header("Location: Pradika_login.php");
    exit;
}else {
  if (isset($_COOKIE['id']) && isset($_COOKIE['key'])){
          $id=$_COOKIE["id"];
        }else {
         $id=$_SESSION["id"];
       }
 

  $result=mysqli_query($connect, "SELECT * FROM wad_modul4_users WHERE id = '$id'");
  $row =mysqli_fetch_assoc($result);
  $nama=$row["nama"];

}
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-7mQhpDl5nRA5nY9lr8F1st2NbIly/8WqhjTp+0oFxEA/QUuvlbF6M1KXezGBh3Nb" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    
    <title>Home</title>

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container mt-2 mb-2">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link active" aria-current="page" href="Home-Pradika.php">Home</a>
                    </li>
                    <li class="nav-item active">
                         <a class="nav-link" aria-current="page" href="Pradika_MyItem.php">MyCar</a>
                    </li>
                        
                </ul>
                <ul class='navbar-nav ms-auto'>
                </ul>
                <ul class="navbar-nav ms-5">
                    <li class="nav-item">
                        <a class="btn btn-secondary" href="Pradika_AddCar.php">Add Car</a> 
                    </li>
                    <li class="dropdown ">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="far fa-user"></i> &nbsp; <?= $nama; ?>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="Pradika_Profile.php">Profile</a></li>
                            <li><a class="dropdown-item" href="Pradika_logout.php">logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div>
        <div class="container mt-3 pt-5 ">
            <div class="row clearfix" style="margin-top: 100px;">
                <div class="card border-0" style="width: 600px; height: 700px;">
                    <div class="deals-block-one">
                        <div class="inner-box">
                            <div class="lower-content">
                                <br><br><br><br><br>
                                    <div class="tittle-text">
                                        <h1>SELAMAT DATANG DI SHOWROOM</h1>
                                    </div>
                                    <p class="lead">Showroom Khusus Mobil BMW Terlengkap, Termurah di Kota Bandung</p>
                                    <nav class="navbar navbar-expand-xl navbar-light sticky-top" style="fill-opacity: 0;">
                                        <div class="collapse navbar-collapse" id = "main-nav">
                                            <ul class="navbar-nav mt-5">
                                                <li class="nav-item">
                                                    <img src="https://drive.google.com/uc?export=view&id=1hqBNDU1Tx1RKd8wzC1bmnhwBr-7YsK23" alt="logo" width="100px">
                                                    <li class="nav-item mx-3">
                                                    <p class="text-center" data-bs-toggle = "modal" data-bs-target= "#crpradika" >Pradika_1202200215</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-0" style="width: 500px; height: 500px;">
                    <div>
                        <figure class="image"><img src="https://cdn.bmwblog.com/wp-content/uploads/2021/02/BMW-M-Sikora-showroom-in-Poland-1.jpg" width="700" height="500"></figure> 
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>




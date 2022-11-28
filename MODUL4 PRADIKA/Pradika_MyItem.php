<?php
include 'connector.php';
      $result=mysqli_query($connect, "SELECT * FROM wad_modul4_users WHERE id = '$id'");
      $row =mysqli_fetch_assoc($result);
      $nama=$row["nama"];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-7mQhpDl5nRA5nY9lr8F1st2NbIly/8WqhjTp+0oFxEA/QUuvlbF6M1KXezGBh3Nb" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    
    <title>My Item</title>

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
    <div class="container mt-5 pt-5">
            <div class="card shadow pb-5 pt-5">
                <h3 class="text-center pt-4 fw-bold">My ShowRoom</h3>
                <p class="lead text-center">List Showroom Pradika_1202200215</p>
                <div class="row d-flex flex-row pb-5 pt-5 ">
                    <?php
                        include "connector.php";
                        $show = "SELECT * FROM showroom_pradika_table";
                        $query = mysqli_query($connect, $show);
                        $row = mysqli_num_rows($query);

                        if($row == 0){
                        echo '<p style="font-size:30px;text-align:center" class="mt-5 pt-5">Tidak Ada Mobil !</p>';
                        echo '<hr style="border:3px solid blue"></hr>';
                        echo '<p style="text-align:center">Silahkan Menambahkan List Mobil</p>';
                        }
                        else{
                        while($data = mysqli_fetch_array($query)){
                    ?>

                    <div class="card mx-1" style="width: 300px;">
                        <img src="../assets<?php echo $data['foto_mobil']?>" alt="foto_mobil" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title"><?= $data['nama_mobil']?></h5>
                            <p class="card-text"><?= $data['deskripsi']?></p>
                            <a class="btn btn-primary" href="Pradika_Itemdetail.php?id_mobil=<?php echo $data['id_mobil']?>">Detail</a>
                            <a class="btn btn-danger" href="Pradika_Delete.php?id_mobil=<?php echo $data['id_mobil']?>">Delete</a>
                        </div>
                    </div>
                    <?php }?>
                    <?php }?>
                </div>
            </div>
    </div>
    <div class="container text-center">
                <div class="mb-5 mt-5">
                    <img src="https://drive.google.com/uc?export=view&id=1hqBNDU1Tx1RKd8wzC1bmnhwBr-7YsK23" alt="logo" width="100px">
                    Pradika_1202200215
                </div>
            </div>
        </div>
    <footer style="padding-bottom: 50px;">
        <div class="container">
        <p
                style="font-family: 'Raleway'; font-style: normal; font-weight: 700; font-size: 16px; line-height: 19px; color: #757575;">
                Jumlah Mobil : <?php echo mysqli_num_rows($query)?></p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
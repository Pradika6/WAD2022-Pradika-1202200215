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
                        <a class="nav-link active" aria-current="page" href="Pradika_Home.php">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="Pradika_AddCar.php">MyCar</a>
                    </li>
                    <li class="container-fluid">
                        <a class="btn btn-secondary" href="Pradika_AddCar.php">Add Car</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5 pt-5">
            <div class="card shadow">
                <h3 class="text-center pt-4 fw-bold">My ShowRoom</h3>
                <p class="lead text-center">List Showroom Pradika_1202200215</p>
                <div class="row d-flex flex-row">
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

                    <div class="card mx-1" style="width:18rem;">
                        <img src="..\assets\datamobil<?php echo $data['foto_mobil']?>" alt="foto" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title"><?= $data['nama_mobil']?></h5>
                            <p class="card-text"><?= $data['deskripsi']?></p>
                            <a class="btn btn-primary" href="Pradika_Itemdetail.php?id_mobil=<?php echo $data['id_mobil']?>">Detail</a>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
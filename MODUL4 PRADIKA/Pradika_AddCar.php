<?php
    include 'connector.php';
    
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);

    $nama = "Pradika_1202200215";

    if(isset($_POST['submit'])){
        $id_mobil = $_POST['id_mobil'];
        $nama_mobil = $_POST['nama_mobil'];
        $pemilik_mobil = $_POST['nama_pemilik'];
        $merk_mobil = $_POST['merk_mobil'];
        $tanggal = $_POST['tanggal'];
        $deskripsi= $_POST['deskripsi'];
        $status= $_POST['status'];
        
        $rand = rand();
        $ekstensi =  array('png','jpg','jpeg','gif');
        $filename = $_FILES['gambar']['name'];
        $ukuran = $_FILES['gambar']['size'];
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        
        if(!in_array($ext,$ekstensi) ) {
            header("location:Pradika_Home.php?alert=gagal-laman");
        }else{	
            $xx = $rand.'_'.$filename;
            move_uploaded_file($_FILES['gambar']['tmp_name'], '../assets'.$rand.'_'.$filename);
            $postEvent = mysqli_query($connect, "INSERT INTO showroom_pradika_table VALUES ('$idmobil', '$nama_mobil', '$pemilik_mobil', '$merk_mobil', '$tanggal', '$deskripsi', '$xx','$status')");
            header("location:Pradika_MyItem.php");
        }
    }  
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-7mQhpDl5nRA5nY9lr8F1st2NbIly/8WqhjTp+0oFxEA/QUuvlbF6M1KXezGBh3Nb" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    
    <title>Add Car</title>

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
        <div class="card">
                <h3 class="text-center pt-4 fw-bold">TAMBAH MOBIL</h3>
                <p class="lead text-center">Tambahkan Mobil Baru Ke List Showroom</p>
            <form method="post" action="" enctype="multipart/form-data" style="margin-left:15px;margin-right:15px;margin-bottom:15px">
                <div class="mb-3">
                    <label for="nama_mobil" class="form-label fw-bold">Nama Mobil :</label>
                    <input type="text" class="form-control" id="nama_mobil" name="nama_mobil" placeholder="Masukkan Tipe Mobil Bmw Anda ...">
                </div>
                <div class="mb-3">
                    <label for="nama_pemilik" class="form-label fw-bold">Nama Pemilik :</label>
                    <input type="text" class="form-control" id="nama_pemilik" name="nama_pemilik" value="<?= $nama ?>" readonly>
                </div>
                <div class="mb-3">
                    <label for="merk_mobil" class="form-label fw-bold">Merk :</label>
                    <input type="text" class="form-control" id="merk_mobil" name="merk_mobil" placeholder="BMW">
                </div>
                <div class="mb-3">
                    <label for="tanggal" class="form-label fw-bold">Tanggal Beli :</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal">
                <div class="mb-3">
                    <label for="deskripsi" class="form-label fw-bold">Deskripsi :</label>
                    <textarea class="form-control" rows="3" cols="30" name="deskripsi" placeholder="Masukkan Deskripsi Mobil Anda ..."></textarea>
                </div>
                <div class="mb-3">
                    <label class="fw-bold">Foto :</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="gambar" name="gambar">
                    </div>
                    <br>
                <div class="mb-3">
                    <label for="status" class="form-label fw-bold">Status Pembayaran :</label>
                    <br>
                    <div class="form-check form-check-inline" style="margin-left:15px">
                        <input class="form-check-input" type="radio" name="status" id="status" value="yes">
                        <label class="form-check-label" for="lunas">Lunas</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="status" value="no">
                        <label class="form-check-label" for="belumlunas">Belum Lunas</label>
                    </div>
                </div>
                <br>
                <div class="container text-center">
                    <button class="btn btn-primary " type="submit" name="submit">SUBMIT</button>
                </div>
            </form>
        </div>
    </div>
    <div class="container text-center">
        <div class="mb-5 mt-5">
            <img src="https://drive.google.com/uc?export=view&id=1hqBNDU1Tx1RKd8wzC1bmnhwBr-7YsK23" alt="logo" width="100px">
                Pradika_1202200215
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
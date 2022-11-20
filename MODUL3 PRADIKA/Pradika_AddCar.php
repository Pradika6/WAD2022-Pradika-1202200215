<?php
    include 'connector.php';
    
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);

    $nama = "Pradika_1202200215";
    $merk = "BMW";

    if(isset($_POST['submit'])){
        $id_mobil = $_POST['id_mobil'];
        $mobil = $_POST['mobil'];
        $nama = $_POST['nama'];
        $merk = $_POST['merk'];
        $desc = $_POST['desc'];
        $pembayaran= $_POST['pembayaran'];
        
        $rand = rand();
        $ekstensi =  array('png','jpg','jpeg','gif');
        $filename = $_FILES['gambar']['name'];
        $ukuran = $_FILES['gambar']['size'];
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        
        if(!in_array($ext,$ekstensi) ) {
            header("location:Pradika_Home.php?alert=gagal_ekstensi");
        }else{	
            $xx = $rand.'_'.$filename;
            move_uploaded_file($_FILES['gambar']['tmp_name'], 'assets/'.$rand.'_'.$filename);
            $postEvent = mysqli_query($connect, "INSERT INTO showroom_pradika_table VALUES ('$id', '$mobil', '$nama', '$merk', '$desc', '$xx', '$tag', '$pembayaran')");
            header("location:Pradika_MyItem.php");
        }
    }  

?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <title>Add Item</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container mt-2 mb-2">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" aria-current="page" href="Pradika_Home.php">Home</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link active" href="Pradika_MyItem.php">MyCar</a>
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
                        <label for="mobil" class="form-label fw-bold">Nama Mobil</label>
                        <input type="text" class="form-control" id="mobil" name="mobil">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label fw-bold">Nama Pemilik</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $nama ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="merk" class="form-label fw-bold">Merk</label>
                        <input type="text" class="form-control" id="merk" name="merk" value="<?= $merk ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="tanggal" class="form-label fw-bold">Tanggal beli</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal">
                    </div>
                    <div class="mb-3">
                        <label for="desc" class="form-label fw-bold">Deskripsi</label>
                        <textarea class="form-control" rows="3" cols="30" name="desc"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="fw-bold">Foto</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="foto" name="foto">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="pembayaran" class="form-label fw-bold">Status Pembayaran</label>
                        <div class="form-check form-check-inline" style="margin-left:15px">
                            <input class="form-check-input" type="radio" name="pembayaran" id="pembayaran" value="pembayaran">
                            <label class="form-check-label" for="lunas">Lunas</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="pembayaran" id="pembayaran" value="pembayaran">
                            <label class="form-check-label" for="belumlunas">Belum Lunas</label>
                        </div>
                    </div>
                    <div class="mb-3 text-center">
                        <button class="btn btn-primary" type="submit" name="submit">Selesai</button>
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
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>
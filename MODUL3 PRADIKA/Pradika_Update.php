<?php
    include 'connector.php';

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
            move_uploaded_file($_FILES['gambar']['tmp_name'], '../assets/data/'.$rand.'_'.$filename);
            $postEvent = mysqli_query($connect, "INSERT INTO showroom_pradika_table VALUES ('$idmobil', '$nama_mobil', '$pemilik_mobil', '$merk_mobil', '$tanggal', '$deskripsi', '$xx','$status')");
            header("location:Pradika_MyItem.php");
        }
    }  
?>
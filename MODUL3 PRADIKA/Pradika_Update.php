<?php
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
    
?>

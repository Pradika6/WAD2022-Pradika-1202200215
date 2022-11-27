<?php
    $host="localhost:3307";
    $user="root";
    $password="";
    $db="modul3_pradika";

    $connect = mysqli_connect($host,$user,$password,$db);
    if (!$connect){
        $buka = mysqli_select_db( $db);
        echo "Terhubung";
        if (!$buka) {
            echo "Koneksi gagal";
        }
    }
?>
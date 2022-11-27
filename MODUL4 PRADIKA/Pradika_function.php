<?php
$conn= mysqli_connect("localhost:3307","root","","modul4");

function query($query){
    global $conn;
    $result =mysqli_query($conn,$query);
    $rows=[];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[]=$row;
    }
    return $rows;
}


function registrasi($data){
    global $conn;

    $nama=stripcslashes($data["nama"]);
    $email=mysqli_real_escape_string($conn,$data["email"]);
    $no_hp=strtolower(stripcslashes($data["no_hp"]));
    $password=mysqli_real_escape_string($conn,$data["password"]);
    $password2=mysqli_real_escape_string($conn,$data["password2"]);

            //cek email tersedia
    $result= mysqli_query($conn,"SELECT email FROM wad_modul4_users where email='$email'");
    if(mysqli_fetch_assoc($result)){
        echo "<script>
                alert('Email sudah terdaftar!');
              </script>";
              return false;

    }



    //cek konfirmasi password
    if ($password !== $password2 ) {
       echo "<script>
                alert('konfirmasi password tidak sesuai!');
            </script>";
            return false;

    }

    // enkripsi password
    $password= password_hash($password,PASSWORD_DEFAULT);
   
    //input ke database
    
    mysqli_query($conn,"INSERT INTO wad_modul4_users (id,nama,email,password,no_hp) VALUES('','$nama','$email','$password','$no_hp')");
    header("location:Pradika_login.php");

    return mysqli_affected_rows($conn);
}

function ubahuser($data){
 
	global $conn;
    $id=$data["id"];
	$nama= $data['nama'];
    $no_hp = $data['no_hp'];
	$password = $data['password'];
    $password2 = $data['password2'];

      //cek konfirmasi password
    if ($password !== $password2 ) {
       echo "<script>
                alert('konfirmasi password tidak sesuai!');
                 document.location.href='Pradika_profile.php';
            </script>";

            exit;

    }

    // enkripsi password
    $password= password_hash($password,PASSWORD_DEFAULT);
   
	
		mysqli_query($conn, "UPDATE wad_modul4_users SET nama='$nama',  password='$password', no_hp='$no_hp' WHERE id = '$id'");
		return mysqli_affected_rows($conn);
   
}

?>
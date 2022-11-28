  <?php
  session_start();

  require 'Pradika_function.php';

  if (!isset($_SESSION["login"])) {
    header("Location: Pradika_login.php");
    return false;

  }else{
    $id=$_SESSION["id"];
    $result=mysqli_query($connect, "SELECT * FROM wad_modul4_users WHERE id = '$id'");
    $row =mysqli_fetch_assoc($result);
    $nama=$row["nama"];


  }
    if(isset($_POST["simpan"])) {
        if(ubahuser($_POST)>0){
            echo "
            <script>
                alert('Data Berhasil Diubah');
                document.location.href='Home-Pradika.php';
            </script>
            ";
        }else{
            echo "
            <script>
                alert('data gagal diubah');
                document.location.href='Pradika_profile.php';
            </script>
            ";
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">


      <title>Profile</title>
    </head>
    <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container mt-2 mb-2">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link active" aria-current="page" href="Home-Pradika.php">Home</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" aria-current="page" href="Pradika_AddCar.php">MyCar</a>
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

<br>
<br>

    <!-- Card Login -->
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-10 ">
                     <div class="card  " style="margin-top:70px; width: 100%;">
                      <div class="card-body p-4">
                              <h4 class="card-title text-center">Profile</h4>
                              <br>
                              <form method="POST" action="">
                                <input type="hidden" name="id" value="<?=$row['id']?>">
                                 <div class="mb-3 row">
                                      <label for="staticEmail" class="col-sm-3 col-form-label"><b>Email</b></label>
                                      <div class="col-sm-9">
                                      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?= $row['email']?>">
                                      </div>
                                  </div>
                                  <div class="mb-3 row">
                                      <label for="nama" class="col-sm-3 col-form-label"><b>Nama</b></label>
                                      <div class="col-sm-9">
                                      <input type="text" class="form-control" id="nama" name="nama" value="<?= $row['nama']?>">
                                      </div>
                                  </div>
                                  <div class="mb-3 row">
                                      <label for="no_hp" class="col-sm-3 col-form-label"><b>Nomor Handphone</b></label>
                                      <div class="col-sm-9">
                                      <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?= $row['no_hp']?>">
                                      </div>
                                  </div>
                                  <hr>
                                  <div class="mb-3 row">
                                      <label for="password" class="col-sm-3 col-form-label"><b>Kata Sandi</b></label>
                                      <div class="col-sm-9">
                                      <input type="password" class="form-control" id="password" name="password">
                                      </div>
                                  </div>
                                  <div class="mb-3 row">
                                      <label for="password2" class="col-sm-3 col-form-label"><b>Konfirmasi Kata Sandi</b></label>
                                      <div class="col-sm-9">
                                      <input type="password" class="form-control" id="password2" name="password2">
                                      </div>
                                  </div>
                                  <div class="mb-3 row">
                                      <label for="navbar" class="col-sm-3 col-form-label"><b>Warna Navbar</b></label>
                                      <div class="col-sm-9">
                                      <input type="text" class="form-control" id="navbar">
                                      </div>
                                  </div>
                                  <Center> <button type="submit" name="simpan" class="btn btn-primary" style= "width:140px">Simpan</button>
                                  &emsp;
                                 <a href="Home-Pradika.php" class="btn btn-danger" style="width:140px">Cancel</a></Center>
                              </form>       
                      </div>
                        <div class="background">
                            <select name="navbarNav" class="form-control", id="">
                                <?php
                                    $colors = array('#4e79a0' => 'Biru', '#75b14a' => 'Hijau', '#d06353' => 'Merah' );
                                    foreach ($colors as $name => $values) {
                                        $selected = $name == @$_POST['navbarNav'] ? 'SELECTED="SELECTED"' : '';
                                        echo '<option value= "' . $name . '"' . $selected . '>' . $value . '</option>';    
                                    }
                                ?>
                            </select>
                        </div>        
                  </div> 
              </div>
          </div>
      </div>
    <!-- End Card Login  -->

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    </body>
  </html>

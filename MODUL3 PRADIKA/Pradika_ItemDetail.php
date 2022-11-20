<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Item Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<!-- Navbar -->
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
        <div class="row">
            <h3 class="pt-4 fw-bold" align="left">My ShowRoom</h3>
            <p class="lead" align="left">List Showroom Pradika_1202200215</p>
            <div class="col"></br></br></br></br>
                <img src="../Asset/Image/bmw.jpg" align="left"class="rounded mx-auto d-block" alt="bmw" height="300" width="Automatic">
            </div>
            <div class="col" align="left">
                <?php foreach($detail as $data) {?>
                        <div style="margin-left:15px;margin-right:15px;margin-bottom:15px" class="text-center">
                            <img class="my-3" src="assets/<?php echo $data['gambar']?>" alt="gambar" class="card-img-top" width="400px">
                            <hr style="border:2px solid blue;width:95%;margin-left:27px">
                        </div>
                        <div style="margin-left:45px;margin-right:15px;margin-bottom:15px">
                            <div class="mb-3">
                                <label for="mobil" class="fw-bold">Nama Mobil:</label>
                                <p><?= $data['mobil']?></p>
                            </div>
                            <div class="mb-3">
                                <label for="nama" class="fw-bold">Nama Pemilik:</label>
                                <p><?= $nama?></p>
                            </div>
                            <div class="mb-3">
                                <label for="merk" class="fw-bold">Merk:</label>
                                <p><?= $data['merk']?></p>
                            </div>
                            <div class="mb-3">
                                <label for="tanggal" class="fw-bold">Tanggal Beli:</label>
                                <p><?= $data['deskripsi']?></p>
                            </div>
                            <div class="mb-3">
                                <label for="desc" class="fw-bold">Deskripsi:</label>
                                <p><?= $data['desc']?></p>
                            </div>
                            <div class="mb-3">
                                <label for="pembayaran" class="fw-bold">Status Pembayaran:</label>
                                <p><?= $data['pembayaran']?></p>
                            </div>
                            <div class="text-center">
                                <button type="button" class="btn btn-primary col-sm-5" data-bs-toggle="modal" data-bs-target="#sunting">Sunting</button>
                                
                                <button class="btn btn-danger col-sm-5" type="button" data-bs-toggle="modal" data-bs-target="#deleteModal">Hapus</button>
                                
                            </div>
                            <div class="modal fade" id="sunting" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Sunting</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="Pradika_Update.php" method="post" enctype="multipart/form-data">
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
                                                <div class="mb-3">
                                                    <?php
                                                        if (isset($data['pembayaran'])) {
                                                            $pembayaran = explode(",", $data['pembayaran']);
                                                        } else {
                                                            $pembayaran = [];
                                                        }
                                                    ?>
                                                        <label class="fw-bold me-5" for="pembayaran">Status Pembayaran</label>
                                                    <input class="form-check-input" type="checkbox" value="lunas" id="lunas"
                                                        name="pembayaran[]"
                                                        <?php if (in_array("lunas", $pembayaran)): ?> checked> <?php endif; ?>
                                                    <label class="form-check-label me-3" for="lunas">
                                                        lunas
                                                    </label>
                                                    <input class="form-check-input" type="checkbox" value="belumlunas" id="belumlunas"
                                                        name="pembayaran[]"
                                                        <?php if (in_array("belumlunas", $pembayaran)): ?> checked> <?php endif; ?>
                                                    <label class="form-check-label me-3" for="belumlunas">
                                                        belumlunas
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
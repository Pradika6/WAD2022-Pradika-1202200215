
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>BOOKING</title>
    </head>
    <?php
        $nama = "Pradika_1202200215";
        $foto = "https://suteracar.com/wp-content/uploads/2020/01/rsz_1main_car4x-1024x576.png";
    
    if (isset($_POST["image"])) {
        $data = $_POST["image"];
        if ($data == "Toyota Rush") {
            $image = "https://www.toyota.astra.co.id/sites/default/files/2021-08/1-white.png";
        } elseif ($data == "Toyota Ayla") {
            $image = "https://www.bandung-daihatsu.com/wp-content/uploads/2022/07/Daihatsu-Ayla-2022.webp";
        } elseif ($data == "Honda Brio") {
            $image = "https://asset.kompas.com/crops/6gVJpIv3YYVUH1pN4JZIJqfQlZQ=/0x461:1280x1314/750x500/data/photo/2022/05/13/627e75b39d8d4.png";
        }
    } else {
        $image = "https://www.toyota.astra.co.id/sites/default/files/2021-08/1-white.png";
    }
    ?>

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center align-item-center" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link" aria-current="page" href="home.php">Home</a>
                        <a class="nav-link" href="booking.php">Booking</a>
                    </div>
                </div>
            </div>
        </nav>
        <div class="pt-5">
            <div class="container pt-4">
                <h5 class="text-center text-dark" style="padding: 5px;">Rent Your Car Now !</h5>
                <div class="card pb-4">
                    <div class="row">
                        <div class="col-md-5 d-flex justify-content-center">
                            <?php if (isset($_POST['image'])) : ?>
                                <img class="m-auto p-3"src="<?= $_POST['image'] ?>" alt="image" height="300px" width="600px">
                            <?php else : ?>
                                <img class="m-auto p-3" src="<?= $image ?>"alt="image" height="300px" width="600px">
                            <?php endif; ?>
                        </div>
                        <div class="col-md-6">
                            <form action="Mybooking.php" method="post">
                                <div class="form-group mt-2">
                                    <label for="nama">Name</label>
                                    <input type="text" class="form-control" id="nama" aria-describedby="nama" name="nama" placeholder="Enter name" value="<?= $nama ?>" readonly>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="date">Book Date</label>
                                    <input type="date" class="form-control" id="date" aria-describedby="date" name="date" required>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="time">Start Time</label>
                                    <input type="time" class="form-control" id="time" aria-describedby="time" name="time" required>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="durasi">Duration (Days)</label>
                                    <input type="number" class="form-control" id="durasi" aria-describedby="durasi" name="durasi" required>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="type">Car Type</label>
                                    <?php if (isset($_POST['car'])) : ?>
                                        <select class="form-control" id="cartype" name="car" readonly>
                                            <option selected value="<?= $_POST['car'] ?>"><?= $_POST['car'] ?></option>
                                        </select>
                                    <?php else : ?>
                                        <select class="form-control" id="type" name="car" required>
                                            <option>Choose..</option>
                                            <option value="Toyota Rush">Toyota Rush</option>
                                            <option value="Toyota Ayla">Toyota Ayla</option>
                                            <option value="Honda Brio">Honda Brio</option>
                                        </select>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="nohp">Phone Number</label>
                                    <input type="number" class="form-control" id="nohp" aria-describedby="nohp" name="nohp" required>
                                </div>
                                <div class="form-group mt-3">
                                    <label>Add Services(s)</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="health" id="health" name="servis">
                                        <label class="form-check-label" for="health"> Health protocol / Rp. 25.000 </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="driver" id="driver" name="servis">
                                        <label class="form-check-label" for="driver"> Driver / Rp. 100.000 </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="fuel" id="fuel" name="servis">
                                        <label class="form-check-label" for="fuel"> Fuel Filled / Rp. 250.000 </label>
                                    </div>
                                </div>
                                <div class="form-group mt-3 d-flex justify-content-center">
                                    <button type="submit" class="btn btn-success w-100">Book</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <footer>
        <p class="text-center pt-2 mt-5 py-1" style=" background-color: #ddd;">Created by PRADIKA_1202200215</p>
        </footer>
    </body>
</html>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>HOME</title>
    </head>
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
            <h4 class="text-center pt-4">WELCOME TO EAD RENT</h4>
            <div class="container pt-2">
                <h5 class="text-center" style="padding: 1px; font-family: sans-serif; font-size: 18px;">Find your best deal, here!</h5>
                <div class="row pt-3">
                    <div class="col-md d-flex justify-content-center">
                        <form method="post" action="booking.php">
                            <div class="card">
                                <img src="https://www.toyota.astra.co.id/sites/default/files/2021-08/1-white.png" class="card-img-top"  style="height :200px" alt="Ayla">
                                <input name="image" value="https://www.toyota.astra.co.id/sites/default/files/2021-08/1-white.png" hidden>
                                <div class="card-body">
                                    <h5 class="card-title" style="font-weight:bold">Toyota Rush</h5>
                                    <input name="car" value="Toyota Rush" hidden>
                                    <div class="card-text">
                                        <h6 class="text-secondary">Rp. 200.000 / Day</h6>
                                        <input name="price" value="Rp. 200000" hidden>
                                    </div>
                                </div>
                                <ul class="list-group list-group-flush text-center">
                                    <li class="list-group-item text-primary" style="font-weight:bold">7 Kursi</li>
                                    <li class="list-group-item text-primary" style="font-weight:bold">1500 CC</li>
                                    <li class="list-group-item text-primary" style="font-weight:bold">Manual</li>
                                    <li class="list-group-item bg-light">
                                        <input class="btn btn-primary" type="submit" name="submit" value="Book Now">
                                    </li>
                                </ul>
                            </div>
                        </form>
                    </div>
                    <div class="col-md d-flex justify-content-center">
                        <form method="post" action="booking.php">
                            <div class="card">
                                <img src="https://www.bandung-daihatsu.com/wp-content/uploads/2022/07/Daihatsu-Ayla-2022.webp" class="card-img-top"  style="height :200px" alt="Rush">
                                <input name="image" value="https://www.bandung-daihatsu.com/wp-content/uploads/2022/07/Daihatsu-Ayla-2022.webp" hidden>
                                <div class="card-body">
                                    <h5 class="card-title" style="font-weight:bold">Toyota Ayla</h5>
                                    <input name="car" value="Toyota Ayla" hidden>
                                    <div class="card-text">
                                        <h6 class="text-secondary">Rp. 150.000 / Day</h6>
                                        <input name="price" value="Rp. 150000" hidden>
                                    </div>
                                </div>
                                <ul class="list-group list-group-flush text-center">
                                    <li class="list-group-item text-primary" style="font-weight:bold">5 Kursi</li>
                                    <li class="list-group-item text-primary" style="font-weight:bold">1200 CC</li>
                                    <li class="list-group-item text-primary" style="font-weight:bold">Manual</li>
                                    <li class="list-group-item bg-light">
                                        <input class="btn btn-primary" type="submit" name="submit" value="Book Now">
                                    </li>
                                </ul>
                            </div>
                        </form>
                    </div>
                    <div class="col-md d-flex justify-content-center">
                        <form method="post" action="booking.php">
                            <div class="card">
                                <img src="https://asset.kompas.com/crops/6gVJpIv3YYVUH1pN4JZIJqfQlZQ=/0x461:1280x1314/750x500/data/photo/2022/05/13/627e75b39d8d4.png" class="card-img-top"  style="height :200px" alt="Brio">
                                <input name="image" value="https://asset.kompas.com/crops/6gVJpIv3YYVUH1pN4JZIJqfQlZQ=/0x461:1280x1314/750x500/data/photo/2022/05/13/627e75b39d8d4.png" hidden>
                                <div class="card-body">
                                    <h5 class="card-title" style="font-weight:bold">Honda Brio</h5>
                                    <input name="car" value="Honda Brio" hidden>
                                    <div class="card-text">
                                        <h6 class="text-secondary">Rp. 150.000 / Day</h6>
                                        <input name="price" value="Rp. 150000" hidden>
                                    </div>
                                </div>
                                <ul class="list-group list-group-flush text-center">
                                    <li class="list-group-item text-primary" style="font-weight:bold">5 Kursi</li>
                                    <li class="list-group-item text-primary" style="font-weight:bold">1200 CC</li>
                                    <li class="list-group-item text-primary" style="font-weight:bold">Automatic</li>
                                    <li class="list-group-item bg-light">
                                        <input class="btn btn-primary" type="submit" name="submit" value="Book Now">
                                    </li>
                                </ul>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    
        <footer>
            <p class="text-center pt-2 mt-5 py-1" style=" background-color: #ddd;">Created by PRADIKA_1202200215</p>
        </footer>
    </body>
</html>
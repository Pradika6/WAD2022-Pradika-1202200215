    <!doctype html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <title>MY BOOKING</title>
            <?php
                $nama = "Pradika_1202200215";
                date_default_timezone_set('GMT');
                $tgl = $_POST['date'];
                $time = $_POST['time'];
                $durasi = $_POST['durasi'];
                $ci = date("d-m-Y H:i", strtotime("$t9l $time"));
                $co = date('d-m-y H:i', strtotime($durasi . " " . "days", strtotime($ci)));
                $type = $_POST['car'];
                $hp = $_POST['nohp'];
                $total = 0;
                $type = $_POST['car'];
                if ($type == 'Toyota Rush') {
                    $total += (200000*$durasi);
                }else if($type == 'Toyota Ayla'){
                    $total += (150000*$durasi);
                }elseif ($type == 'Honda Brio') {
                    $total += (150000*$durasi);
                }
                $servis = $_POST['servis'];
                if($servis == 'health'){
                    $total += 25000;
                }
                elseif($servis == 'driver'){
                    $total += 100000;
                }
                elseif ($servis == 'fuel') {
                    $total += 250000;
                }
            ?>
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
                <h4 class="text-center pt-5">Thank you <?= $nama ?> for reserving</h4>
                <h5 class="text-center">Please double check your reservations details</h5>
                <div class="container-fluid">
                    <table class="table">
                        <tr>
                            <th scope="col">Booking Number</th>
                            <th scope="col">Name</th>
                            <th scope="col">Check-in</th>
                            <th scope="col">Check-out</th>
                            <th scope="col">Car Type</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Service</th>
                            <th scope="col">Total Price</th>
                        </tr>
                        <tr class="table-light">
                            <th scope="row"><?= rand(100000000, 999999999); ?></th>
                            <td><?= $nama ?></td>
                            <td><?= $ci ?></td>
                            <td><?= $co ?></td>
                            <td><?= $type ?></td>
                            <td><?= $hp ?></td>
                            <td>
                                <ul>
                                    <?php
                                    if(isset($_POST['servis'])){
                                        // foreach ($_POST['servis'] as $servis) {
                                            echo "<li>$servis</li>";
                                        // }
                                    }
                                    else{
                                        echo "No Service";
                                    }
                                    ?>
                                </ul>
                            </td>
                            <td>Rp. <?= $total ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        <br><br><br><br><br><br><br><br><br><br>
            <footer>
            <p class="text-center pt-2 mb-2 py-1" style=" background-color: #ddd;">Created by PRADIKA_1202200215</p>
            </footer>
        </body>
    </html>
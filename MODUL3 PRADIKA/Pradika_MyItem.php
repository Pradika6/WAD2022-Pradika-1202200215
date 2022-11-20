
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <title>My Item</title>
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
            <div class="card shadow">
                <h3 class="text-center pt-4 fw-bold">My ShowRoom</h3>
                <p class="lead text-center">List Showroom Pradika_1202200215</p>
                <div class="card" style="width: 300px; margin-left: 10px; margin-right: 10px;">
            <img class="img-thumbnail rounded-3" src="Ferrari.jpg"alt="">
            <div class="card-body">
                <h5><b> Card Title </b></h5>
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod </p>
                <div class="d-flex mx-auto justify-content">
                    <a type="button" href="Pradika_ItemDetail.php" class="btn btn-primary form-control" style="margin-right: 2.5px;">Detail</a>
                    <button type="submit" class="btn btn-danger form-control" style="margin-left: 2.5px;" data-bs-toggle = "modal" data-bs-target= "#reminder">Delete</button>
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
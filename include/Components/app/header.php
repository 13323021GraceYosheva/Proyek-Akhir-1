<<<<<<< HEAD
<?php include './include/Database/DBConnections.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/logo_transparent.png" type="image/x-icon">
    <title>Puskesmas Janjimatogu</title>
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
   
</head>
<body>
    <div class="wrapper bg-light-gray">
        <!-- Navbars -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light-gray">
            <a class="navbar-brand text-decoration-none" href="index.php">
                <div class="row mx-2">
                    <div class="col-md-4">
                        <img src="assets/img/logo_transparent.png" width="75" class="align-top" alt="">
                    </div>
                    <div class="col-md-8 p-2">
                        <div class="row" href="#">
                            <div class="col-md-12">
                                <h5 class="text-success">Puskesmas Janjimatogu</h5>
                                <h6 class="text-success">Lokasi Tempat</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item <?= str_ends_with(BaseUrl(),'/') || str_ends_with(BaseUrl(),'index.php') ? 'active' : '' ?>">
                        <a class="nav-link" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item <?= str_ends_with(BaseUrl(),'layanan.php') ? 'active' : '' ?>">
                        <a class="nav-link" href="layanan.php">Layanan</a>
                    </li>
                    <li class="nav-item <?= str_ends_with(BaseUrl(),'ukp.php') ? 'active' : '' ?>">
                        <a class="nav-link" href="ukp.php">UKP</a>
                    </li>
                    <li class="nav-item <?= str_ends_with(BaseUrl(),'tentang.php') ? 'active' : '' ?>">
                        <a class="nav-link" href="tentang.php">Tentang Kami</a>
                    </li>
                    <li class="nav-item <?= str_ends_with(BaseUrl(),'artikel.php') ? 'active' : '' ?>">
                        <a class="nav-link" href="artikel.php">Artikel</a>
                    </li>
                    <li class="nav-item <?= str_ends_with(BaseUrl(),'kontak.php') ? 'active' : '' ?>">
                        <a class="nav-link" href="kontak.php">Kontak Kami</a>
                    </li>
                </ul>
              
            </div>
        </nav>
=======
<?php include './include/Database/DBConnections.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/logo_transparent.png" type="image/x-icon">
    <title>Puskesmas Janjimatogu</title>
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
   
</head>
<body>
    <div class="wrapper bg-light-gray">
        <!-- Navbars -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light-gray">
            <a class="navbar-brand text-decoration-none" href="index.php">
                <div class="row mx-2">
                    <div class="col-md-4">
                        <img src="assets/img/logo_transparent.png" width="75" class="align-top" alt="">
                    </div>
                    <div class="col-md-8 p-2">
                        <div class="row" href="#">
                            <div class="col-md-12">
                                <h5 class="text-success">Puskesmas Janjimatogu</h5>
                                <h6 class="text-success">Lokasi Tempat</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item <?= str_ends_with(BaseUrl(),'/') || str_ends_with(BaseUrl(),'index.php') ? 'active' : '' ?>">
                        <a class="nav-link" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item <?= str_ends_with(BaseUrl(),'layanan.php') ? 'active' : '' ?>">
                        <a class="nav-link" href="layanan.php">Layanan</a>
                    </li>
                    <li class="nav-item <?= str_ends_with(BaseUrl(),'ukp.php') ? 'active' : '' ?>">
                        <a class="nav-link" href="ukp.php">UKP</a>
                    </li>
                    <li class="nav-item <?= str_ends_with(BaseUrl(),'tentang.php') ? 'active' : '' ?>">
                        <a class="nav-link" href="tentang.php">Tentang Kami</a>
                    </li>
                    <li class="nav-item <?= str_ends_with(BaseUrl(),'artikel.php') ? 'active' : '' ?>">
                        <a class="nav-link" href="artikel.php">Artikel</a>
                    </li>
                    <li class="nav-item <?= str_ends_with(BaseUrl(),'kontak.php') ? 'active' : '' ?>">
                        <a class="nav-link" href="kontak.php">Kontak Kami</a>
                    </li>
                </ul>
              
            </div>
        </nav>
>>>>>>> 3f3c0cc9417be49b819c9518551879e5b4cf08fb
    
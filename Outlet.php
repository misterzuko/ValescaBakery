<?php

$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'db_valesca';
$port = 3308;

//Create conncetion to MySQL
$conn = new mysqli ($host, $username, $password, $dbname, $port);

//Ngecek koneksi
if($conn->connect_error){
    die("Failed to connect".$conn->connect_error);
}?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Outlet | Valesca Cake & Bakery</title>
    <link href="/Logo.PNG" rel="shortcut icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="valescaa.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@100..900&display=swap" rel="stylesheet">
</head>

<body>
    <!-- NAVBAR -->
    <nav class="sticky-top navbar navbar-expand-lg d-flex custom-navbar">
        <img class="img-fluid" id="logo-collapse" src="/Logo.PNG">
        <div class="d-flex justify-content-center">
        
            <ul class="navbar-nav">
                <button class="navbar-toggler" id="toggler" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <img src="/navbar-toggler.png" width="30px">
                </button>
                </li>
            </ul>
        </div>
        <div class="collapse navbar-collapse" id="navbarNav">
            <img class="img-fluid" id="logo" src="/Logo.PNG">
            <ul class="navbar-nav">
                <li class="nav-item pr-4"><a class="nav-link" href="http://localhost/TR/Home.php">Home</a></li>
                <li class="nav-item pr-4"><a class="nav-link" href="/AboutUs.html">About Us</a></li>
                <li class="nav-item dropdown pr-4">
                    <a class="nav-link" href="/Product.html">
                        Product
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="Brownies.html">Brownies</a>
                        <a class="dropdown-item" href="Cake.html">Cake</a>
                        <a class="dropdown-item" href="Dessert.html">Dessert</a>
                        <a class="dropdown-item" href="Pastry.html">Pastry</a>
                        <a class="dropdown-item" href="Pizza.html">Pizza</a>
                        <a class="dropdown-item" href="RotiManis.html">Roti Manis</a>
                        <a class="dropdown-item" href="RotiManisBox.html">Roti Manis Box</a>
                        <a class="dropdown-item" href="Snack.html">Snack</a>
                        <a class="dropdown-item" href="Tart.html">Tar</a>
                        <a class="dropdown-item" href="Tawar.html">Tawar</a>
                    </div>
                </li>
                <li class="nav-item dropdown pr-4">
                    <a class="nav-link" href="/Promo.html">
                        Info
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="/Promo.html">Promo</a>
                    </div>
                </li>
                <li class="nav-item dropdown pr-4">
                    <a class="nav-link" href="/Orders.html">
                        Order
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="http://localhost/TR/Outlet.php">Outlet Valecia Bakery</a>
                    </div>
                </li>
                <li class="nav-item pr-4"><a class="nav-link" href="/hotline.html">Hotline</a></li>

                <li class="nav-item login" id="login">
                    <a class="btn btn-custom" href="http://localhost/TR/logout.php">Log out</a>
                </li>

            </ul>
            <img src="/halal.PNG" id="halal">
        </div>
    </nav>

    <section class="hero utama align-items-center flex-column">
        <h1 class="text-center py-4">Lokasi</h1>
        <div class="container-outlet">
            <div class="d-flex justify-content-center outlet">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15831.387562651764!2d110.40045069481812!3d-7.2582602339741555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708147e2901039%3A0xb9c301ec2484360b!2sValesca%20bakery!5e0!3m2!1sid!2sid!4v1727677459344!5m2!1sid!2sid"
                    style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
                <div class="maps d-flex justify-content-start">
                    <div class="p-4">
                        <h4 class="font-weight-bold">Ambarawa ( Jendral Sudirman )</h4>
                        <h6 class="pt-3 font-weight-bold">ALAMAT</h6>
                        <p>Jl. Jend. Sudirman, Kupang Dalangan, Kupang, Kec. Ambarawa, Kabupaten Semarang, Jawa Tengah
                            50612</p>
                        <h6 class="pt-3 font-weight-bold">No. Telepon</h6>
                        <p>+62 898-9632-007</p>
                        <h6 class="pt-3 font-weight-bold">JAM BUKA</h6>
                        <p>Setiap Hari, 08.00 - 21.00</p>
                        <h6 class="pt-3 font-weight-bold">MAPS</h6>
                        <a href="https://maps.app.goo.gl/jEEP6rAybbiMjEoZ6">Dapatkan Lokasinya</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-outlet">
            <div class="d-flex justify-content-center py-5 outlet">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15831.387562651764!2d110.40045069481812!3d-7.2582602339741555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70819be19cb21b%3A0x6766268172385167!2sValesca%20Bakery!5e0!3m2!1sid!2sid!4v1727677499074!5m2!1sid!2sid"
                    style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
                <div class="maps d-flex justify-content-start">
                    <div class="p-4">
                        <h4 class="font-weight-bold">Ambarawa ( Kartini )</h4>
                        <h6 class="pt-3 font-weight-bold">ALAMAT</h6>
                        <p>Jl. Kartini, Warunglanang, Lodoyong, Kec. Ambarawa, Kabupaten Semarang, Jawa Tengah 50612</p>
                        <h6 class="pt-3 font-weight-bold">No. Telepon</h6>
                        <p>+62 898-9632-007</p>
                        <h6 class="pt-3 font-weight-bold">JAM BUKA</h6>
                        <p>Setiap Hari, 08.00 - 21.00</p>
                        <h6 class="pt-3 font-weight-bold">MAPS</h6>
                        <a href="https://maps.app.goo.gl/rw5G48hg4nkxZaYy8">Dapatkan Lokasinya</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer class="custom-footer d-flex justify-content-center flex-column">
        <h1 class="text-center mt-4">Contact Us</h1>
        <div class="d-flex align-items-center justify-content-center div-2">
            <div class="d-flex align-items-center cabang">
                <img src="/maps.webp">
                <div class="d-flex flex-column">
                    <h6>Ambarawa</h6>
                    <h6>(Sudirman)</h6>
                </div>
            </div>
            <div class="d-flex align-items-center flex-column contact">
                <div class="d-flex justify-content-start flex-column">
                    <div class="d-flex justify-content-start align-items-center py-1">
                        <img src="/Facebook.webp" id="logo-fb">
                        <h5>@Valesca Valesca</h5>
                    </div>
                    <div class="d-flex justify-content-start align-items-center py-1">
                        <img src="/Instagram.webp" id="logo-ig">
                        <h5>@valescabakery</h5>
                    </div>
                    <div class="d-flex justify-content-start align-items-center py-1">
                        <img src="/Tiktok.webp" id="logo-tiktok">
                        <h5>@valescabakery01</h5>
                    </div>
                    <div class="d-flex justify-content-start align-items-center py-1">
                        <img src="/Whatsaap.webp" id="logo-wa">
                        <h5>08156799697</h5>
                    </div>
                </div>
            </div>
            <div class="d-flex align-items-center cabang">
                <img src="/maps.webp">
                <div class="d-flex align-items-center justify-content-center flex-column">
                    <h6>Ambarawa</h6>
                    <h6>(Kartini)</h6>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center align-items-center div-3">
            <div class="box"></div>
            <h6>2024 Valesca Bakery All Right Resereved</h6>
            <div class="box"></div>
        </div>
    </footer>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="valescaa.js"></script>
</body>

</html>
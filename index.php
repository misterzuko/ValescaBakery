<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Valesca Cake & Bakery</title>
    <link href="/Logo.PNG" rel="shortcut icon">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
    <!-- FONT-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@100..900&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Frank+Ruhl+Libre:wght@300..900&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Frank+Ruhl+Libre:wght@300..900&family=Paytone+One&display=swap"
        rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Frank+Ruhl+Libre:wght@300..900&family=Markazi+Text:wght@400..700&family=Paytone+One&display=swap"
        rel="stylesheet">
</head>

<body>
    <!-- NAVBAR -->
    <nav class="sticky-top navbar navbar-expand-lg d-flex custom-navbar">
        <img class="img-fluid" id="logo-collapse" src="/Logo.PNG">
        <div class="d-flex justify-content-center">
            <ul class="navbar-nav">
                <li class="nav-item login-collapse">
                    <a class="btn btn-custom" href="/login.html">Login Member</a>
                </li>
            </ul>
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
                <li class="nav-item pr-4"><a class="nav-link" href="/index.html">Home</a></li>
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

    <main>
        <section class="hero utama">
            <div class="container py-5">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="Carosel2.JPG" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="Carosel.JPG" alt="Second slide">
                        </div>
                    </div>
                </div>
                <h1 class="mt-5 text-center">Welcome to Valesca Cake & Bakery</h1>

                <div class="d-flex justify-content-center py-5">
                    <div class="d-flex align-items-center flex-column pr-3">
                        <div class="promo d-flex align-items-center flex-column">
                            <a href="/Promo.html">
                                <img class="img-fluid" src="Roti 1.jpeg">
                                <h1 class="py-3">PROMO DAN EVENTS</h1>
                            </a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center flex-column pr-3">
                        <div class="promo d-flex align-items-center flex-column">
                            <a href="/Product.html">
                                <img class="img-fluid" src="Roti 2.jpeg">
                                <h1 class="py-3">PRODUK BEST SELLER</h1>
                            </a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center flex-column pr-3">
                        <div class="promo d-flex align-items-center flex-column">
                            <a href="/Orders.html">
                                <img src="Roti 3.jpeg">
                                <h1 class="py-3">PEMESANAN PRODUK</h1>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Product Section -->
        <section class="products py-4 bg-secondary text-light ">
            <div class="py-4 container">
                <div class="d-flex justify-content-center">
                    <div class="col-lg-4">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner img-fluid rounded ">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="/Home Produk/1/1.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="/Home Produk/1/2.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="/Home Produk/1/3.jpg" alt="Second slide">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner img-fluid rounded ">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="/Home Produk/2/1.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="/Home Produk/2/2.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="/Home Produk/2/3.jpg" alt="Second slide">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner img-fluid rounded">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="/Home Produk/3/1.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="/Home Produk/3/2.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="/Home Produk/3/3.jpg" alt="Second slide">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section class="d-flex justify-content-center align-items-center salam">
            <div class="pl-1">
                <img class="align-bottom" src="salam.PNG">
            </div>
            <div class="align-self-center text-center text-salam">
                <h1 class="">About Valesca Cake & Bakery</h1>
                <hr class="">
                <h5>Valesca Cake & Bakery adalah toko roti yang didirikan pada 12 Agustus 2013 <br>di Kabupaten
                    Semarang, Ambarawa <br>
                    Sejak awal berdirinya, Valesca Cake & Bakery telah berkomitmen untuk <br> menghadirkan produk
                    berkualitas tinggi
                    dengan berbagai jenis <br> roti manis, kue tart, dan aneka produk bakery lainnya yang menggugah
                    selera.
                </h5>
            </div>
        </section>
    </main>

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="valescaa.js"></script>
</body>

</html>
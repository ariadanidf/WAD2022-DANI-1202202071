        <!DOCTYPE html>
        <html lang="en">
            <head>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
                <title>Dani Modul 2</title>
            </head>
            <style>
                .nav-link {
                    color: white;
                }
                .nav-link:hover{
                    color: cyan;
                }
            </style>
        <body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg bg-dark" >
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="nav" style="margin-left: auto; margin-right: auto;">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="Dani_Home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Dani_Booking.php">Booking</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Judul -->
        <section>
            <div class="container text-center">
            <br/>
                <h1>WELCOME TO EAD RENT</h1>
                <h5>Find your best deal here! <br/><br/></h5>
            </div>
        </section>

        <!-- Card Mobil -->
        <section>
            <div class="container">
                <div class="row row-cols-1 row-cols-md-3 g-3">
                    <div class="col">
                        <!-- Avanza -->
                        <div class="card h-100">
                            <img src="https://static.wixstatic.com/media/bce131_88ac39f3de1b433ca66ccb462f28e6d4~mv2.png/v1/fill/w_688,h_408,al_c/bce131_88ac39f3de1b433ca66ccb462f28e6d4~mv2.png" class="card-img-top h-100" alt="Avanza">
                            <div class="card-body">
                                <h5 class="card-title">Toyota Avanza</h5>
                                <p class="card-text">Rp150.000/Day</p>
                            </div>
                            <ul class="list-group list-group-flush text-center">
                                <li class="list-group-item">8 Kursi</li>
                                <li class="list-group-item">1500 cc</li>
                                <li class="list-group-item">Manual</li>
                            </ul>
                            <div class="card-footer text-center">
                                <div class="d-grid gap-2 d-md-block">
                                    <button class="btn btn-primary" type="button">Book Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <!-- Terios -->
                        <div class="card h-100">
                        <img src="https://daihatsu-cilegon.com/wp-content/uploads/2019/03/Daihatsu-allnewterios.png" class="card-img-top h-100" alt="Terios">
                            <div class="card-body">
                                <h5 class="card-title">Daihatsu Terios</h5>
                                <p class="card-text">Rp200.000/Day</p>
                            </div>
                            <ul class="list-group list-group-flush text-center">
                                <li class="list-group-item">7 Kursi</li>
                                <li class="list-group-item">1500 cc</li>
                                <li class="list-group-item">Manual</li>
                            </ul>
                            <div class="card-footer text-center">
                                <div class="d-grid gap-2 d-md-block">
                                    <a href="Dani_Booking.php" class="btn btn-primary" type="button">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <!-- Brio -->
                        <div class="card h-100">
                        <img src="https://asset.honda-indonesia.com/variants/images/Vos4HUL6XFLHnM2dhTzGbzdNHpvNTnBNBKhZwxc0.png" class="card-img-top h-100" alt="Brio">
                            <div class="card-body">
                                <h5 class="card-title">Honda Brio</h5>
                                <p class="card-text">Rp100.000/Day</p>
                            </div>
                            <ul class="list-group list-group-flush text-center">
                                <li class="list-group-item">5 Kursi</li>
                                <li class="list-group-item">1200 cc</li>
                                <li class="list-group-item">Manual</li>
                            </ul>
                            <div class="card-footer text-center">
                                <div class="d-grid gap-2 d-md-block">
                                    <button class="btn btn-primary" type="button">Book Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </section>

        <br/>
        <br/>

        <!-- Footer -->
        <section>
            <div class="bg-light text-center">
                <p>Created by DANI_1202202071</p>
            </div>
        </section>

        </body>
        </html>

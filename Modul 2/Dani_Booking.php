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
                .plisKeTengah{
                    margin-top: 25%;
                }
            </style>
        <body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg bg-dark" >
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="nav"  style="margin-left: auto; margin-right: auto;">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="Dani_Home.php">Home</a>
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
            <div class="container" style = "text-align : center;">
            <br/>
                <h4>Rent your car now!</h4>
            </div>
            <br/>
            <br/>
        </section>

        <!-- Form dan Gambar -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="plisKeTengah">
                            <img src="https://daihatsu-cilegon.com/wp-content/uploads/2019/03/Daihatsu-allnewterios.png" class="img" alt="Terios">
                        </div>
                    </div>
                    
                    <div class="col">
                        <form action="Dani_MyBooking.php" method="POST">
                            <!-- Nama -->
                            <div class="mb-3">
                                <label for="nama" class="form-label">Name</label>
                                <input type="text" class="form-control" id="nama" name="nama" value="DANI_1202202071" readonly enabled>
                            </div>

                            <!-- Tanggal -->
                            <div class="mb-3">
                                <label for="bookDate" class="form-label">Book Date</label>
                                <input type="date" class="form-control" id="bookDate" name="bookDate">
                            </div>

                            <!-- Waktu -->
                            <div class="mb-3">
                                <label for="startTime" class="form-label">Start Time</label>
                                <input type="time" class="form-control" id="startTime" name="startTime">
                            </div>

                            <!-- Durasi -->
                            <div class="mb-3">
                                <label for="dur" class="form-label">Duration (Days)</label>
                                <input type="number" class="form-control" id="dur" name="dur">
                            </div>

                            <!-- Pilih mobil -->
                            <div class="mb-3">
                                <label for="car" class="form-label">Car Type</label>
                                <select class="form-select" aria-label="Default select example" name="car">
                                    <option selected>Toyota Avanza</option>
                                    <option value="Daihatsu Terios">Daihatsu Terios</option>
                                    <option value="Honda Brio">Honda Brio</option>
                                </select>
                            </div>

                            <!-- No hp -->
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone number</label>
                                <input type="text" class="form-control" id="phone" name="phone">
                            </div>

                            <!-- Service -->
                            <p>Add service(s)</p>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Health protocol" id="healthprot" name="service[]">
                                <label class="form-check-label" for="healthprot">
                                    Health protocol / Rp25.000
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Driver" id="driver" name="service[]">
                                <label class="form-check-label" for="driver">
                                    Driver / Rp100.000
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Fuel filled" id="fuel" name="service[]">
                                <label class="form-check-label" for="fuel">
                                    Fuel filled / Rp250.000
                                </label>
                            </div>
                            <!-- tombol -->
                            <br/>
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary" type="submit">Book</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <section>
            <br/><br/><br/>
            <div class="bg-light text-center">
                <p>Created by DANI_1202202071</p>
            </div>
        </section>

        </body>
        </html>
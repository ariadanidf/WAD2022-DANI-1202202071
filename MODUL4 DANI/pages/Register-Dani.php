        <?php
            session_start();
        ?>

        <!DOCTYPE html>
        <html lang="en">
            <head>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
                <title>Dani Modul 4</title>
            </head>
            <?php
            include ('..\config\connector.php');
            if (isset($_SESSION['registers']) && $_SESSION == 'gagal') {
                $_SESSION['register'] = '';?>
                <div class="alert alert-warning m-0 p-2 alert-dismissible" role="alert">
                    Email anda sudah terdaftar!
                    <button type="button" class="button-close p-3" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php    
            }
            ?>
        <body>
        <section>
                <div class="container px-5 py-5 ">
                    <div class="row align-items-center">
                        <div class="col-sm">
                            <img src="..\asset\images\civic.png"  height = "330px"alt="...">    
                        </div>
                        <div class="col-sm">
                            <h1 class="fw-bold">Register</h1>
                            <form action="../config/register.php" method="POST" enctype="multipart/form-data">

                                <div class="mb-3">
                                    <label for="email" class="form-label fw-bold">Email</label>
                                    <input type="text" class="form-control" id="email" name="email" required>
                                </div>

                                <div class="mb-3">
                                    <label for="nama" class="form-label fw-bold">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama" required>
                                </div>

                                <div class="mb-3">
                                    <label for="noHP" class="form-label fw-bold">Nomor Handphone</label>
                                    <input type="text" class="form-control" id="noHP" name="noHP" required>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="kataSandi" class="form-label fw-bold">Kata Sandi</label>
                                    <input type="text" class="form-control" id="kataSandi" name="kataSandi" required>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="konfSandi" class="form-label fw-bold">Konfirmasi Kata Sandi</label>
                                    <input type="text" class="form-control" id="konfSandi" name="konfSandi" required>
                                </div>

                                <div class="mt-3 mb-1">
                                    <button type="submit" class="btn btn-primary" name="daftar">Daftar</button>
                                </div>

                                <p>Anda sudah punya akun? 
                                    <a href="Login-Dani.php">Login</a>
                                </p>
                            </form>
                        </div>
                    
                    </div>
                </div>
            </section>
        </body>
        </html>
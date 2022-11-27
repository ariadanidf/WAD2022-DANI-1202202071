<!-- GAJALAN -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <title>Dani Modul 3</title>
    </head>
    <style>
    </style>
<body>
    <?php
    include('..\config\connector.php');
    $query = mysqli_query($connect,"SELECT id_mobil FROM `showroom_dani_table`");
    $itung = mysqli_num_rows($query);
    
    $id = $_GET[("id")];
    $ambil = mysqli_query($connect, "SELECT * FROM user_dani WHERE id= $id");
    $hasil = mysqli_fetch_assoc($ambil);
    
    ?>
    <!-- Navbar -->
    <section>
        <nav class="navbar navbar-expand-lg bg-primary">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active text-white" href="..\pages\home-Dani.php?id=<?=$hasil['id']?>">Home</a>
                        </li>

                        <li class="nav-item">
                            <?php
                            if ($itung == 0){
                                echo '<a class="nav-link text-white" href=".\Add-Dani.php">MyCar</a>';
                            }
                            else{
                                echo '<a class="nav-link text-white" href=".\ListCar-Dani.php">MyCar</a>';
                            }
                            ?>
                        </li>
                    </ul>

                    <ul class="navbar-nav position-absolute top-0 end-0 mt-2">
                        <li class="nav-item me-5">
                            <a type="button" class="btn btn-light" href=".\Add-Dani.php">Add Car</a>
                        </li>
                        <li class="nav-item dropdown me-5">
                            <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Account
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href=".\Profile-Dani.php">Profile</a></li>
                                <li><a class="dropdown-item" href="..\config\logout.php">Log Out</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>

    <!-- Main -->

    <section>
        <div class="container">
            <div class="text-center">
                <h2 class="fw-bold mt-3">Profile</h2>
            </div>
        </div>
        
        <div class="container justify-content-center5">
            <form action="..\config\edit-profile.php?id=<?=$hasil['id']?>" method="POST" enctype="multipart/form-data">
            
                <div class="mb-3">
                    <label for="email" class="form-label fw-bold">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="<?=$hasil['email'];?>" readonly>
                </div>

                <div class="mb-3">
                    <label for="nama" class="form-label fw-bold">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="<?=$hasil['nama'];?>" required>
                </div>

                <div class="mb-3">
                    <label for="noHP" class="form-label fw-bold">Nomor Handphone</label>
                    <input type="text" class="form-control" id="noHP" name="noHP" placeholder="<?=$hasil['no_hp'];?>" required>
                </div>
                
                <div class="mb-3">
                    <label for="kataSandi" class="form-label fw-bold">Kata Sandi</label>
                    <input type="text" class="form-control" id="kataSandi" name="kataSandi" placeholder="<?=$hasil['password'];?>" required>
                </div>
                
                <div class="mb-3">
                    <label for="konfSandi" class="form-label fw-bold">Konfirmasi Kata Sandi</label>
                    <input type="text" class="form-control" id="konfSandi" name="konfSandi" placeholder="<?=$hasil['password'];?>" required>
                </div>

                <div class="mt-3 mb-1">
                    <button type="submit" class="btn btn-primary" name="update">Update</button>
                </div>
            </form>
        </div>

    </section>

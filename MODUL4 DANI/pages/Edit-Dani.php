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
    $ambil = mysqli_query($connect, "SELECT * FROM showroom_dani_table WHERE id_mobil= $id");
    $hasil = mysqli_fetch_assoc($ambil);
    ?>
    <!-- Navbar -->
    <section>
        <nav class="navbar navbar-expand-lg bg-primary">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active text-white" href="..\pages\home-Dani.php?id">Home</a>
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
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Log Out</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>

    <section>
        <div class="container py-5 justify-content-start">
            <h2 class="fw-bold"><?=$hasil['nama_mobil']?></h2>
            <p>Detail Mobil <?=$hasil['nama_mobil']?></p>
        </div>

        <div class="container justify-content-start">
            <div class="row">
                <div class="col">
                    <img src="../asset/images/<?php echo $hasil['foto_mobil'];?>" class="card-img-top" alt="...">
                </div>

                <div class="col">
                    <form action="..\config\edit.php?id=<?=$hasil['id_mobil']?>" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="idMobil" value="<?= $hasil["id_mobil"];?>">

                        <div class="mb-3">
                            <label for="namaMobil" class="form-label fw-bold">Nama Mobil</label>
                            <input type="text" class="form-control" id="namaMobil" name="namaMobil" value="<?=$hasil['nama_mobil'];?>">
                        </div>

                        <div class="mb-3">
                            <label for="namaPemilik" class="form-label fw-bold">Nama Pemilik</label>
                            <input type="text" class="form-control" id="namaPemilik" name="namaPemilik" value="<?=$hasil['pemilik_mobil'];?>">
                        </div>

                        <div class="mb-3">
                            <label for="merk" class="form-label fw-bold">Merk</label>
                            <input type="text" class="form-control" id="merk" name="merk" value="<?=$hasil['merk_mobil'];?>">
                        </div>

                        <div class="mb-3">
                            <label for="tglBeli" class="form-label fw-bold">Tanggal Beli</label>
                            <input type="date" class="form-control" id="tglBeli" name="tglBeli" value="<?=$hasil['tanggal_beli'];?>">
                        </div>

                        <div class="mb-3">
                            <label for="deskripsi" class="form-label fw-bold">Deskripsi</label>
                            <textarea rows="3" class="form-control" id="deskripsi" name="deskripsi"><?=$hasil['deskripsi'];?></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="foto" class="form-label fw-bold">Foto</label>
                            <input class="form-control" name="foto" type="file" id="foto" value="<?=$hasil["foto_mobil"]; ?>">
                        </div>

                        <p class="fw-bold">Status Pembayaran</p>
                        <?php 
                        if ($hasil['status_pembayaran'] == "Lunas"){ ?>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="statusPembayaran" id="statusPembayaran1" value="Lunas" checked>
                                <label class="form-check-label" for="statusPembayaran">Lunas</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="statusPembayaran" id="statusPembayaran" value="Belum Lunas">
                                <label class="form-check-label" for="statusPembayaran2">Belum Lunas</label>
                            </div>
                        <?php
                        }
                        else{?>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="statusPembayaran" id="statusPembayaran1" value="Lunas">
                                <label class="form-check-label" for="statusPembayaran">Lunas</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="statusPembayaran" id="statusPembayaran" value="Belum Lunas" checked>
                                <label class="form-check-label" for="statusPembayaran2">Belum Lunas</label>
                            </div>
                        <?php
                        }
                        ?>
                        
                        <div class="mt-3">
                            <button class="btn btn-primary" type="submit" name="save">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</body>
</html>

                
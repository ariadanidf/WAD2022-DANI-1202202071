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
    $itung = mysqli_num_rows($query)
    ?>
    <!-- Navbar -->
    <section>
        <nav class="navbar navbar-lg bg-primary">
            <div class="container justify-content-start">
                <a class="navbar-brand text-white" href="..\index.php">Home</a>
                <?php
                if ($itung == 0){
                    echo '<a class="navbar-brand text-white" href=".\Add-Dani.php">MyCar</a>';
                }
                else{
                    echo '<a class="navbar-brand text-white" href=".\ListCar-Dani.php">MyCar</a>';
                }
                ?>
            </div>
        </nav>
    </section>

    <section>
        <div class="container py-5 justify-content-start" style="width:50%;">
            <h2 class="fw-bold">Tambah Mobil</h2>
            <p>Tambah Mobil Baru Anda Ke List Show Room</p>


            <form action="insert.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="namaMobil" class="form-label fw-bold">Nama Mobil</label>
                    <input type="text" class="form-control" id="namaMobil" name="namaMobil">
                </div>

                <div class="mb-3">
                    <label for="namaPemilik" class="form-label fw-bold">Nama Pemilik</label>
                    <input type="text" class="form-control" id="namaPemilik" name="namaPemilik">
                </div>

                <div class="mb-3">
                    <label for="merk" class="form-label fw-bold">Merk</label>
                    <input type="text" class="form-control" id="merk" name="merk">
                </div>

                <div class="mb-3">
                    <label for="tglBeli" class="form-label fw-bold">Tanggal Beli</label>
                    <input type="date" class="form-control" id="tglBeli" name="tglBeli">
                </div>

                <div class="mb-3">
                    <label for="deskripsi" class="form-label fw-bold">Deskripsi</label>
                    <textarea rows="3" class="form-control" id="deskripsi" name="deskripsi"></textarea>
                </div>

                <div class="mb-3">
                    <label for="foto" class="form-label fw-bold">Foto</label>
                    <input class="form-control" type="file" id="foto" name="foto" value=""/>
                </div>

                <p class="fw-bold">Status Pembayaran</p>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="statusPembayaran" id="statusPembayaran1" value="Lunas">
                    <label class="form-check-label" for="statusPembayaran">Lunas</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="statusPembayaran" id="statusPembayaran" value="Belum Lunas">
                    <label class="form-check-label" for="statusPembayaran2">Belum Lunas</label>
                </div>

                <div class="mt-3">
                    <button class="btn btn-primary" type="submit" name="selesai">Selesai</button>
                </div>
            </form>
        </div>
    </section>
</body>
</html>



            



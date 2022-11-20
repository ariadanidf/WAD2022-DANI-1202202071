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

    $ambil = mysqli_query($connect, "SELECT * FROM `showroom_dani_table`");
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
            <h2 class="fw-bold">My Show Room</h2>
            <p>List Show Room DANI-1202202071</p>
        
        <?php
        while ($patokan = mysqli_fetch_array($ambil)){ ?>
            <br/>
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="card">
                    <img src="../asset/images/<?php echo $patokan['foto_mobil'];?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $patokan['nama_mobil'];?></h5>
                        <p class="card-text"><?= $getDesc = $patokan['deskripsi'];
                        $getDesc = strip_tags($getDesc);
                        if (strlen($getDesc) > 1) {
                        
                            // truncate string
                            $descCut = substr($getDesc, 0, 5);
                            $endPoint = strrpos($descCut, ' ');
                        
                            //if the string doesn't contain any space then it will cut without word basis.
                            $getDesc = $endPoint? substr($descCut, 0, $endPoint) : substr($descCut, 0);
                            $getDesc .= '... <a href="/this/story">Read More</a>';
                        }
                        echo $getDesc;?></p>
                        <div class="row">
                            <div class="col">
                                <a href="./Detail-Dani.php" class="btn btn-primary">Detail</a>
                            </div>

                            <div class="col">
                                <a href="#" class="btn btn-danger">delete</a> 
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
            </div>
        </div>
    </section>
</body>
</html>
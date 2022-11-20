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
    include('.\config\connector.php');
    $query = mysqli_query($connect,"SELECT id_mobil FROM `showroom_dani_table`");
    $itung = mysqli_num_rows($query)
    ?>

    <!-- Navbar -->
    <section>
        <nav class="navbar navbar-lg bg-primary">
            <div class="container justify-content-start">
                <a class="navbar-brand text-white" href=".\index.php">Home</a>
                <?php
                if ($itung == 0){
                    echo '<a class="navbar-brand text-white" href=".\pages\Add-Dani.php">MyCar</a>';
                }
                else{
                    echo '<a class="navbar-brand text-white" href=".\pages\ListCar-Dani.php">MyCar</a>';
                }
                ?>
            </div>
        </nav>
    </section>

    <!-- Main -->
    <section>
        <div class="container px-5 py-5">
            <div class="row align-items-center">
                <div class="col">
                    <h1 class="display-3 fw-bold">Selamat Datang Di Show Room Dani</h1>
                    <p>Di sini Anda bisa menemukan mobil-mobil yang mungkin bisa Anda kendarai!</p>
                    <br/>
                    <div class="justify-content-center">
                        <?php
                        if ($itung == 0){
                            echo '<a class="btn btn-primary btn-lg" href=".\pages\Add-Dani.php">MyCar</a>';
                        }
                        else{
                            echo '<a class="btn btn-primary btn-lg" href=".\pages\ListCar-Dani.php">MyCar</a>';
                        }
                        ?>
                        
                    </div>
                    <div class="container mt-4">
                        <div class="row">
                            <div class="col">
                                <img src=".\asset\images\logo-ead.png" height="20px">
                            </div>
                            <div class="col">
                                <p>DANI_1202202071</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <img src=".\asset\images\civic.png"  height = "330px"alt="...">
                </div>
            </div>
        </div>
    </section>
</body>
</html>
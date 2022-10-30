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
    <br/>
    <div class="container text-center">
        <h2>Thank You DANI_1202202071 for Reserving</h2>
        <br/>
        <h5>Please double check your reservation details</h5>
    </div>
</section>

<?php
//post
$nama = $_POST['nama'];
$bookDate = $_POST['bookDate'];
$startTime = $_POST['startTime'];
$dur = $_POST['dur'];
$car = $_POST['car'];
$phone = $_POST['phone'];
$service = $_POST['service'];

//hitungan
$checkIn = date('Y-m-d H:i:s', strtotime("$bookDate $startTime"));
$checkOut = date('Y-m-d H:i:s', strtotime($bookDate.  "+ $dur".'days' ."$startTime"));

if ($car == "Toyota Avanza") {
    $totPrice = 150000*$dur;
} elseif ($car == "Daihatsu Terios") {
    $totPrice = 200000*$dur;
} else{
    $totPrice = 100000*$dur;
}

foreach($service as $layanan){
    if ($layanan == "Health protocol"){
        $totPrice +=25000;
    } elseif ($layanan == "Driver"){
        $totPrice += 100000;
    } elseif ($layanan == "Fuel filled"){
        $totPrice += 250000;
    }
}

//service

?>

<!-- Tabel -->
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Booking Number</th>
      <th scope="col">Name</th>
      <th scope="col">Check In</th>
      <th scope="col">Check Out</th>
      <th scope="col">Car Type</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Service(s)</th>
      <th scope="col">Total Price</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php echo rand()?></th>
      <td><?php echo $nama ?></td>
      <td><?php echo $checkIn ?></td>
      <td><?php echo $checkOut ?></td>
      <td><?php echo $car ?></td>
      <td><?php echo $phone ?></td>
      <td><?php foreach($service as $layanan) {
        echo "<li>" .$layanan. "</li>";} ?></td>
      <td><?php echo "Rp ". number_format("$totPrice","0",",", ".") ?></td>
    </tr>
  </tbody>
</table>

<!-- Footer -->
<section>
    <br/><br/><br/>
    <div class="bg-light text-center">
        <p>Created by DANI_1202202071</p>
    </div>
</section>

</body>
</html>
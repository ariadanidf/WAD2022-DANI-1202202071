<?php
include('..\config\connector.php');
    $id = $_GET[("id")];
    mysqli_query($connect, "DELETE FROM showroom_dani_table WHERE id_mobil=$id");
    header('Location: ..\pages\ListCar-Dani.php');
?>
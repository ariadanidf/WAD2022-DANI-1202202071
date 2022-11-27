<!-- GAJALAN -->

<?php

include('..\config\connector.php');

$id = $_GET[("id")];
$query = mysqli_query($connect, "SELECT * FROM user_dani WHERE id = $id");
$hasil = mysqli_fetch_assoc($query);
if (isset($_POST['update'])){
    $email = $_POST['email'];
    $nama = $_POST['nama'];
    $hp = $_POST['noHP'];
    $pass = $_POST['kataSandi'];
    $confPass = $_POST['konfSandi'];
    $pass = mysqli_real_escape_string($connect, $_POST["kataSandi"]);

    $query = mysqli_query($connect, "UPDATE user_dani
    SET email = '$email', nama='$nama', no_hp='$hp', password='$pass'
    WHERE id='$id'");

    if ($query){
        header('Location: ..\pages\Profile-Dani.php?id='.$hasil['id']);
    }
}
?>


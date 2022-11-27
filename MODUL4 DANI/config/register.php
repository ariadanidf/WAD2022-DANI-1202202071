<?php
include 'connector.php';

if (isset($_POST["daftar"])){
    if (($_POST["kataSandi"]) == ($_POST["konfSandi"])){
        $email = $_POST['email'];
        $nama = $_POST['nama'];
        $hp = $_POST['noHP'];
        $pass = $_POST['kataSandi'];
        $confPass = $_POST['konfSandi'];
        $pass = mysqli_real_escape_string($connect, $_POST["kataSandi"]);
        mysqli_query($connect, "INSERT INTO user_dani(nama, email, password, no_hp) VALUES('$nama', '$email', '$pass', '$hp')");
        if (mysqli_affected_rows($connect) > 0) {
            $_SESSION["sukses"] = "berhasil";
            echo "
            <script> document.location.href = '../pages/Login-Dani.php'; </script>";
        }
    } else {
        echo "<script>alert('Pastikan melakukan konfirmasi password dengan benar!')</script>";
        echo "<script> document.location.href = '../pages/Register-Dani.php' </script>";
        exit;
    }
}
?>
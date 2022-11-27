<?php
include 'connector.php';
$ambil = mysqli_query($connect, "SELECT * FROM `user_dani`");
$patokan = mysqli_fetch_array($ambil);

if (isset($_POST["masuk"])){
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $query = mysqli_query($connect, "SELECT * FROM user_dani WHERE email = '$email'");
    $hasil = mysqli_fetch_assoc($query);
    if ( $pass == $hasil["password"]){
        $_SESSION["masuk"] = true;
        if (isset($_POST["ingatSaya"])){
            setcookie('id', $hasil["id"], strtotime('+3 days'), '/');
            header('Location: ..\pages\Home-Dani.php');
            exit;
        }else{
            $_SESSION["notChecked"] = $hasil["id"];
            header('Location: ..\pages\Home-Dani.php');
            exit;
        }
    }else{
        echo "<script>alert('Email atau Password salah')</script>";
        echo "<script> document.location.href = '../pages/Login-Dani.php' </script>";
        exit;
    }
}
?>
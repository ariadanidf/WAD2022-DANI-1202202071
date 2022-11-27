<?php

include('..\config\connector.php');

$id = $_GET[("id")];
$query = mysqli_query($connect, "SELECT * FROM showroom_dani_table WHERE id_mobil = $id");
$hasil = mysqli_fetch_assoc($query);
if (isset($_POST['save'])){
    $idMobil = $_POST['idMobil'];
    $namaMobil = $_POST['namaMobil'];
    $namaPemilik = $_POST['namaPemilik'];
    $merk = $_POST['merk'];
    $tglBeli = $_POST['tglBeli'];
    $deskripsi = $_POST['deskripsi'];

    $foto = $_FILES["foto"]["name"];
    $temp = $_FILES["foto"]["tmp_name"];
    $folder = "../asset/images/" . $foto;
    move_uploaded_file($temp, '../asset/images/'.$foto);
    $pembayaran = $_POST['statusPembayaran'];

    $query = mysqli_query($connect, "UPDATE showroom_dani_table
    SET nama_mobil='$namaMobil', pemilik_mobil='$namaPemilik', merk_mobil='$merk', tanggal_beli='$tglBeli', foto_mobil='$foto', status_pembayaran='$pembayaran'
    WHERE id_mobil='$id'");

    if ($query){
        header('Location: ..\pages\Detail-Dani.php?id='.$hasil['id_mobil']);
    }
}
?>


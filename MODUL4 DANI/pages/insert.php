
<?php

include('..\config\connector.php');


if (isset($_POST['selesai'])){
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

    $query = mysqli_query($connect, "INSERT INTO showroom_dani_table(nama_mobil, pemilik_mobil, merk_mobil, tanggal_beli, deskripsi, foto_mobil, status_pembayaran)
    VALUES('$namaMobil','$namaPemilik','$merk','$tglBeli','$deskripsi','$foto','$pembayaran')");

    if ($query){
        header('Location: ..\pages\ListCar-Dani.php');
    }
}
?>


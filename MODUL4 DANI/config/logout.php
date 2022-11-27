<?php
session_start();
unset($_SESSION["masuk"]);
$_SESSION["keluar"] = "keluar";
setcookie('id', $hasil["id"], strtotime('-3 days'), '/');
unset($_SESSION["notChecked"]);
header("Location: ..\index.php");
exit;
?>
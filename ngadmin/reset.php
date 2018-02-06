<?php
include "koneksi.php";

$id = $_GET['id'];

$perbarui = "UPDATE skripsi SET status='1' WHERE status='2'";
$exec_perintah = @mysql_query($perbarui) or die(mysql_error());

header('location:destination');
?>
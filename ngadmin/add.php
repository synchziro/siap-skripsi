<?php
include "koneksi.php";

$judul = $_POST['judul'];
$tingkat = $_POST['tingkat'];

$perintah_insert_crud = "INSERT INTO skripsi VALUES(null,'$judul','$tingkat','1',now())";
$exec_perintah = @mysql_query($perintah_insert_crud) or die(mysql_error());

header('location:index');
?>
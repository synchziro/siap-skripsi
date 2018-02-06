<?php
include "koneksi.php";

$id= $_GET['id'];
$ip = GETENV("REMOTE_ADDR");
 
if ($id < 0){
echo "<b>Patched</b>";
exit;
}
 
if (!preg_match("/^[0-9]+$/", $id)) {
echo "<b>Patched</b>";
exit;
}
 
if (strlen($id)>3){
echo "<b>Patched</b>";
exit;
}

$perbarui = "UPDATE skripsi SET status='2' WHERE id='$id'";
$exec_perintah = @mysql_query($perbarui) or die(mysql_error());

header('location:destination');
?>
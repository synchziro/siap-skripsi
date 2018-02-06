<?php

$host = "localhost";
$userdb = "root";
$passdb = "";
$db_name = "db_pemrograman";

$koneksi = mysqli_connect($host, $userdb, $passdb, $db_name);

@mysql_connect($host,$userdb,$passdb) or die(mysql_error());

@mysql_select_db($db_name) or die(mysql_error());
?>
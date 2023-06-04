<?php
$databaseHost = "localhost";
$databaseName = "database_mhs";
$databaseUsername = "root";
$databasePassword = "";

$con = mysqli_connect("$databaseHost", "$databaseUsername", "$databasePassword", "$databaseName");

if (mysqli_connect_errno()) {
  echo "<h1>koneksi database error : " . mysqli_connect_errno() . "</h1>";
}


?>
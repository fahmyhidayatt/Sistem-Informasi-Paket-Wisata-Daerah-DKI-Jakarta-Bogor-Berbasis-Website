<?php
$host = "localhost";

$username = "root";
$password = "";
$db_name = "pariwisata";
$mysqli = new mysqli("$host", "root", "", "$db_name") or die("cannot connect" .mysqli_error());
?>
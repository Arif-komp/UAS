<?php
//sambung ke database
$host = "localhost";
$username = "root";
$password = "";
$db = "web-promosi";

$con = mysqli_connect($host, $username, $password, $db);
mysqli_select_db($con, $db);

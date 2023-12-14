<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "company_profile";

$conn = mysqli_connect($hostname, $username, $password, $database);

if (!$conn) {
    die("". mysqli_connect_error());
} ?>
<?php

include("../koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$username = $_POST["username"];
	$password = $_POST["password"];
	$result = mysqli_query($conn, "SELECT * FROM admin");
	$data = mysqli_fetch_assoc($result);

	if (($data['username'] == $username) && ($data['password'] == $password)) {
		header("Location: ./menu_admin/admin.php");
		exit();
	} else {
		echo "<script language='javascript'>";
		echo "alert('WRONG INFORMATION')";
		echo "</script>";
		header("Location: login.php");
		exit();
	}
}

?>
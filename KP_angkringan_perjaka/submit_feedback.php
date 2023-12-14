<?php
include("koneksi.php");
if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $query = mysqli_query($conn, "INSERT INTO feedback (nama, email, message) VALUES ('$name','$email','$message')") or die("Gagal");
    if ($query) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: dasboard.html');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: feedback.php?status=gagal');
    }
} else {
    die("Akses dilarang...");
}
?>
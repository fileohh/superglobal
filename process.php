<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai dari form
    $nama = $_POST["nama"];
    $email = $_POST["email"];

    // Menyimpan nilai pada session
    $_SESSION["nama"] = $nama;
    $_SESSION["email"] = $email;

    // Redirect ke halaman dashboard.php
    header("Location: dashboard.php");
    exit();
}
?>
<?php
session_start();

// Memeriksa apakah pengguna telah login atau belum
if (!isset($_SESSION["nama"])) {
    header("Location: login.php");
    exit();
}

$nama = $_SESSION["nama"];
$email = $_SESSION["email"];
?>

<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="contoh.css">
</head>

<body>
    <h2>Selamat Datang,
        <?php echo $nama; ?>
    </h2>
    <h2>Email kamu adalah:
        <?php echo $email; ?>
    </h2>
    <h2>SELAMAT ANDA KENA PRANK!!!!!!</h2>
</body>

</html>
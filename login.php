<?php
session_start();

// Memeriksa apakah variabel $_POST terisi atau tidak
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai dari form
    $nama = $_POST["nama"];
    $email = $_POST["email"];

    // Menyimpan nilai pada session
    $_SESSION["nama"] = $nama;
    $_SESSION["email"] = $email;

    // Redirect ke halaman dashboard.php
    header("Location: dashboard.php");
    die();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Contoh Program PHP dengan Variabel Super Global</title>
    <link rel="stylesheet" type="text/css" href="contoh.css">
</head>

<body>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Nama: <input type="text" name="nama"><br>
        Email: <input type="email" name="email"><br>
        <input type="submit" value="Submit">
    </form>

</body>

</html>
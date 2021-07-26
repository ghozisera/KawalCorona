<?php
include "../auth/config.php";

session_start();

$username = $_POST["username"];
$p = $_POST["password"];
$sql = "select * from Users where username='" . $username . "' and password= '" . $p . "' limit 1";
$hasil = mysqli_query($conn, $sql);
$jumlah = mysqli_num_rows($hasil);
if ($jumlah > 0) {
    $row = mysqli_fetch_assoc($hasil);
    $_SESSION["isLogin"] = "true";
    $_SESSION["username"] = $row["username"];

    header("Location: ../index.php");
} else {
    echo "Username atau password salah <br><a href='login.php'>Kembali</a>";
}
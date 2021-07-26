<?php
include "auth/config.php";

$email = $_POST["email"];
$password = $_POST["password"];
$nama = md5($_POST["nama"]);
$namatoko = $_POST["namatoko"];
$alamattoko = $_POST["alamattoko"];
$kota = $_POST["kota"];
$telepon = $_POST["telepon"];

$sql = "insert into Users values
('$email','$password','$nama','$namatoko','$alamat
','$kota','$telepon')"; 
$hasil = mysqli_query($conn, $sql);

if ($hasil) {
    header("Location: login.php");
    exit;
} else {
    echo "Gagal simpan data anggota";
    exit;
}
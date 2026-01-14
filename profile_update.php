<?php
session_start();
include "koneksi.php";

if (!isset($_SESSION['username'])) {
    header("location:login.php");
    exit;
}

$username = $_SESSION['username'];

if (!empty($_FILES['foto']['name'])) {
    $nama_foto = time() . "_" . $_FILES['foto']['name'];
    $tmp       = $_FILES['foto']['tmp_name'];

    move_uploaded_file($tmp, "img/" . $nama_foto);

    mysqli_query($conn,
        "UPDATE user SET foto='$nama_foto' WHERE username='$username'"
    );
}

header("location:admin.php?page=profile");


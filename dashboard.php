<?php
include "koneksi.php";

// proteksi halaman
if (!isset($_SESSION['username'])) {
    header("location:login.php");
    exit;
}

$username = $_SESSION['username'];

// ================= USER LOGIN =================
$queryUser = mysqli_query($conn,
    "SELECT username, foto FROM user WHERE username='$username'"
);
$user = mysqli_fetch_assoc($queryUser);

// foto default jika kosong
$foto = !empty($user['foto']) ? $user['foto'] : 'default.png';

// ================= ARTICLE =================
$sql1 = "SELECT * FROM article ORDER BY tanggal DESC";
$hasil1 = $conn->query($sql1);
$jumlah_article = $hasil1->num_rows;

// ================= GALLERY =================
$sql2 = "SELECT * FROM gallery";
$hasil2 = $conn->query($sql2);
$jumlah_gallery = $hasil2->num_rows;
?>

<!-- ================= DASHBOARD ================= -->

<div class="text-center my-4">
    <p class="lead">Selamat Datang,</p>
    <h3 class="text-danger fw-bold"><?= $user['username']; ?></h3>

    <!-- FOTO PROFIL -->
    <img src="img/<?= $foto; ?>"
         class="rounded-circle mt-3 shadow"
         width="150" height="150"
         style="object-fit: cover;">
</div>

<!-- ================= CARD ================= -->

<div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center pt-4">

    <!-- ARTICLE -->
    <div class="col">
        <div class="card border border-danger mb-3 shadow" style="max-width: 18rem;">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div class="p-3">
                        <h5 class="card-title">
                            <i class="bi bi-newspaper"></i> Article
                        </h5> 
                    </div>
                    <div class="p-3">
                        <span class="badge rounded-pill text-bg-danger fs-2">
                            <?= $jumlah_article; ?>
                        </span>
                    </div> 
                </div>
            </div>
        </div>
    </div> 

    <!-- GALLERY -->
    <div class="col">
        <div class="card border border-danger mb-3 shadow" style="max-width: 18rem;">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div class="p-3">
                        <h5 class="card-title">
                            <i class="bi bi-camera"></i> Gallery
                        </h5> 
                    </div>
                    <div class="p-3">
                        <span class="badge rounded-pill text-bg-danger fs-2">
                            <?= $jumlah_gallery; ?>
                        </span>
                    </div> 
                </div>
            </div>
        </div>
    </div> 

</div>

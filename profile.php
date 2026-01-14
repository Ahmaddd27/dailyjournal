<?php
include "koneksi.php";

// proteksi (session sudah ada dari admin.php)
if (!isset($_SESSION['username'])) {
    header("location:login.php");
    exit;
}

$username = $_SESSION['username'];

$query = mysqli_query($conn, "SELECT * FROM user WHERE username='$username'");
$data  = mysqli_fetch_assoc($query);

// fallback foto default
$foto = !empty($data['foto']) ? $data['foto'] : 'default.png';
?>

<form action="profile_update.php" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label class="form-label">Username</label>
        <input type="text" class="form-control"
               value="<?= htmlspecialchars($data['username']); ?>" readonly>
    </div>

    <div class="mb-3">
        <label class="form-label">Ganti Password</label>
        <input type="password" class="form-control" name="password"
               placeholder="Kosongkan jika tidak ingin mengganti password">
    </div>

    <div class="mb-3">
        <label class="form-label">Ganti Foto Profil</label>
        <input type="file" class="form-control" name="foto">
    </div>

    <div class="mb-3">
        <label class="form-label">Foto Profil Saat Ini</label><br>
        <img src="img/<?= htmlspecialchars($foto); ?>"
             width="120" class="rounded shadow">
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>











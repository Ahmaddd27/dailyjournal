<?php
include "koneksi.php";

$keyword = $_POST['keyword'] ?? '';

$sql = "SELECT * FROM gallery
        WHERE deskripsi LIKE '%$keyword%'
        ORDER BY created_at DESC";

$hasil = mysqli_query($conn, $sql);

$no = 1;
while ($g = mysqli_fetch_assoc($hasil)) {
?>
<tr>
    <td><?= $no++ ?></td>

    <td>
        <?= nl2br($g['deskripsi']) ?><br>
        <small class="text-muted">
            pada : <?= $g['created_at'] ?><br>
            oleh : <?= $g['created_by'] ?>
        </small>
    </td>

    <td>
        <?php if ($g['gambar'] != '') { ?>
            <!-- PATH DISAMAKAN DENGAN ARTICLE -->
            <img src="img/<?= $g['gambar'] ?>" width="120">
        <?php } ?>
    </td>

    <td class="text-center">
        <span class="badge bg-success">Edit</span>
        <span class="badge bg-danger">Hapus</span>
    </td>
</tr>
<?php } ?>



<?php
include "koneksi.php";

$keyword = $_POST['keyword'] ?? '';

$sql = "SELECT * FROM article
        WHERE judul LIKE '%$keyword%'
        OR isi LIKE '%$keyword%'
        ORDER BY tanggal DESC";

$hasil = mysqli_query($conn, $sql);

$no = 1;
while ($row = mysqli_fetch_assoc($hasil)) {
?>
<tr>
    <td><?= $no++ ?></td>
    <td><?= $row['judul'] ?></td>
    <td><?= $row['isi'] ?></td>
    <td>
        <?php if ($row['gambar'] != '') { ?>
            <img src="img/<?= $row['gambar'] ?>" width="80">
        <?php } ?>
    </td>
    <td>
        <span class="badge bg-success">Edit</span>
        <span class="badge bg-danger">Hapus</span>
    </td>
</tr>
<?php } ?>



<?php
// pengaman agar tidak ke-load dua kali
if (defined('GALLERY_PAGE_LOADED')) {
    return;
}
define('GALLERY_PAGE_LOADED', true);

include "koneksi.php";

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Gallery</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">


    <div class="row mb-3">
        <div class="col-md-6">
            <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modalTambah">
                <i class="bi bi-plus-lg"></i> Tambah Gallery
            </button>
        </div>

        <div class="col-md-6">
            <input type="text" id="search" class="form-control" placeholder="Cari Gallery...">
        </div>
    </div>

    <div class="table-responsive">
        <table class="table align-middle">
            <thead class="table-dark">
                <tr>
                    <th width="5%">No</th>
                    <th>Deskripsi</th>
                    <th width="25%">Gambar</th>
                    <th width="10%" class="text-center">Aksi</th>
                </tr>
            </thead>
            <!-- DATA HANYA DARI AJAX -->
            <tbody id="result"></tbody>
        </table>
    </div>
</div>

<!-- MODAL TAMBAH -->
<div class="modal fade" id="modalTambah" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" action="gallery_tambah.php">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Gallery</h5>
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nama File Gambar</label>
                        <input
                            type="text"
                            name="gambar"
                            class="form-control"
                            placeholder="contoh: foto1.jpg"
                            required
                        >
                        <small class="text-muted">
                            Gambar harus sudah ada di folder <b>img/</b>
                        </small>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
function loadData(keyword = '') {
    $.ajax({
        url: "gallery_search.php",
        type: "POST",
        data: { keyword: keyword },
        success: function (data) {
            $("#result").html(data);
        }
    });
}

// load data sekali saja
$(document).ready(function () {
    loadData();

    $("#search").on("keyup", function () {
        loadData(this.value);
    });
});
</script>

</body>
</html>


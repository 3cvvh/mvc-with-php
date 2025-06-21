<?php $mahasiswa = $data['siswa']; ?>
<div class="container mt-5">
    <div class="card" style="max-width: 400px; margin: auto;">
        <div class="card-header bg-primary text-white">
            Detail Mahasiswa
        </div>
        <div class="card-body">
            <h5 class="card-title"><?= htmlspecialchars($mahasiswa['nama']) ?></h5>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>ID:</strong> <?= htmlspecialchars($mahasiswa['id_mahasiswa']) ?></li>
                <li class="list-group-item"><strong>Kelas:</strong> <?= htmlspecialchars($mahasiswa['kelas']) ?></li>
                <li class="list-group-item"><strong>Suka:</strong> <?= htmlspecialchars($mahasiswa['suka?']) ?></li>
            </ul>
        </div>
        <div class="card-footer text-end">
            <button id="btn-hapus" class="btn btn-danger me-md-2" type="button">hapus</button>
            <a href="http://localhost/tes/road%20to%20laravel/mvc/pertemuan_10(del)/public/mahasiswa/" class="btn btn-secondary btn-sm">Kembali</a>
        </div>
    </div>
</div>

<!-- SweetAlert CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
document.getElementById('btn-hapus').addEventListener('click', function(e) {
    Swal.fire({
        title: 'Yakin ingin menghapus?',
        text: "Data tidak bisa dikembalikan!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Ya, hapus!',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = "http://localhost/tes/road%20to%20laravel/mvc/pertemuan_10(del)/public/mahasiswa/delete/<?= $mahasiswa['id_mahasiswa'] ?>";
        }
    })
});
</script>
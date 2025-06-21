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
            <a href="http://localhost/tes/road%20to%20laravel/mvc/pertemuan_8(insert_data)/public/mahasiswa/" class="btn btn-secondary btn-sm">Kembali</a>
        </div>
    </div>
</div>
<?php msg::flash(); ?>
<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <h3>daftar mahasiswa</h3>
            <!-- Tombol untuk membuka modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#bootstrapModal">
                tambah
            </button>
            <ol class="list-group list-group-numbered">
                <?php foreach($data["siswa"] as $mhs): ?>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <?php echo $mhs['nama'] ?>
                    <a class="" href="http://localhost/tes/road%20to%20laravel/mvc/pertemuan_8(insert_data)/public/mahasiswa/detail/<?php echo $mhs['id_mahasiswa'] ?>">detail</a>
                </li>
                <?php endforeach; ?>
            </ol>
        </div>
    </div>
    <!-- Modal Bootstrap -->
    <div class="modal fade" id="bootstrapModal" tabindex="-1" aria-labelledby="bootstrapModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="bootstrapModalLabel">tambah data mahasiswa</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
        <form action="http://localhost/tes/road%20to%20laravel/mvc/pertemuan_9(iflash_msg)/public/mahasiswa/tambah" method="post">
            <label for="nama">nama:</label>
            <input type="text" name="nama" id="nama"><br>
                 <label for="kelas">kelas:</label>
            <input type="text" name="kelas" id="kelas"><br>
              
            <center><select name="suka" id="suka">
                <option value="akil">aqil??</option>
               </select>
               </center>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button name="submit" type="submit" class="btn btn-primary">tambah data</button>
                </form>
          </div>
        </div>
      </div>
    </div>
</div>
<!-- Tambahkan ini sebelum tag penutup </body> atau di bawah file ini jika untuk testing -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

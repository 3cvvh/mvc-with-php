 <div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <h3>daftar mahasiswa</h3>
           
<ol class="list-group list-group-numbered">
   <?php foreach($data["siswa"] as $mhs): ?>
  <li class="list-group-item d-flex justify-content-between align-items-center"><?php echo $mhs['nama'] ?> <a class="" href="http://localhost/tes/road%20to%20laravel/mvc/pertemuan_7(database%20wrapper)/public/mahasiswa/detail/<?php echo $mhs['id_mahasiswa'] ?>">detail</a></li>
  <?php endforeach; ?>
            </ol>

        </div>
    </div>
 </div>
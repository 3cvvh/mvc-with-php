 <div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <h3>daftar mahasiswa</h3>
            <table style="  border: 1px solid black" >
  <tr>
    <th style="border: 1px solid black">Nama</th>
    <th style="border: 1px solid black">Kelas</th>
    <th style="border: 1px solid black">❤</th>
    <th style="border: 1px solid black;">aksi</th>
  </tr>
      <?php foreach($data['siswa'] as $mhs): ?>
  <tr>
    <td style="border: 1px solid black"><?php echo $mhs['nama']; ?></td>
    <td style="border: 1px solid black"><?php echo $mhs['kelas'] ?></td>
    <td style="border: 1px solid black"><?php echo $mhs['suka?'] ?></td>
    <td style="border: 1px solid black"><a href="http://localhost/tes/road%20to%20laravel/mvc/joebiden/public/mahasiswa/detail/<?php echo $mhs["id_mahasiswa"] ?>">detail</a></td>
    </tr>
       <?php endforeach; ?>
</table>
        </div>
    </div>
 </div>
<?php $editsiswa = $data['siswa1'] ?>
<form action="http://localhost/tes/road%20to%20laravel/mvc/pertemuan_10(del)/public/mahasiswa/edit2/" method="post">
    <input type="hidden" name="id_mhs" value="<?php echo $editsiswa['id_mahasiswa'] ?>">
    <label for="nama">nama:</label>
    <input type="text" name="nama" value="<?php echo $editsiswa['nama'] ?>"><br>
     <label for="kelas">kelas:</label>
    <input type="text" name="kelas" value="<?php echo $editsiswa['kelas'] ?>"><br>
     <label for="suka?">suka?:</label>
    <input type="text" name="suka?" value="<?php echo $editsiswa['suka'] ?>"><br>
    <button type="submit">submit</button>
</form>
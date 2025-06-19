<h1>daftar teman</h1>
    <?php foreach($data['teman'] as $tem): ?>
<ul>

    <li><?php echo $tem['nama']; ?></li>
    <li><?php echo $tem['kelas']; ?></li>
    <li><?php echo $tem["suka?"]; ?></li>

</ul>
    <?php endforeach; ?>
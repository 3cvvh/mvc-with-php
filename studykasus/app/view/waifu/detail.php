<?php $waifu = $data['waifu'] ?>
<div class="min-h-screen flex flex-col items-center justify-center bg-gradient-to-br from-purple-200 via-pink-100 to-blue-200 font-sans">
    <div class="bg-white rounded-2xl shadow-2xl max-w-md w-full text-center p-12 transition-transform duration-200 hover:scale-105 hover:shadow-pink-200">
        <img src="http://localhost/tes/road%20to%20laravel/mvc/studykasus/public/img/<?= $waifu['foto'] ?>"
            alt="<?= htmlspecialchars($waifu['nama']) ?>"
            class="w-40 h-40 object-cover rounded-full mx-auto mb-7 border-4 border-pink-300 shadow-md">
        <div class="text-3xl font-bold text-pink-600 mb-3"><?= htmlspecialchars($waifu['nama']) ?></div>
        <div class="text-lg text-gray-700 mb-2">Umur: <span class="font-semibold text-gray-900"><?= htmlspecialchars($waifu['umur']) ?></span></div>
        <div class="text-gray-500 text-base">ID: <span class="font-medium"><?= htmlspecialchars($waifu['id_wife']) ?></span></div>
    </div>
    <a href="javascript:history.back()" class="mt-8 inline-block px-6 py-2 rounded-lg bg-pink-500 text-white font-semibold shadow hover:bg-pink-600 transition-colors duration-150">
        &larr; Kembali
    </a>
</div>
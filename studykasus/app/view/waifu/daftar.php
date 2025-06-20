<div class="min-h-screen bg-gradient-to-br from-blue-100 via-purple-100 to-pink-100 py-10">
    <div class="max-w-4xl mx-auto bg-white/90 rounded-xl shadow-2xl p-8">
        <h1 class="text-3xl font-bold text-purple-700 mb-8 text-center">Daftar Waifu</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
        <?php if(!empty($data['waifu'])): ?>
            <?php foreach ($data['waifu'] as $waifu): ?>
            <a href="http://localhost/tes/road%20to%20laravel/mvc/studykasus/public/waifu/detail/<?php echo $waifu['id_wife'] ?>"><div class="bg-white rounded-lg shadow-lg p-4 flex flex-col items-center hover:scale-105 transition-transform">
                <img src="http://localhost/tes/road%20to%20laravel/mvc/studykasus/public/img/<?php echo htmlspecialchars($waifu['foto']); ?>" alt="<?php echo htmlspecialchars($waifu['nama']); ?>" class="w-28 h-28 rounded-full border-4 border-pink-300 object-cover mb-3">
                <div class="font-semibold text-purple-700 text-lg"><?php echo htmlspecialchars($waifu['nama']); ?></div>
                    <div class="text-gray-600 text-sm">Umur: <?php echo htmlspecialchars($waifu['umur']); ?></div>
            </div>
            </a>
            <?php endforeach; ?>
        <?php else: ?>
        </div>
            <div class="text-center text-gray-500">Belum ada waifu yang terdaftar.</div>
        <?php endif; ?>
    </div>
</div>

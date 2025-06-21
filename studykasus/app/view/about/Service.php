<?php $psn = $data['pesan'] ?>
<div class="min-h-screen bg-gradient-to-br from-purple-200 via-pink-100 to-blue-200 py-10 px-4">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-3xl font-bold text-center text-purple-700 mb-8">Pesan Masuk</h1>
        
        <div class="space-y-4">
            <?php if(!empty($data['pesan'])): ?>
                <?php foreach($psn as $pe): ?>
                    <div class="bg-white/90 backdrop-blur-sm rounded-xl shadow-lg p-6 transform transition hover:scale-[1.02]">
                        <div class="text-gray-700 text-lg mb-2"><?= htmlspecialchars($pe['gatau']) ?></div>
                        <div class="text-sm text-gray-500">ID: <?= htmlspecialchars($pe['id_gatau']) ?></div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="text-center text-gray-500 py-8">Belum ada pesan.</div>
            <?php endif; ?>
        </div>
    </div>
</div>
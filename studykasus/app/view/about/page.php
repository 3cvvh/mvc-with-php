<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-100 via-purple-100 to-pink-100">
    <div class="bg-white rounded-xl shadow-xl p-8 max-w-lg w-full">
        <h1 class="text-2xl font-bold text-purple-700 mb-4 text-center">Profil</h1>
        <div class="mb-6 text-center">
            <p class="text-lg text-gray-800 font-semibold">
                Halo, nama saya 
                <span class="text-blue-600">
                    <?php echo $data["nama"] ?? "gada nama"; ?>
                </span>
                <br>
                Saya berumur 
                <span class="text-pink-600">
                    <?php echo $data["umur"] ?? '18' ?>
                </span>
                tahun.
            </p>
        </div>
        <h4 class="text-lg font-bold text-purple-600 mb-2">Tentang</h4>
        <p class="text-gray-700 bg-purple-50 rounded p-4 shadow-inner">
            <?php echo $data["tentang"] ?? 'gada' ?>
        </p>
    </div>
</div>
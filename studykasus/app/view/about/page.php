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
            <!-- Bulatan galeri gambar -->
            <div class="flex justify-center mt-6">
                <img src="http://localhost/tes/road%20to%20laravel/mvc/studykasus/public/img/OC.jpeg" alt="Gallery Besar" class="w-44 h-44 rounded-full border-8 border-blue-400 shadow-2xl bg-white object-cover hover:scale-105 transition-transform">
            </div>
        </div>
        <h4 class="text-lg font-bold text-purple-600 mb-2">Tentang</h4>
        <p class="text-gray-700 bg-purple-50 rounded p-4 shadow-inner">
            <?php echo $data["tentang"] ?? 'gada' ?>
        </p>
    </div>
</div>
<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-purple-200 via-pink-100 to-blue-200 p-4">
    <div class="max-w-md w-full space-y-8">
        <div class="text-center">
            <?php msg::getmsg(); ?>
            <h2 class="text-4xl font-bold text-pink-600 mb-2">Hubungi Kami</h2>
            <p class="text-gray-600">Kirim pesan atau saran kepada saya</p>
        </div>
        
        <form method="post" action="http://localhost/tes/road%20to%20laravel/mvc/studykasus/public/about/tambah"
            class="bg-white/80 backdrop-blur-sm rounded-xl shadow-xl p-8 space-y-6 transform transition hover:scale-[1.02]">
            <div>
                <label for="pengaduan" class="block text-lg font-semibold text-pink-600 mb-3">Pesan Anda:</label>
                <textarea name="pesan" id="pengaduan"
                    class="w-full h-40 p-4 border-2 border-pink-200 rounded-xl focus:outline-none focus:border-pink-400 focus:ring-2 focus:ring-pink-200 resize-none transition-all duration-200"
                    placeholder="Tulis pesan Anda di sini..."
                    required></textarea>
            </div>
            
            <button type="submit"
                class="w-full py-3 px-4 bg-gradient-to-r from-pink-500 to-purple-500 text-white text-lg font-bold rounded-xl shadow-lg hover:from-pink-600 hover:to-purple-600 transform transition-all duration-200 hover:-translate-y-1">
                Kirim Pesan
            </button>
        </form>
    </div>
</div>
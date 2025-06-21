<!-- Modal toggle -->
<button id="tambahWaifuButton" data-modal-target="tambahWaifuModal" data-modal-toggle="tambahWaifuModal" class="fixed bottom-4 right-4 bg-gradient-to-r from-pink-500 to-purple-500 text-white px-4 py-2 rounded-full shadow-lg hover:from-pink-600 hover:to-purple-600 transition-all duration-200 flex items-center space-x-2" type="button">
    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
    </svg>
    <span>Tambah Waifu</span>
</button>

<!-- Main modal -->
<div id="tambahWaifuModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Tambah Waifu Baru
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="tambahWaifuModal">
                    <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form class="p-4 md:p-5" method="post" action="http://localhost/tes/road%20to%20laravel/mvc/studykasus/public/waifu/tambah">
                <div class="grid gap-4 mb-4">
                    <div class="col-span-2">
                        <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                        <input type="text" name="nama" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required>
                    </div>
                    <div class="col-span-2">
                        <label for="umur" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Umur</label>
                        <input type="number" name="umur" id="umur" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required>
                    </div>
                    <div class="col-span-2">
                        <label for="foto" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Foto</label>
                        <input type="file" name="foto" id="foto" accept="image/*" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none" required>
                    </div>
                </div>
                <button type="submit" class="text-white inline-flex items-center bg-gradient-to-r from-pink-500 to-purple-500 hover:from-pink-600 hover:to-purple-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                    <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                    Tambah Waifu
                </button>
            </form>
        </div>
    </div>
</div>
<?php msg::getmsg(); ?>
<div class="min-h-screen bg-gradient-to-br from-blue-100 via-purple-100 to-pink-100 py-10">
    <div class="max-w-4xl mx-auto bg-white/90 rounded-xl shadow-2xl p-8">
        <h1 class="text-3xl font-bold text-purple-700 mb-8 text-center">Daftar Waifu</h1>
        <form method="get" action="http://localhost/tes/road%20to%20laravel/mvc/studykasus/public/waifu/cari" class="mb-8 flex justify-center">
            <input type="text" name="key" placeholder="Cari waifu..." value="<?= isset($_GET['search']) ? htmlspecialchars($_GET['search']) : '' ?>" class="w-full max-w-xs px-4 py-2 border-2 border-pink-300 rounded-l-lg focus:outline-none focus:border-pink-500" autocomplete="off" />
            <button type="submit" class="px-4 py-2 bg-pink-500 text-white font-semibold rounded-r-lg hover:bg-pink-600 transition-colors">Cari</button>
        </form>
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

<!-- Add Flowbite JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

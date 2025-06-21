<?php $waifu = $data['waifu'] ?>
<div class="min-h-screen flex flex-col items-center justify-center bg-gradient-to-br from-purple-200 via-pink-100 to-blue-200 p-4">
    <div class="bg-white/90 backdrop-blur-sm rounded-3xl shadow-2xl max-w-md w-full text-center p-12 transform transition-all duration-300 hover:scale-[1.02] hover:shadow-pink-200/50">
        <div class="relative mb-8">
            <div class="absolute inset-0 bg-gradient-to-r from-pink-400 to-purple-400 rounded-full blur opacity-20"></div>
            <img src="http://localhost/tes/road%20to%20laravel/mvc/studykasus/public/img/<?= $waifu['foto'] ?>"
                alt="<?= htmlspecialchars($waifu['nama']) ?>"
                class="relative w-44 h-44 object-cover rounded-full mx-auto border-4 border-pink-300 shadow-xl">
        </div>
        <div class="space-y-4">
            <div class="text-4xl font-bold bg-gradient-to-r from-pink-500 to-purple-500 text-transparent bg-clip-text">
                <?= htmlspecialchars($waifu['nama']) ?>
            </div>
            <div class="text-xl text-gray-700">
                Umur: <span class="font-semibold text-pink-600"><?= htmlspecialchars($waifu['umur']) ?></span>
            </div>
        </div>
    </div>
    <div class="flex flex-col sm:flex-row gap-4 mt-8">
        <a href="javascript:history.back()" 
            class="group inline-flex items-center px-6 py-3 rounded-xl bg-white/80 backdrop-blur-sm text-pink-600 font-semibold shadow-lg hover:bg-pink-500 hover:text-white transition-all duration-200">
            <svg class="w-5 h-5 mr-2 transform group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
            </svg>
            Kembali
        </a>
        <a href="javascript:void(0);" id="openEditModalBtn"
            class="inline-flex items-center px-6 py-3 rounded-xl bg-gradient-to-r from-yellow-400 to-yellow-600 text-white font-semibold shadow-lg hover:from-yellow-500 hover:to-yellow-700 transition-all duration-200">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536M9 13l6-6m2 2l-6 6m-2 2h6" />
            </svg>
            Edit
        </a>
        <button id="hapusBtn" type="button" class="inline-flex items-center px-6 py-3 rounded-xl bg-gradient-to-r from-red-500 to-pink-500 text-white font-semibold shadow-lg hover:from-red-600 hover:to-pink-600 transition-all duration-200">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
            Hapus
        </button>
    </div>
    <div id="editModal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black bg-opacity-40">
      <div class="bg-white rounded-xl shadow-xl w-full max-w-md mx-auto p-8 relative">
        <button id="closeEditModalBtn" class="absolute top-3 right-3 text-gray-400 hover:text-gray-700 text-2xl">&times;</button>
        <h2 class="text-2xl font-bold text-center text-yellow-600 mb-6">Edit Data Waifu</h2>

        <form method="post" action="http://localhost/tes/road%20to%20laravel/mvc/studykasus/public/waifu/update/" class="space-y-5">
            <input type="hidden" name="id_wife" value="<?php echo $waifu['id_wife'] ?>">
            <input type="hidden" name="foto_old" value="<?php echo $waifu['foto'] ?>">
            <div>
            <label for="edit_nama" class="block mb-1 text-yellow-600 font-semibold">Nama</label>
            <input type="text" name="nama" id="edit_nama" value="<?= htmlspecialchars($waifu['nama']) ?>" class="w-full border border-yellow-200 rounded-lg p-3 focus:outline-none focus:border-yellow-400" required>
          </div>
          <div>
            <label for="edit_umur" class="block mb-1 text-yellow-600 font-semibold">Umur</label>
            <input type="number" name="umur" id="edit_umur" value="<?= htmlspecialchars($waifu['umur']) ?>" class="w-full border border-yellow-200 rounded-lg p-3 focus:outline-none focus:border-yellow-400" required>
          </div>
          <div>
            <label for="edit_foto" class="block mb-1 text-yellow-600 font-semibold">Foto (kosongkan jika tidak diubah)</label>
            <input name="foto" type="file"  id="edit_foto" accept="image/*" class="w-full border border-yellow-200 rounded-lg p-2 focus:outline-none focus:border-yellow-400">
          </div>
          <button type="submit" class="w-full py-3 bg-gradient-to-r from-yellow-400 to-yellow-600 text-white font-bold rounded-lg shadow hover:from-yellow-500 hover:to-yellow-700 transition-all duration-200">Simpan Perubahan</button>
        </form>
      </div>
    </div>

    <script>
      const openEditModalBtn = document.getElementById('openEditModalBtn');
      const closeEditModalBtn = document.getElementById('closeEditModalBtn');
      const editModal = document.getElementById('editModal');
      openEditModalBtn.addEventListener('click', () => editModal.classList.remove('hidden'));
      closeEditModalBtn.addEventListener('click', () => editModal.classList.add('hidden'));
      window.addEventListener('click', (e) => {
        if (e.target === editModal) editModal.classList.add('hidden');
      });
    </script>
</div>
<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.getElementById('hapusBtn').addEventListener('click', function() {
        Swal.fire({
            title: 'Yakin ingin menghapus?',
            text: 'Data waifu akan dihapus permanen!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#e11d48',
            cancelButtonColor: '#6b7280',
            confirmButtonText: 'Ya, hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = 'http://localhost/tes/road%20to%20laravel/mvc/studykasus/public/waifu/hapus/<?= $waifu['id_wife'] ?>';
            }
        });
    });
</script>
<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-yellow-100 via-pink-100 to-purple-200">
    <div class="bg-white rounded-2xl shadow-2xl p-10 max-w-lg w-full text-center transition-transform duration-300 hover:scale-105 hover:shadow-yellow-200 animate-fade-in">
        <div class="flex justify-center mb-4">
            <svg class="w-14 h-14 text-yellow-400 animate-bounce" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" fill="#fef9c3"/>
                <path stroke-linecap="round" stroke-linejoin="round" d="M8 14s1.5 2 4 2 4-2 4-2" />
                <circle cx="9" cy="10" r="1" fill="#fbbf24"/>
                <circle cx="15" cy="10" r="1" fill="#fbbf24"/>
            </svg>
        </div>
        <h1 class="text-3xl font-extrabold text-pink-600 mb-3 tracking-wide drop-shadow">Halaman Kocak</h1>
        <p class="text-gray-700 text-lg mb-6">Selamat datang di halaman paling kocak se-Indonesia Raya! 😆<br>Jangan lupa ketawa sebelum pulang.</p>
        <div class="flex justify-center">
            <span class="inline-block bg-yellow-100 text-yellow-700 px-4 py-2 rounded-full text-sm font-semibold shadow hover:bg-yellow-200 transition">Klik tombol di bawah kalau kamu lucu!</span>
        </div>
        <button onclick="alert('Kamu memang lucu! 😂')" class="mt-6 bg-pink-500 hover:bg-pink-600 text-white font-bold py-2 px-6 rounded-full shadow transition">Aku Lucu!</button>
    </div>
    <style>
        @keyframes fade-in {
            from { opacity: 0; transform: translateY(40px);}
            to { opacity: 1; transform: translateY(0);}
        }
        .animate-fade-in {
            animation: fade-in 0.8s ease;
        }
    </style>
</div>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php echo $data["judul"]; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
</head>
<body class="bg-gradient-to-br from-blue-100 via-purple-100 to-pink-100 min-h-screen">
  <!-- Navbar -->
  <nav class="bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-500 shadow-lg rounded-b-3xl px-4 py-3">
    <div class="max-w-7xl mx-auto flex items-center justify-between">
      <div class="flex items-center space-x-3">
        <i class="fa-solid fa-cube text-white text-2xl"></i>
        <span class="text-white font-bold text-2xl tracking-wider drop-shadow">portofolio</span>
      </div>
      <div class="hidden md:flex space-x-6 items-center">
        <a href="http://localhost/tes/road%20to%20laravel/mvc/studykasus/public/" class="text-white font-medium hover:bg-white/20 px-4 py-2 rounded-xl transition-all duration-200 flex items-center gap-2">
          <i class="fa-solid fa-house"></i> Home
        </a>
        <a href="http://localhost/tes/road%20to%20laravel/mvc/studykasus/public/about/page" class="text-white font-medium hover:bg-white/20 px-4 py-2 rounded-xl transition-all duration-200 flex items-center gap-2">
          <i class="fa-solid fa-user"></i> About
        </a>
        <a href="http://localhost/tes/road%20to%20laravel/mvc/studykasus/public/about/service" class="text-white font-medium hover:bg-white/20 px-4 py-2 rounded-xl transition-all duration-200 flex items-center gap-2">
          <i class="fa-solid fa-gear"></i> Services
        </a>
        <a href="http://localhost/tes/road%20to%20laravel/mvc/studykasus/public/about/" class="text-white font-medium hover:bg-white/20 px-4 py-2 rounded-xl transition-all duration-200 flex items-center gap-2">
          <i class="fa-solid fa-envelope"></i> Contact
        </a>
          <a href="http://localhost/tes/road%20to%20laravel/mvc/studykasus/public/waifu/" class="text-white font-medium hover:bg-white/20 px-4 py-2 rounded-xl transition-all duration-200 flex items-center gap-2">
          <i class="fa-solid fa-envelope"></i> waifu
        </a>
      </div>
      <!-- Hamburger -->
      <button id="menu-btn" class="md:hidden text-white text-3xl focus:outline-none">
        <i class="fa-solid fa-bars"></i>
      </button>
    </div>
    <!-- Mobile Menu -->
    <div id="mobile-menu" class="md:hidden max-h-0 overflow-hidden transition-all duration-500 bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-500 rounded-b-2xl mt-2">
      <div class="flex flex-col px-4 py-2 space-y-2">
        <a href="#" class="text-white font-medium hover:bg-white/20 px-4 py-2 rounded-xl transition-all duration-200 flex items-center gap-2">
          <i class="fa-solid fa-house"></i> Home
        </a>
        <a href="#" class="text-white font-medium hover:bg-white/20 px-4 py-2 rounded-xl transition-all duration-200 flex items-center gap-2">
          <i class="fa-solid fa-user"></i> About
        </a>
        <a href="#" class="text-white font-medium hover:bg-white/20 px-4 py-2 rounded-xl transition-all duration-200 flex items-center gap-2">
          <i class="fa-solid fa-gear"></i> Services
        </a>
        <a href="#" class="text-white font-medium hover:bg-white/20 px-4 py-2 rounded-xl transition-all duration-200 flex items-center gap-2">
          <i class="fa-solid fa-envelope"></i> Contact
        </a>
        <button class="w-full mt-2 px-5 py-2 bg-white text-pink-600 font-bold rounded-full shadow hover:bg-pink-100 transition-all duration-200">
          <i class="fa-solid fa-right-to-bracket mr-2"></i>Login
        </button>
      </div>
    </div>
  </nav>
  <script>
    // Hamburger menu toggle
    const btn = document.getElementById('menu-btn');
    const menu = document.getElementById('mobile-menu');
    btn.addEventListener('click', () => {
      if (menu.classList.contains('max-h-0')) {
        menu.classList.remove('max-h-0');
        menu.classList.add('max-h-96');
      } else {
        menu.classList.add('max-h-0');
        menu.classList.remove('max-h-96');
      }
    });
  </script>
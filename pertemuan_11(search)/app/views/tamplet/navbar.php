<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm sticky-top">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#">MVC App</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link <?php echo isset($data['active']['home']) ? $data['active']['home'] : ''; ?>" aria-current="page" href="http://localhost/tes/road%20to%20laravel/mvc/pertemuan_11(search)/public/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo isset($data['active']['about']) ? $data['active']['about'] : ''; ?>" href="http://localhost/tes/road%20to%20laravel/mvc/pertemuan_11(search)/public/about/">About</a>
        </li>
          <li class="nav-item">
          <a class="nav-link" href="http://localhost/tes/road%20to%20laravel/mvc/pertemuan_11(search)/public/mahasiswa/">mahasiwa</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
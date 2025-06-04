<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <!-- Logo -->
    <a href="<?= base_url('principal') ?>" class="logo-container">
      <img src="<?= base_url('public/assets/logo.png') ?>" alt="Logo Ibera Wave" class="navbar-logo" style="height: 40px;">
    </a>

    <!-- Botón hamburguesa -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
      data-bs-target="#navbarNav" aria-controls="navbarNav"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Menú colapsable -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= base_url('principal') ?>">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('quienes_somos') ?>">Quiénes Somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('acercade') ?>">Acerca de</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('registro') ?>">Registrarse</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('login') ?>">Login</a>
        </li>
      </ul>

      <!-- Buscador -->
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
        <button class="btn btn-custom-search btn-search-compact" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>

<!DOCTYPE html>
<html lang="es">
  <head>
    <?= view('front/head_view'); ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
  <?= view('front/navbar_view'); ?>

<!-- Contenedor principal del carrusel -->
<div id="mainCarousel" class="carousel slide" data-bs-ride="carousel" aria-label="Carrusel de productos destacados">

  <!-- Indicadores del carrusel -->
  <div class="carousel-indicators">
    <!-- Cada botón corresponde a un slide, comienza desde el 0 -->
    <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="0" class="active" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
    <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="5" aria-label="Slide 6"></button>
  </div>

  <!-- Contenedor de los slides -->
  <div class="carousel-inner">

    <!-- Slide 1 -->
    <div class="carousel-item active position-relative">
      <img class="d-block w-100" src="<?= base_url('public/assets/carousel_1.webp'); ?>" alt="Nueva colección juvenil">
      <!-- Overlay de texto -->
      <div class="carousel-caption d-none d-md-block bg-light bg-opacity-75 rounded p-3 text-dark">
        <h5>Moon Vibes 🌙</h5>
        <p>Explora nuestra nueva colección casual</p>
        <a href="#" class="btn btn-dark">Ver colección</a>
      </div>
    </div>

    <!-- Slide 2 -->
    <div class="carousel-item position-relative">
      <img class="d-block w-100" src="<?= base_url('public/assets/carousel_2.webp'); ?>" alt="Outfits casuales juveniles">
      <div class="carousel-caption d-none d-md-block bg-light bg-opacity-75 rounded p-3 text-dark">
        <h5>Look juvenil</h5>
        <p>Comodidad + estilo para todos los días</p>
        <a href="#" class="btn btn-dark">Comprar ahora</a>
      </div>
    </div>

    <!-- Slide 3 -->
    <div class="carousel-item position-relative">
      <img class="d-block w-100" src="<?= base_url('public/assets/carousel_3.webp'); ?>" alt="Lookbook estilo Moon">
      <div class="carousel-caption d-none d-md-block bg-light bg-opacity-75 rounded p-3 text-dark">
        <h5>Moon Essentials</h5>
        <p>Básicos que combinan con todo</p>
        <a href="#" class="btn btn-dark">Descubrir</a>
      </div>
    </div>

    <!-- Slide 4 -->
    <div class="carousel-item position-relative">
      <img class="d-block w-100" src="<?= base_url('public/assets/carousel_4.webp'); ?>" alt="Estilo urbano chic para chicas">
      <div class="carousel-caption d-none d-md-block bg-light bg-opacity-75 rounded p-3 text-dark">
        <h5>Urbano & Chic</h5>
        <p>Para las que marcan tendencia</p>
        <a href="#" class="btn btn-dark">Ver más</a>
      </div>
    </div>

    <!-- Slide 5 -->
    <div class="carousel-item position-relative">
      <img class="d-block w-100" src="<?= base_url('public/assets/carousel_5.webp'); ?>" alt="Moda cómoda y fresca">
      <div class="carousel-caption d-none d-md-block bg-light bg-opacity-75 rounded p-3 text-dark">
        <h5>Casual & Cómoda</h5>
        <p>Tu estilo diario hecho con amor</p>
        <a href="#" class="btn btn-dark">Comprar</a>
      </div>
    </div>

  </div>

  <!-- Botón para ir al slide anterior -->
  <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Anterior</span>
  </button>

  <!-- Botón para ir al siguiente slide -->
  <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Siguiente</span>
  </button>
</div>


  <!-- 🔹 Carrusel de productos tipo Portsaid -->
  <!-- 🔹 Carrusel de productos tipo Portsaid -->
  <div class="container py-5">
    <h3 class="mb-4 text-center">Productos destacados</h3>
    <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">

        <!-- Slide 1 -->
        <div class="carousel-item active">
          <div class="row text-center">
            <div class="col-md-3">
              <div class="card">
                <img src="public/assets/catalogo_1.webp" class="card-img-top" alt="Producto 1">
                <div class="card-body">
                  <h6 class="card-title">WADE Jumpsuit</h6>
                  <p class="card-text">$79.000</p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card">
                <img src="public/assets/catalogo_2.webp" class="card-img-top" alt="Producto 2">
                <div class="card-body">
                  <h6 class="card-title">LORA Pant</h6>
                  <p class="card-text"><del>$50.000</del> <span class="precio-oferta">$45.000</span></p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card">
                <img src="public/assets/catalogo_3.webp" class="card-img-top" alt="Producto 3">
                <div class="card-body">
                  <h6 class="card-title">CECI Top</h6>
                  <p class="card-text">$39.000</p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card">
                <img src="public/assets/catalogo_4.webp" class="card-img-top" alt="Producto 4">
                <div class="card-body">
                  <h6 class="card-title">VERA Top</h6>
                  <p class="card-text">$39.000</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
          <div class="row text-center">
            <div class="col-md-3">
              <div class="card">
                <img src="public/assets/catalogo_5.webp" class="card-img-top" alt="Producto 5">
                <div class="card-body">
                  <h6 class="card-title">MANON Jumpsuit</h6>
                  <p class="card-text"><del>$98.000</del> <span class="precio-oferta">$89.000</span></p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card">
                <img src="public/assets/catalogo_6.webp" class="card-img-top" alt="Producto 6">
                <div class="card-body">
                  <h6 class="card-title">HAL Dress</h6>
                  <p class="card-text"><del>$98.000</del> <span class="precio-oferta">$79.000</span></p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card">
                <img src="public/assets/catalogo_7.webp" class="card-img-top" alt="Producto 7">
                <div class="card-body">
                  <h6 class="card-title">LENNY Jacket</h6>
                  <p class="card-text"><del>$98.000</del> <span class="precio-oferta">$69.000</span></p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card">
                <img src="public/assets/catalogo_8.webp" class="card-img-top" alt="Producto 8">
                <div class="card-body">
                  <h6 class="card-title">LEYON Coat</h6>
                  <p class="card-text"><del>$100.000</del> <span class="precio-oferta">$85.000</span></p>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

      <!-- Controles de navegación -->
      <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>
  </div>

  
  <!-- 🔹 Carrusel de productos  -->
<section class="destacados">
  <div class="producto">
    <img src="public/assets/pantalon_1.webp" alt="Pantalones" class="img-principal">
    <img src="public/assets/pantalon_2.webp" alt="Pantalones Hover" class="img-hover">
    <div class="overlay">
      <h2>PANTALONES</h2>
      <p>desde $76.900</p>
    </div>
  </div>

  <div class="producto">
    <img src="public/assets/top_1.webp" alt="Tops" class="img-principal">
    <img src="public/assets/top_2.webp" alt="Tops Hover" class="img-hover">
    <div class="overlay">
      <h2>TOPS</h2>
      <p>desde $54.900</p>
    </div>
  </div>

  <div class="producto">
    <img src="public/assets/vestido_1.webp" alt="Vestidos" class="img-principal">
    <img src="public/assets/vestido_2.webp" alt="Vestidos Hover" class="img-hover">
    <div class="overlay">
      <h2>VESTIDOS</h2>
      <p>desde $85.000</p>
    </div>
  </div>
</section>



  <!-- Bootstrap JS (por si no lo tenés aún) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
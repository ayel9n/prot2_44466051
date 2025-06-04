<?= $this->extend('front/base_view') ?>

<?= $this->section('contenido') ?>

<section class="quienes-somos-section container my-5">
  <h2 class="text-center mb-4">Quiénes Somos</h2>
  <p class="text-center mb-5">
    Nuestra empresa surgió con el objetivo de ofrecer moda accesible, cómoda y con estilo. Fundada en 2020 por un grupo de apasionados del diseño, hoy seguimos creciendo gracias al trabajo y compromiso de un equipo talentoso.
  </p>

  <div class="row justify-content-center">
    <!-- Card 1 -->
    <div class="col-md-4 mb-4">
      <div class="card h-100 shadow-sm">
        <img src="public/assets/integrante1.jpg" class="card-img-top" alt="Directora General">
        <div class="card-body text-center">
          <h5 class="card-title">Ana Martínez</h5>
          <p class="card-text">Fundadora & Directora General. Encargada de liderar la visión y estrategia de la marca.</p>
        </div>
      </div>
    </div>
    <!-- Card 2 -->
    <div class="col-md-4 mb-4">
      <div class="card h-100 shadow-sm">
        <img src="public/assets/integrante2.jpg" class="card-img-top" alt="Diseñador Principal">
        <div class="card-body text-center">
          <h5 class="card-title">Lucia Fernández</h5>
          <p class="card-text">Diseñadora Principal. Responsable de las colecciones y tendencias de temporada.</p>
        </div>
      </div>
    </div>
    <!-- Card 3 -->
    <div class="col-md-4 mb-4">
      <div class="card h-100 shadow-sm">
        <img src="public/assets/integrante3.jpg" class="card-img-top" alt="Marketing y Redes">
        <div class="card-body text-center">
          <h5 class="card-title">Sofía Ruiz</h5>
          <p class="card-text">Marketing & Redes. Encargada de conectar la marca con nuestros clientes en redes.</p>
        </div>
      </div>
    </div>
  </div>
</section>


<?= $this->endSection() ?>

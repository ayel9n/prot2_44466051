<?= $this->extend('front/base_view') ?>

<?= $this->section('contenido') ?>

<!-- Texto e imagen -->
<section class="elaboration-section">
  <div class="elaboration-image">
    <img src="public/assets/acerca_de.webp" alt="Proceso de confección">
  </div>
  <div class="elaboration-text">
    <h2>Elaboración</h2>
    <p>
      Vivir de manera consciente forma parte natural del espíritu de <strong>MOON Clothes</strong>. Diseñamos y producimos nuestras colecciones con estándares éticos, respeto hacia quienes las elaboran y un compromiso real con el entorno.
    </p>

    <h3>Producción</h3>
    <p>
      Todas nuestras prendas son confeccionadas a mano en talleres locales de Corrientes y alrededores. Trabajamos con equipos liderados por mujeres, bajo prácticas justas, y colaboramos con familias que cosen desde sus hogares.
    </p>

    <h3>Materiales</h3>
    <p>
      Usamos fibras naturales como lino, algodón y viscosa. Su suavidad, durabilidad y naturaleza biodegradable nos permite ofrecer prendas nobles y responsables con el ambiente.
    </p>

    <h3>Proceso</h3>
    <p>
      Nuestras colecciones son reducidas y atemporales. Diseñamos con intención, respetando los tiempos creativos y priorizando la calidad por sobre la cantidad.
    </p>
  </div>

  <!-- Mapa insertado -->
  <div class="map-container">
    <iframe 
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3550.6016851663623!2d-58.83269412521466!3d-27.471545816228094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94456cb8d7cb6a71%3A0x23ef56b8cc7e1193!2sCorrientes%2C%20Argentina!5e0!3m2!1ses!2sar!4v1717182058910!5m2!1ses!2sar" 
      width="100%" 
      height="300" 
      style="border:0;" 
      allowfullscreen="" 
      loading="lazy" 
      referrerpolicy="no-referrer-when-downgrade">
    </iframe>
  </div>
</section>
<?= $this->endSection() ?>

<?= $this->extend('front/base_view') ?>

<?= $this->section('contenido') ?>

<div class="form-container">

<form>
  <div class="form-row align-items-center">
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInput">Correo</label>
      <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="ej: juanlopez06@gmail.com">
    </div>
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInputGroup">Contraseña</label>
      <div class="input-group mb-2">
        <div class="input-group-prepend"></div>
        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="contrseña">
      </div>
    </div>
    <div class="col-auto">
      <div class="form-check mb-2">
        <input class="form-check-input" type="checkbox" id="autoSizingCheck">
        <label class="form-check-label" for="autoSizingCheck">
          Remember me
        </label>
      </div>
    </div>
    <div class="col-auto">
      <button type="submit" class="btn btn-primary mb-2">Login in</button>
    </div>
  </div>
</form>

</div>

<?= $this->endSection() ?>

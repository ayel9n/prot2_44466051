<?= $this->extend('front/base_view') ?>

<?= $this->section('contenido') ?>

<div class="form-container">
  <form>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="usuario">Usuario</label>
        <input type="text" class="form-control" id="usuario" placeholder="Usuario">
      </div>
      <div class="form-group col-md-6">
        <label for="correo">Correo</label>
        <input type="email" class="form-control" id="correo" placeholder="Correo">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="password">Contraseña</label>
        <input type="password" class="form-control" id="password" placeholder="Contraseña">
      </div>
      <div class="form-group col-md-6">
        <label for="inputCity">Ciudad</label>
        <input type="text" class="form-control" id="inputCity" placeholder="ej: Corrientes Capital">
      </div>
    </div>

    <div class="form-group">
      <label for="inputAddress">Dirección</label>
      <input type="text" class="form-control" id="inputAddress" placeholder="ej: Departamento, estudio o piso">
    </div>

    <div class="form-group form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
      He podido leer y entiendo la Política de Privacidad
    </label>
    </div>
<div class="btm-registro"> 
  <button type="submit" class="btn btn-primary">Crear cuentas</button> </div>
    
  </form>
</div>

<?= $this->endSection() ?>

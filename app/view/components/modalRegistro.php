<?php 
require_once __DIR__ . '/../../controller/C_Perfil.php';
require_once __DIR__ . '/../../controller/C_Empresa.php';
require_once __DIR__ . '/../../controller/C_TipoDocumento.php';

$C_Perfil = new C_Perfil();
$perfiles = $C_Perfil->obtenerPerfiles();

$M_Empresa = new M_Empresa();
$empresas = $M_Empresa->obtenerEmpresas();

$M_TipoDocumento = new M_TipoDocumento();
$TipoDocumentos = $M_TipoDocumento->obtenerTipoDocumentos();
?>

<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content bg-light bg-opacity-95">
      <div class="modal-header">
        <h5 class="modal-title" id="registerModalLabel">Registro de Usuario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <!-- Perfil -->
          <div class="row mb-3">
            <div class="col-4">
              <label for="perfil" class="form-label">Perfil</label>
              <select class="form-select" id="perfil" required>
                <?php foreach ($perfiles as $perfil): ?>
                  <option value="<?php echo $perfil['ID_PERFIL']; ?>">
                      <?php echo $perfil['PERFIL']; ?>
                  </option>
                <?php endforeach; ?>
              </select>
            </div>
            <!-- Empresa -->
            <div class="col-8">
              <label for="empresa" class="form-label">Empresa</label>
              <select class="form-select" id="empresa" required>
                <?php foreach ($empresas as $empresa): ?>
                  <option value="<?php echo $empresa['ID_EMPRESA']; ?>">
                      <?php echo $empresa['EMPRESA']; ?>
                  </option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>

          <div class="row mb-3">
            <!-- Tipo de Documento -->
            <div class="col-4">
              <label for="tipoDocumento" class="form-label">Tipo de Doc.</label>
              <select class="form-select" id="tipoDocumento" required>
                <?php foreach ($TipoDocumentos as $TipoDocumento): ?>
                  <option value="<?php echo $TipoDocumento['ID_TIPO_DOCUMENTO']; ?>">
                      <?php echo $TipoDocumento['TIPO_DOCUMENTO']; ?>
                  </option>
                <?php endforeach; ?>
              </select>
            </div>

            <!-- Número de Documento -->
            <div class="col-4">
              <label for="numeroDocumento" class="form-label">Número de Documento</label>
              <input type="text" class="form-control" id="numeroDocumento" placeholder="Ingresa tu número de documento" required>
            </div>
          </div>

          <div class="row mb-3">
          <!-- Nombres -->
            <div class="col-4">
              <label for="nombres" class="form-label">Nombres</label>
              <input type="text" class="form-control" id="nombres" placeholder="Ingresa tus nombres" required>
            </div>

            <!-- Primer Apellido -->
            <div class="col-4">
              <label for="primerApellido" class="form-label">Primer Apellido</label>
              <input type="text" class="form-control" id="primerApellido" placeholder="Ingresa tu primer apellido" required>
            </div>

            <!-- Segundo Apellido -->
            <div class="col-4">
              <label for="segundoApellido" class="form-label">Segundo Apellido</label>
              <input type="text" class="form-control" id="segundoApellido" placeholder="Ingresa tu segundo apellido">
            </div>
          </div>

          <div class="row mb-3">
            <!-- Correo -->
            <div class="col-8">
              <label for="correo" class="form-label">Correo Electrónico</label>
              <input type="email" class="form-control" id="correo" placeholder="ejemplo@dominio.com" required>
            </div>

            <!-- Contraseña -->
            <div class="col-4">
              <label for="contraseña" class="form-label">Contraseña</label>
              <input type="password" class="form-control" id="contraseña" placeholder="Ingresa una contraseña" required>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Registrar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
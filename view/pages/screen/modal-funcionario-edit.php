
<div class="modal fade" id="modal-funcionario-edit<?php echo $display['CED_FUN']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar funcionario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="procedimiento_add.php" method="POST">
            <div class="form-row">
              <div class="col-md-12 mb-3">
                <label for="validationServer01">Cédula</label>
                <input type="text"   class="form-control " id="validationServer01" required name="cliente-id" value="<?php echo $display['CED_FUN'] ?>">
                <div class="valid-feedback" >
                  Excelente!
                </div>
              </div>

              <div class="col-md-12 mb-3">
                <label for="validationServer02">Procedimiento</label>
                <input type="text" class="form-control" id="validationServer02" required name="cliente-nombre" value="<?php echo $display['NOMBRE_PROCE'] ?>">
                <div class="valid-feedback" >
                   Excelente!
                </div>
              </div>

              <div class="col-md-12 mb-3">
                <label for="validationServer02">Cargo</label>
                <input type="text" class="form-control" id="validationServer02"  required name="cliente-nombre" value="<?php echo $display['NOMBRE_CARGO'] ?>">
                <div class="valid-feedback" >
                   Excelente!
                </div>
              </div>

              <div class="col-md-12 mb-3">
                <label for="validationServer02">Nombres completos</label>
                <input type="text" class="form-control" id="validationServer02"  required name="cliente-nombre" value="<?php echo $display['NOMBRE_COMPLETOS'] ?>">
                <div class="valid-feedback">
                   Excelente!
                </div>
              </div>

              <div class="col-md-12 mb-3">
                <label for="validationServer02">Contacto</label>
                <input type="text" class="form-control" id="validationServer02"  required name="cliente-nombre" value="<?php echo $display['CELULAR'] ?>">
                <div class="valid-feedback">
                   Excelente!
                </div>
              </div>

              <div class="col-md-12 mb-3">
                <label for="validationServer02">Correo electrónico</label>
                <input type="text" class="form-control" id="validationServer02"  required name="cliente-nombre" value="<?php echo $display['CORREO'] ?>">
                <div class="valid-feedback">
                   Excelente!
                </div>
              </div>

                <div class="modal-footer">
                    <button class="btn col-md-12" type="submit">Guardar</button>
                </div>
        </form>
      </div>
    </div>
  </div>
</div>
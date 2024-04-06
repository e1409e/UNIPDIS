<?php include("../header.php") ?>
<?php  include("../connect.php") ?>

    <!-- AGREGAR INCIDENCIAS -->


<div class="container w-75">
<h2 class="mt-5 item-title text-center">Agregar Incidencias</h2> 
  <div class="card card-body kardA">
     <form action="/UNIPDIS/includes/guardados/save_RP.php" method="POST" class="row justify-content-center align-items-center needs-validation">
       

            
            <div class="form-group col-6 mt-2">
                <label for="Nombre"><h6>Nombre:</h6></label>
                <input type="text" name="Nombre" id="Nombre" class="form-control" required>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback">Es necesario llenar este campo</div>
            </div>


            
            <div class="form-group col-6 mt-2">
                 <label for="Apellido"><h6>Apellido:</h6></label>
                <input type="text" name="Apellido" id="Apellido" class="form-control" required>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback">Es necesario llenar este campo</div>
            </div>

             
            <div class="form-group col-6 mt-2">
                <label for="lugnac"><h6>Lugar de Nacimiento:</h6></label>
                <input type="text" name="lugnac" id="lugnac" class="form-control" required>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback">Es necesario llenar este campo</div>
            </div>


            <div class="form-group col-6 mt-2">
                <label for="fechnac"><h6>Fecha de Nacimiento:</h6></label>
                <input type="date" name="fechnac" id="fechnac" class="form-control" required>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback">Es necesario llenar este campo</div>
            </div>

            <div class="form-group col-6 mt-2">
                <label for="edad"><h6>Edad:</h6></label>
                <input type="text" name="edad" id="edad" class="form-control" required>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback">Es necesario llenar este campo</div>
            </div>

            <div class="form-group col-6 mt-2">
                <label for="nv_ins"><h6>Nivel de Instrucción:</h6></label>
                <input type="text" name="nv_ins" id="nv_ins" class="form-control" required>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback">Es necesario llenar este campo</div>
            </div>




            <div class="form-group col-12 mt-2">
                <label for="motivocon"><h6>Motivo de Consulta:</h6></label>
                <textarea name="motivocon" id="motivocon" rows="6" class="form-control" required></textarea>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback">Es necesario llenar este campo</div>
            </div>

            <div class="form-group col-12 mt-2">
                <label for="sintdiag"><h6>Síntesis Diagnóstica:</h6></label>
                <textarea name="sintdiag" id="sintdiag" rows="6" class="form-control" required></textarea>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback">Es necesario llenar este campo</div>
            </div>


            <div class="form-group col-12 mt-2">
                <label for="recomendaciones"><h6>Recomendaciones:</h6></label>
                <textarea name="recomendaciones" id="recomendaciones" rows="6" class="form-control" required></textarea>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback">Es necesario llenar este campo</div>
            </div>

          

            <input type="submit" name="Guardar_RP" class="btn btn-success btn-block col-2 mt-3" value="Guardado">

        </div>
       
       
     </form>
   </div>
  </div>


<?php include("../footer.php") ?>
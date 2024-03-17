<?php include("../header.php") ?>
<?php  include("../connect.php") ?>

    <!-- AGREGAR INCIDENCIAS -->


<div class="container w-75">
<h2 class="mt-5 item-title text-center">Agregar Incidencias</h2> 
  <div class="card card-body">
     <form action="/UNIPDIS/includes/guardados/save_incidencias.php" method="POST" class="row justify-content-center align-items-center needs-validation">
       

            <div class="col-6 mt-2">
            <h6 for="opciones">Estudiante:</h6>
                <select class="form-select estuselect2" aria-label="Default select example" name="estudiantes_id" id="estudiantes_uni" required>
                   <option value="estudiantes_uni">Seleccione un estudiante</option>
                    <?php
                  // Conexión a la base de datos
                  $conexion = mysqli_connect("localhost", "root", "", "unipdis");

                  // Consulta a la tabla para obtener las opciones
                  $consulta = "SELECT id_estudiante, CONCAT(nombres, ' ', apellidos, ' C.I: ', cedula) AS Estudiante FROM estudiantes";
                  $resultados = mysqli_query($conexion, $consulta);

                  // Recorremos los resultados y creamos las opciones
                  while ($fila = mysqli_fetch_array($resultados)) {
                    echo '<option value="' . $fila['id_estudiante'] . '">' . $fila['Estudiante'] . '</option>';
                  }

                    // Cerramos la conexión
                    mysqli_close($conexion);
                    ?>
                </select>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback">Es necesario llenar este campo</div>
            </div> 

            
            <div class="form-group col-6 mt-2">
                <label for="Hora_inc"><h6>Hora del Incidente:</h6></label>
                <input type="text" name="Hora_inc" id="Hora_inc" class="form-control" required>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback">Es necesario llenar este campo</div>
            </div>


            
            <div class="form-group col-6 mt-2">
                 <label for="fech_inc"><h6>Fecha del Incidente:</h6></label>
                <input type="text" name="fech_inc" id="fech_inc" class="form-control" required>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback">Es necesario llenar este campo</div>
            </div>

             
            <div class="form-group col-6 mt-2">
                <label for="lug_inc"><h6>Lugar del Incidente:</h6></label>
                <input type="text" name="lug_inc" id="lug_inc" class="form-control" required>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback">Es necesario llenar este campo</div>
            </div>

            <div class="form-group col-12 mt-2">
                <label for="observaciones"><h6>Descripción del incidente:</h6></label>
                <textarea name="descripcion" id="descripcion" rows="3" class="form-control" required></textarea>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback">Es necesario llenar este campo</div>
            </div>

            <div class="form-group col-12 mt-2">
                <label for="acuerdos"><h6>Acuerdos:</h6></label>
                <textarea name="acuerdos" id="acuerdos" rows="3" class="form-control" required></textarea>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback">Es necesario llenar este campo</div>
            </div>


            <div class="form-group col-12 mt-2">
                <label for="observaciones"><h6>Observaciones:</h6></label>
                <textarea name="observaciones" id="observaciones" rows="3" class="form-control" required></textarea>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback">Es necesario llenar este campo</div>
            </div>

          

            <input type="submit" name="Guardar_incidente" class="btn btn-success btn-block col-2 mt-3" value="Guardado">

        </div>
       
       
     </form>
   </div>
  </div>


<?php include("../footer.php") ?>
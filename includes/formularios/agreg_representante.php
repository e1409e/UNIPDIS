<?php include("../header.php") ?>
<?php  include("../connect.php") ?>
    <!-- AGREGAR REPRESENTANTE -->


<div class="container w-75">
<h2 class="mt-5 item-title text-center">Agregar Representante</h2> 
  <div class="card card-body mb-3">
     <form action="/UNIPDIS/includes/guardados/save_representante.php" method="POST" class="row justify-content-center align-items-center needs-validation">
       
      
        <div class="form-group col-6 mt-2">
            <label for="parentesco"><h6>Parentesco:</h6></label>
            <input type="text" name="parentesco" id="parentesco" class="form-control" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Es necesario llenar este campo</div>
        </div>

        <div class="col-6 mt-2">
        <h6 for="opciones">Estudiante:</h6>
                <select class="form-select estuselect2" aria-label="Default select example" name="id_estudiante" id="Estudiante">
                   <option value="Estudiante">Seleccione un Estudiante</option>
                    <?php
                  // Conexión a la base de datos
                  $conexion = mysqli_connect("localhost", "root", "", "unipdis");

                  // Consulta a la tabla para obtener las opciones
                  $consulta = "SELECT id_estudiante,  CONCAT(nombres, ' ', apellidos, ' C.I: ', cedula) AS nombres FROM estudiantes";
                  $resultados = mysqli_query($conexion, $consulta);

                  // Recorremos los resultados y creamos las opciones
                  while ($fila = mysqli_fetch_array($resultados)) {
                    echo '<option value="' . $fila['id_estudiante'] . '">' . $fila['nombres'] . '</option>';
                  }

                    // Cerramos la conexión
                    mysqli_close($conexion);
                    ?>
                </select>
                <div class="valid-feedback"></div>
            <div class="invalid-feedback">Es necesario llenar este campo</div>
        </div>        
                
        
        <div class="form-group col-6 mt-2">
            <label for="cedula_repre"><h6>Cédula del Representante:</h6></label>
            <input type="text" name="cedula_repre" id="cedula_repre" class="form-control" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Es necesario llenar este campo</div>
        </div>

        
        <div class="form-group col-6 mt-2">
            <label for="lug_naci"><h6>Lugar de Nacimiento:</h6></label>
            <input type="text" name="lug_naci" id="lug_naci" class="form-control" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Es necesario llenar este campo</div>
        </div>

        
        <div class="form-group col-6 mt-2">
            <label for="fech_naci"><h6>Fecha de Nacimiento:</h6></label>
            <input type="text" name="fech_naci" id="fech_naci" class="form-control" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Es necesario llenar este campo</div>
        </div>

        
        <div class="form-group col-6 mt-2">
            <label for="dir_hab"><h6>Dirección de Habitación:</h6></label>
            <input type="text" name="dir_hab" id="dir_hab" class="form-control" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Es necesario llenar este campo</div>
        </div>

        
        <div class="form-group col-6 mt-2">
            <label for="telf_cont"><h6>Telefono de Contacto:</h6></label>
            <input type="text" name="telf_cont" id="telf_cont" class="form-control" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Es necesario llenar este campo</div>
        </div>

        
        <div class="form-group col-6 mt-2">
            <label for="lug_trab"><h6>Lugar de Trabajo:</h6></label>
            <input type="text" name="lug_trab" id="lug_trab" class="form-control" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Es necesario llenar este campo</div>
        </div>

        
        <div class="form-group col-6 mt-2">
            <label for="Estado"><h6>Estado:</h6></label>
            <input type="text" name="Estado" id="Estado" class="form-control" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Es necesario llenar este campo</div>
        </div>

        
        <div class="form-group col-6 mt-2">
            <label for="municipio"><h6>Municipio:</h6></label>
            <input type="text" name="municipio" id="municipio" class="form-control" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Es necesario llenar este campo</div>
        </div>

        
        <div class="form-group col-6 mt-2">
            <label for="departamento"><h6>Departamento:</h6></label>
            <input type="text" name="departamento" id="departamento" class="form-control" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Es necesario llenar este campo</div>
        </div>

        
        <div class="form-group col-6 mt-2">
            <label for="Edo_civil"><h6>Estado Civil:</h6></label>
            <input type="text" name="Edo_civil" id="Edo_civil" class="form-control" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Es necesario llenar este campo</div>
        </div>

         
        
        <br>
       <br>
       <input type="submit" name="Guardar_repre" class="btn btn-success btn-block col-2 mt-3" value="Guardado">    

        </div>
       
       
     </form>
   </div>
  </div>


<?php include("../footer.php") ?>
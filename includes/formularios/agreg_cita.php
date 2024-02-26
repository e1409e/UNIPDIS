<?php include("../header.php") ?>
<?php  include("../connect.php") ?>



<div class="container w-75">
<h2 class="mt-5 item-title text-center">Agregar Nueva Cita</h2> 
  <div class="card card-body mb-3">
     <form action="/UNIPDIS/includes/guardados/save_citas.php" method="POST" class="row justify-content-center">
       
        <div class="form-group col-6">
            <label for="fecha_cita"><h6>Fecha de cita</h6></label>
            <input type="text" name="fecha_cita" id="fecha_cita" class="form-control">
        </div>

        
        <div class="form-group col-6">
            <label for="motivo_cita"><h6>Motivo de la cita</h6></label>
            <input type="text" name="motivo_cita" id="motivo_cita" class="form-control">
        </div>

        <div class="col-12 mt-3">
        <h6 for="opciones">Estudiante:</h6>
                <select class="form-select" aria-label="Default select example" name="id_estudiante" id="Estudiante">
                   <option value="Estudiante">Seleccione un Estudiante</option>
                    <?php
                  // Conexión a la base de datos
                  $conexion = mysqli_connect("localhost", "root", "", "unipdis");

                  // Consulta a la tabla para obtener las opciones
                  $consulta = "SELECT id_estudiante, CONCAT(nombres, ' ', apellidos, ' C.I: ', cedula) AS nombres FROM estudiantes";
                  $resultados = mysqli_query($conexion, $consulta);

                  // Recorremos los resultados y creamos las opciones
                  while ($fila = mysqli_fetch_array($resultados)) {
                    echo '<option value="' . $fila['id_estudiante'] . '">' . $fila['nombres'] . '</option>';
                  }

                    // Cerramos la conexión
                    mysqli_close($conexion);
                    ?>
                </select>
        </div>        

        
        <br>
        <br>    

        <input type="submit" name="Guardar_cita" class="btn btn-success btn-block col-2 mt-3" value="Guardado">
        </div>
       
       
     </form>
   </div>
  </div>


<?php include("../footer.php") ?>

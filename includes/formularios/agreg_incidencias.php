<!DOCTYPE html>
<html>
<head>
    
</head>
<body>
    <!-- AGREGAR NUEVOS ESTUDIANTES -->


<div class="container w-75">
<h2 class="mt-5">Agregar Incidencias</h2> 
  <div class="card card-body">
     <form action="/UNIPDIS/includes/guardados/save_incidencias.php" method="POST">
       


            <h6 for="opciones">Estudiante:</h6>
                <select class="form-select" aria-label="Default select example" name="estudiantes_id" id="estudiantes_uni">
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

            <h6>Hora del Incidente</h6>
            <div class="form-group">
                <input type="text" name="Hora_inc" class="form-control">
            </div>


            <h6>Fecha del Incidente</h6>
            <div class="form-group">
                <input type="text" name="fech_inc" class="form-control">
            </div>

             <h6>Lugar del Incidente</h6>
            <div class="form-group">
                <input type="text" name="lug_inc" class="form-control">
            </div>

            <h6>Descripción del incidente</h6>
            <div class="form-group">
                <input type="text" name="descripcion" class="form-control">
            </div>


            <h6>Acuerdos</h6>
            <div class="form-group">
                <input type="text" name="acuerdos" class="form-control">
            </div>

             <h6>Observaciones</h6>
            <div class="form-group">
                <input type="text" name="observaciones" class="form-control">
            </div>

            <br>
            <br>
            <input type="submit" name="Guardar_incidente" class="btn btn-success btn-block" value="Guardado">

        </div>
       
       
     </form>
   </div>
  </div>


</body>
</html>
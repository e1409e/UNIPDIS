<!DOCTYPE html>
<html>
<head>
    
</head>
<body>
    <!-- AGREGAR NUEVA CITA -->


<div class="container w-75">
<h2 class="mt-5">Agregar Nueva Cita</h2> 
  <div class="card card-body">
     <form action="/UNIPDIS/includes/save_citas.php" method="POST">
       
       
            <h6 for="opciones">Estudiante:</h6>
                <select class="form-select" aria-label="Default select example" name="id_estudiante" id="Estudiante">
                   <option value="Estudiante">Seleccione un Estudiante</option>
                    <?php
                  // Conexión a la base de datos
                  $conexion = mysqli_connect("localhost", "root", "", "unipdis");

                  // Consulta a la tabla para obtener las opciones
                  $consulta = "SELECT id_estudiante, nombres FROM estudiantes";
                  $resultados = mysqli_query($conexion, $consulta);

                  // Recorremos los resultados y creamos las opciones
                  while ($fila = mysqli_fetch_array($resultados)) {
                    echo '<option value="' . $fila['id_estudiante'] . '">' . $fila['nombres'] . '</option>';
                  }

                    // Cerramos la conexión
                    mysqli_close($conexion);
                    ?>
                </select>
            


        <h6>Fecha de cita</h6>
        <div class="form-group">
            <input type="text" name="fecha_cita" class="form-control">
        </div>


        <h6>Motivo de la cita</h6>
        <div class="form-group">
            <input type="text" name="motivo_cita" class="form-control">
        </div>


        
            

        </div>
       
       <input type="submit" name="Guardar_cita" class="btn btn-success btn-block" value="Guardado">
     </form>
   </div>
  </div>


</body>
</html>

<?php include("../header.php") ?>
<?php  include("../connect.php") ?>
    <!-- AGREGAR NUEVOS ESTUDIANTES -->


<div class="container w-75">
<h2 class="mt-5">Agregar Datos Universitarios del Estudiante</h2> 
  <div class="card card-body mb-3">
     <form action="/UNIPDIS/includes/guardados/save_datos_uni.php" method="POST" class="row justify-content-center align-items-center">
       

            <div class="col-6 mt-2">
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
            </div>    

            <div class="col-6 mt-2">
            <h6 for="opciones">Carreras:</h6>
                <select class="form-select" aria-label="Default select example" name="carrera_id" id="carrera">
                   <option value="carrera">Seleccione una carrera</option>
                    <?php
                  // Conexión a la base de datos
                  $conexion = mysqli_connect("localhost", "root", "", "unipdis");

                  // Consulta a la tabla para obtener las opciones
                  $consulta = "SELECT id_carrera, carreras FROM carrera";
                  $resultados = mysqli_query($conexion, $consulta);

                  // Recorremos los resultados y creamos las opciones
                  while ($fila = mysqli_fetch_array($resultados)) {
                    echo '<option value="' . $fila['id_carrera'] . '">' . $fila['carreras'] . '</option>';
                  }

                    // Cerramos la conexión
                    mysqli_close($conexion);
                    ?>
                </select>
            </div>    

            <div class="col-6 mt-2">
             <h6 for="opciones">Facultades:</h6>
                <select class="form-select" aria-label="Default select example" name="facultades_id" id="facultades">
                   <option value="default">Seleccione una Facultad</option>
                    <?php
                  // Conexión a la base de datos
                  $conexion = mysqli_connect("localhost", "root", "", "unipdis");

                  // Consulta a la tabla para obtener las opciones
                  $consulta = "SELECT id_facultad, facultades FROM facultad";
                  $resultados = mysqli_query($conexion, $consulta);

                  // Recorremos los resultados y creamos las opciones
                  while ($fila = mysqli_fetch_array($resultados)) {
                    echo '<option value="' . $fila['id_facultad'] . '">' . $fila['facultades'] . '</option>';
                  }

                    // Cerramos la conexión
                    mysqli_close($conexion);
                    ?>
                </select>
            </div>
            

            <div class="col-6 mt-2">
            <h6 for="opciones">Periodo:</h6>
                <select class="form-select" aria-label="Default select example" name="periodo_id" id="periodo">
                   <option value="periodo">Seleccione un periodo</option>
                    <?php
                  // Conexión a la base de datos
                  $conexion = mysqli_connect("localhost", "root", "", "unipdis");

                  // Consulta a la tabla para obtener las opciones
                  $consulta = "SELECT id_periodo, periodos FROM periodo";
                  $resultados = mysqli_query($conexion, $consulta);

                  // Recorremos los resultados y creamos las opciones
                  while ($fila = mysqli_fetch_array($resultados)) {
                    echo '<option value="' . $fila['id_periodo'] . '">' . $fila['periodos'] . '</option>';
                  }

                    // Cerramos la conexión
                    mysqli_close($conexion);
                    ?>
                </select>
            </div>          

        

            
         <br>
       <br>      
        <input type="submit" name="Guardar_datos_uni" class="btn btn-success btn-block col-2 mt-3 mb-3" value="Guardado">
        </div>
       
      
       
     </form>
   </div>
  </div>

<?php include("../footer.php") ?>

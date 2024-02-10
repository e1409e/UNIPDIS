<!DOCTYPE html>
<html>
<head>
    
</head>
<body>
    <!-- AGREGAR NUEVOS ESTUDIANTES -->


<div class="container w-75">
<h2 class="mt-5">Agregar Nuevos Estudiantes</h2> 
  <div class="card card-body">
     <form action="/UNIPDIS/includes/save_estudiantes.php" method="POST">
       
        <h6>Nombre del Estudiante</h6>
        <div class="form-group">
            <input type="text" name="nombre" class="form-control">
        </div>

        <h6>Apellido del Estudiante</h6>
        <div class="form-group">
            <input type="text" name="apellido" class="form-control">
        </div>

        <h6>Cedula del Estudiante (sin signos de separacion, ej: 15123456)</h6>
        <div class="form-group">
            <input type="text" name="cedula" class="form-control">
        </div>

        <h6>Telefono del Estudiante</h6>
        <div class="form-group">
            <input type="text" name="telefono" class="form-control">
        </div>

        <h6>Correo Academico</h6>
        <div class="form-group">
            <input type="text" name="correo" class="form-control">
        </div>

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


       
        <h6>Nombre del contacto</h6>
        <div class="form-group">
            <input type="text" name="nombre_contacto" class="form-control">
        </div>

        <h6>Telefono del contacto</h6>
        <div class="form-group">
            <input type="text" name="telefono_contacto" class="form-control">
        </div>


        <!-- <h6>Discapacidad</h6>
        <div class="form-group">
            <input type="text" name="discapacidad" class="form-control">
        </div>
 -->
        <h6 for="opciones">Discapacidad:</h6>
                <select class="form-select" aria-label="Default select example" name="discapacidad_id" id="discapacidad">
                   <option value="discapacidad">Seleccione una discapacidad</option>
                    <?php
                  // Conexión a la base de datos
                  $conexion = mysqli_connect("localhost", "root", "", "unipdis");

                  // Consulta a la tabla para obtener las opciones
                  $consulta = "SELECT id_discapacidad, discapacidades FROM discapacidad";
                  $resultados = mysqli_query($conexion, $consulta);

                  // Recorremos los resultados y creamos las opciones
                  while ($fila = mysqli_fetch_array($resultados)) {
                    echo '<option value="' . $fila['id_discapacidad'] . '">' . $fila['discapacidades'] . '</option>';
                  }

                    // Cerramos la conexión
                    mysqli_close($conexion);
                    ?>
                </select>   
        

        <h6>Edad del Estudiante</h6>
        <div class="form-group">
            <input type="text" name="edad" class="form-control">
        </div>

        

        <h6>Observaciones</h6>
        <div class="form-group">
            <input type="text" name="observaciones" class="form-control">
        </div>

        <h6>Seguimiento</h6>
        <div class="form-group">
            <input type="text" name="seguimiento" class="form-control">
        </div>

        <h6>Fecha de Registro</h6>
        <div class="form-group">

            <input type="text" name="fecha_registro" class="form-control">
            

        </div>
       
       <input type="submit" name="Guardar" class="btn btn-success btn-block" value="Guardado">
     </form>
   </div>
  </div>


</body>
</html>
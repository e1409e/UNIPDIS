<!DOCTYPE html>
<html>
<head>
    
</head>
<body>
    <!-- AGREGAR NUEVOS ESTUDIANTES -->


<div class="container w-75">
<h2 class="mt-5">Agregar Representante</h2> 
  <div class="card card-body">
     <form action="/UNIPDIS/includes/guardados/save_representante.php" method="POST">
       
        <h6>Parentesco</h6>
        <div class="form-group">
            <input type="text" name="parentesco" class="form-control">
        </div>

        <h6>Nombre del Representante</h6>
        <div class="form-group">
            <input type="text" name="nomb_repre" class="form-control">
        </div>

        <h6>Apellido del Representante</h6>
        <div class="form-group">
            <input type="text" name="ape_repre" class="form-control">
        </div>

        <h6>Cédula del Representante</h6>
        <div class="form-group">
            <input type="text" name="cedula_repre" class="form-control">
        </div>

        <h6>Lugar de Nacimiento</h6>
        <div class="form-group">
            <input type="text" name="lug_naci" class="form-control">
        </div>

        <h6>Fecha de Nacimiento</h6>
        <div class="form-group">
            <input type="text" name="fech_naci" class="form-control">
        </div>

        <h6>Dirección de Habitación</h6>
        <div class="form-group">
            <input type="text" name="dir_hab" class="form-control">
        </div>

        <h6>Telefono de Contacto</h6>
        <div class="form-group">
            <input type="text" name="telf_cont" class="form-control">
        </div>

        <h6>Lugar de Trabajo</h6>
        <div class="form-group">
            <input type="text" name="lug_trab" class="form-control">
        </div>

        <h6>Estado</h6>
        <div class="form-group">
            <input type="text" name="Estado" class="form-control">
        </div>

        <h6>Municipio</h6>
        <div class="form-group">
            <input type="text" name="municipio" class="form-control">
        </div>

        <h6>Departamento</h6>
        <div class="form-group">
            <input type="text" name="departamento" class="form-control">
        </div>

        <h6>Estado Civil</h6>
        <div class="form-group">
            <input type="text" name="Edo_civil" class="form-control">
        </div>

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
        
        <br>
       <br>
       <input type="submit" name="Guardar_repre" class="btn btn-success btn-block" value="Guardado">    

        </div>
       
       
     </form>
   </div>
  </div>


</body>
</html>
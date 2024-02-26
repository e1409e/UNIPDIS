<?php include("../header.php") ?>
<?php  include("../connect.php") ?>

<div class="container w-75">

<h2 class="mt-5 item-title text-center">Agregar Nuevos Estudiantes</h2> 
  
  <div class="card card-body mb-3">
     <form action="/UNIPDIS/includes/guardados/save_estudiantes.php" method="POST" class="row justify-content-center align-items-center">
      
        
        
        <div class="form-group col-5 mt-2">
            <label for="motivo_cita"><h6>Nombre del Estudiante:</h6></label>
            <input type="text" name="nombre" id="nombre" class="form-control">
        </div>
            
        
        <div class="form-group col-5 mt-2">
            <label for="apellido"><h6>Apellido del Estudiante:</h6></label>
            <input type="text" name="apellido" id="apellido" class="form-control">
        </div>

          <div class="form-group col-2 mt-2">
            <label for="edad"><h6>Edad del Estudiante:</h6></label>
            <input type="text" name="edad" id="edad" class="form-control">
        </div>

           
        
        <div class="form-group col-6 mt-2">
            <label for="cedula"><h6>Cédula del Estudiante:</h6></label>
            <input type="text" name="cedula" id="cedula" class="form-control">
        </div>

        
        <div class="form-group col-6 mt-2">
            <label for="telefono"><h6>Teléfono del Estudiante:</h6></label>
            <input type="text" name="telefono" id="telefono" class="form-control">
        </div>

        
        <div class="form-group col-6 mt-2">
            <label for="correo"><h6>Correo Académico:</h6></label>
            <input type="text" name="correo" id="correo" class="form-control">
        </div>

       
       
        <div class="form-group col-6 mt-2">
            <label for="nombre_contacto"><h6>Nombre del Representante:</h6></label>
            <input type="text" name="nombre_contacto" id="nombre_contacto" class="form-control">
        </div>

        
        <div class="form-group col-6 mt-2">
            <label for="telefono_contacto"><h6>Teléfono del Representante</h6></label>
            <input type="text" name="telefono_contacto" id="telefono_contacto" class="form-control">
        </div>

        <div class="col-6 mt-2">
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
        </div>
        
        <div class="form-group col-12 mt-2">
            <label for="observaciones"><h6>Observaciones:</h6></label>
            <textarea name="observaciones" id="observaciones" rows="4" class="form-control"></textarea>
        </div>

        <div class="form-group col-12 mt-2">
            <label for="seguimiento"><h6>Seguimiento:</h6></label>
            <textarea name="seguimiento" id="seguimiento" rows="4" class="form-control"></textarea>
        </div>

 
       
       <br>
       <br>
       <input type="submit" name="Guardar" class="btn btn-success btn-block col-2 mt-3" value="Guardado">
      
    </form>
  </div>
</div>



<?php include("../footer.php") ?>

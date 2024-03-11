<?php include("../header.php") ?>
<?php  include("../connect.php") ?>
    <!-- AGREGAR OTROS PARIENTES -->


<div class="container w-75">
<h2 class="mt-5 item-title text-center">Agregar Datos del Pariente</h2> 
  <div class="card card-body">
     <form action="/UNIPDIS/includes/guardados/save_otros_parientes.php" method="POST" class="row justify-content-center align-items-center">
       

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

            
            <div class="form-group col-6 mt-2">
                <label for="nomb_pari"><h6>Nombre del Pariente:</h6></label>
                <input type="text" name="nomb_pari" id="nomb_pari" class="form-control">
            </div>


            
            <div class="form-group col-6 mt-2">
                <label for="ape_pari"><h6>Apellido del Pariente:</h6></label>
                <input type="text" name="ape_pari" id="ape_pari" class="form-control">
            </div>

            
            <div class="form-group col-6 mt-2">
                <label for="fechnac_pari"><h6>Fecha de Nacimiento:</h6></label>
                <input type="date" name="fechnac_pari" id="fechnac_pari" class="form-control">
            </div>


            
            <div class="form-group col-6 mt-2">
                <label for="ocupacion"><h6>Ocupación:</h6></label>
                <input type="text" name="ocupacion" id="ocupacion" class="form-control">
            </div>

            
            <div class="form-group col-6 mt-2">
                <label for="Parent_otro"><h6>Parentesco:</h6></label>
                <input type="text" name="Parent_otro" id="Parent_otro" class="form-control">
            </div>

            <br>
            <br>
            <input type="submit" name="Guardar_otros_parientes" class="btn btn-success btn-block col-2 mt-3" value="Guardado">

        </div>
       
       
     </form>
   </div>
  </div>


<?php include("../footer.php") ?>
<?php
include("../connect.php");


if (isset($_GET['id'])) {
   
    $id_inci = $_GET['id'];

   
    $sql = "SELECT * FROM incidencias WHERE id_incidencia = $id_inci;";
    $result =  mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        
        
        $row = mysqli_fetch_array($result);
        $idestu = $row['id_estudiante']; 
        $HI = $row['hora_incidente']; 
        $FI = $row['fecha_incidente']; 
        $DI = $row['donde_incidente']; 
        $desI = $row['descripcion_incidente']; 
        $AC = $row['acuerdos']; 
        $OB = $row['observaciones']; 
                    


        }
    }  

    if (isset($_POST['update'])) {
      $id_inci = $_GET['id'];

      $estu = $_POST['estudiantes_id'];
      $hora = $_POST['Hora_inc'];
      $fecha = $_POST['fech_inc'];
      $donde = $_POST['lug_inc'];
      $desc = $_POST['descripcion'];
      $acuerdo = $_POST['acuerdos'];
      $obs = $_POST['observaciones'];

      $query = "UPDATE incidencias set id_estudiante = '$estu', hora_incidente = '$hora', fecha_incidente = '$fecha', donde_incidente = '$donde', descripcion_incidente = '$desc', acuerdos = '$acuerdo', observaciones = '$obs'  WHERE id_incidencia = $id_inci;";
      mysqli_query($conn, $query);
      
      header('Location: ../info_medico/incidencias.php');
}

?>

<?php include('../header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit_inci.php?id=<?php echo $_GET['id']; ?>" method="POST" class="row justify-content-center align-items-center">
       

            <div class="col-6 mt-2">
            <h6 for="opciones">Estudiante:</h6>
                <select class="form-select" aria-label="Default select example" name="estudiantes_id" id="estudiantes_uni">

                   <?php

                    include("../connect.php");

                    $id_inci = $_GET['id'];
                    $select = "SELECT a.id_estudiante, CONCAT(a.nombres, ' ', a.apellidos, ' C.I: ', a.cedula) AS Estudiante, b.hora_incidente, b.fecha_incidente, b.donde_incidente, b.descripcion_incidente, b.acuerdos, b.observaciones FROM incidencias b INNER JOIN estudiantes a ON a.id_estudiante = b.id_estudiante WHERE id_incidencia = $id_inci;";
                    $resultados = mysqli_query($conn, $select);
                    $row = mysqli_fetch_array($resultados);
                    echo '<option value="' . $row['id_estudiante'] . '">' . $row['Estudiante'] . '</option>';  
                    ?> 
                   <!-- <option value="estudiantes_uni">Seleccione un estudiante</option> -->
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
                <label for="Hora_inc"><h6>Hora del Incidente:</h6></label>
                <input type="text" name="Hora_inc" id="Hora_inc" class="form-control" value="<?php echo $HI; ?>">
            </div>


            
            <div class="form-group col-6 mt-2">
                 <label for="fech_inc"><h6>Fecha del Incidente:</h6></label>
                <input type="date" name="fech_inc" id="fech_inc" class="form-control" value="<?php echo $FI; ?>">
            </div>

             
            <div class="form-group col-6 mt-2">
                <label for="lug_inc"><h6>Lugar del Incidente:</h6></label>
                <input type="text" name="lug_inc" id="lug_inc" class="form-control" value="<?php echo $DI; ?>">
            </div>

            <div class="form-group col-12 mt-2">
                <label for="observaciones"><h6>Descripción del incidente:</h6></label>
                <textarea name="descripcion" id="descripcion" rows="3" class="form-control"><?php echo $desI; ?></textarea>
            </div>

            <div class="form-group col-12 mt-2">
                <label for="acuerdos"><h6>Acuerdos:</h6></label>
                <textarea name="acuerdos" id="acuerdos" rows="3" class="form-control"><?php echo $AC; ?></textarea>
            </div>


            <div class="form-group col-12 mt-2">
                <label for="observaciones"><h6>Observaciones:</h6></label>
                <textarea name="observaciones" id="observaciones" rows="3" class="form-control"><?php echo $OB; ?></textarea>
            </div>

            <br>
            <br>

           <button class="btn btn-success mb-2 mt-3 col-4" name="update">Update</button>

        </div>
       
       
     </form>
      </div>
    </div>
  </div>
</div>
<?php include('../footer.php'); ?>
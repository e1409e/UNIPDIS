<?php
include("../connect.php");


if (isset($_GET['id'])) {
   
    $id_HM = $_GET['id'];

   
    $sql = "SELECT * FROM historial_medico WHERE id_historialmedico = $id_HM;";
    $result =  mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);

        $idestu = $row['id_estudiante']; 
        $CC = $row['certificado_conapdis']; 
        $IM = $row['informe_medico']; 
        $TT = $row['tratamiento']; 
                    


        }
    }  

    if (isset($_POST['update'])) {
      $id_HM = $_GET['id'];

      $estu = $_POST['estudiantes_id'];
      $certi = $_POST['conapdis'];
      $inf = $_POST['inf_med'];
      $trat = $_POST['tratamiento'];
      

      $query = "UPDATE historial_medico set id_estudiante = '$estu', certificado_conapdis = '$certi', informe_medico = '$inf', tratamiento = '$trat' WHERE id_historialmedico = $id_HM;";
      mysqli_query($conn, $query);
      
      header('Location: ../info_medico/historial_medico.php');
}

?>

<?php include('../header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
        <form action="edit_HM.php?id=<?php echo $_GET['id']; ?>" method="POST" class="row justify-content-center align-items-center">
       

            <div class="col-6 mt-4">
            <label for="estudiantes_uni"><h6>Estudiante:</h6></label>
               <select class="form-select" aria-label="Default select example" name="estudiantes_id" id="estudiantes_uni">

                   <?php

                    include("../connect.php");

                    $id_ = $_GET['id'];
                    $select = "SELECT a.id_estudiante , CONCAT(a.nombres, ' ', a.apellidos, ' C.I: ', a.cedula) AS Estudiante FROM historial_medico b INNER JOIN estudiantes a ON a.id_estudiante = b.id_estudiante WHERE id_historialmedico = $id_HM ;";
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
                <label for="conapdis"><h6>¿Posee Certificado del Conapdis?:</h6></label>
                <input type="text" name="conapdis" id="conapdis" class="form-control" value="<?php echo $CC; ?>">
            </div>


     
            <div class="form-group col-12 mt-2">
                <label for="inf_med"><h6>Agregar Informe Medico:</h6></label>
                <textarea name="inf_med" id="inf_med" rows="4" class="form-control"><?php echo $IM; ?></textarea>
            </div>

        
            <div class="form-group mt-2">
                <label for="tratamiento"><h6>Tratamiento:</h6></label>
                <textarea name="tratamiento" id="tratamiento" rows="2" class="form-control"><?php echo $TT; ?></textarea>
               
            </div>

            <br>
            <br>
            <button class=" btn btn-success mb-2 mt-3 col-4" name="update">Update</button>

        </div>
       
       
     </form>
      </div>
    </div>
  </div>
</div>
<?php include('../footer.php'); ?>
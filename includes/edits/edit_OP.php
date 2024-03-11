<?php
include("../connect.php");


if (isset($_GET['id'])) {
   
    $id_OP = $_GET['id'];

   
    $sql = "SELECT * FROM otros_parientes WHERE id_pariente = $id_OP;";
    $result =  mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);

         $row['id_pariente']; 
         $row['id_estudiante']; 
         $row['nombre_pariente']; 
         $row['apellido_pariente']; 
         $row['fecha_nacimiento']; 
         $row['ocupacion']; 
         $row['parentesco']; 
                    


        }
    }  

    if (isset($_POST['update'])) {
      $id_OP = $_GET['id'];

      $estu = $_POST['estudiantes_id'];
      $nomb = $_POST['nomb_pari'];
      $ape = $_POST['ape_pari'];
      $fech = $_POST['fechnac_pari'];
      $ocu = $_POST['ocupacion'];
      $po = $_POST['Parent_otro'];
      
      

      $query = "UPDATE otros_parientes set id_estudiante = '$estu', nombre_pariente = '$nomb', apellido_pariente = '$ape', fecha_nacimiento = '$fech', ocupacion = '$ocu', parentesco = '$po' WHERE id_pariente = $id_OP;";
      mysqli_query($conn, $query);
      
      header('Location: ../parientes/otros_parientes.php');
}

?>

<?php include('../header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
        <form action="edit_OP.php?id=<?php echo $_GET['id']; ?>" method="POST" class="row justify-content-center align-items-center">
       

            <div class="col-6 mt-2">
            <h6 for="opciones">Estudiante:</h6>
               <select class="form-select" aria-label="Default select example" name="estudiantes_id" id="estudiantes_uni">

                   <?php

                    include("../connect.php");

                    $id_ = $_GET['id'];
                    $select = "SELECT b.id_estudiante, CONCAT(a.nombres, ' ', a.apellidos, ' C.I: ', a.cedula) AS Estudiante FROM otros_parientes b INNER JOIN estudiantes a ON a.id_estudiante = b.id_estudiante WHERE id_pariente = $id_OP;";
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
            <button class=" btn btn-success mb-2 mt-3 col-4" name="update">Update</button>

        </div>
       
       
     </form>
      </div>
    </div>
  </div>
</div>
<?php include('../footer.php'); ?>
<?php
include("../connect.php");


if (isset($_GET['id'])) {
   
    $id_repre = $_GET['id'];

   
    $sql = "SELECT * FROM padres WHERE id_padres = $id_repre;";
    $result =  mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        
        
        $row = mysqli_fetch_array($result);
        
        $tipo = $row['tipo_familiar']; 
                
        $CI = $row['cedula_padre']; 
        $lugN = $row['lugar_nacimiento']; 
        $FN = $row['fecha_nacimiento']; 
        $dirH = $row['direccion_habitacion'];
        $tlfC = $row['telefono_contacto']; 
        $lugT = $row['lugar_trabajo']; 
        $est = $row['estado']; 
        $mun = $row['municipio']; 
        $dep = $row['departamento']; 
        $estC = $row['estadodo_civil'];
        $idestu = $row['id_estudiante']; 
        
    


        }
    }  

    if (isset($_POST['update'])) {
      $id_repre = $_GET['id'];
      $parentesco = $_POST['parentesco'];
        $cedula_repre = $_POST['cedula_repre'];
        $lug_naci = $_POST['lug_naci'];
        $fech_naci = $_POST['fech_naci'];
        $dir_hab = $_POST['dir_hab'];
        $telf_cont = $_POST['telf_cont'];
        $lug_trab = $_POST['lug_trab'];
        $Estado = $_POST['Estado'];
        $municipio = $_POST['municipio'];
        $departamento = $_POST['departamento'];
        $Edo_civil = $_POST['Edo_civil'];
        $id_estudiante = $_POST['id_estudiante'];
      

      $query = "UPDATE padres set tipo_familiar = '$parentesco', cedula_padre = '$cedula_repre', lugar_nacimiento = '$lug_naci', fecha_nacimiento = '$fech_naci', direccion_habitacion = '$dir_hab', telefono_contacto = '$telf_cont', lugar_trabajo = '$lug_trab', estado = '$Estado', municipio = '$municipio', departamento = '$departamento', estadodo_civil = '$Edo_civil', id_estudiante = '$id_estudiante' WHERE id_padres = $id_repre;";
      mysqli_query($conn, $query);
      
      header('Location: ../parientes/padres.php');
}

?>

<?php include('../header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit_repre.php?id=<?php echo $_GET['id']; ?>" method="POST" class="row justify-content-center align-items-center">

        <div class="form-group col-6 mt-2">
             <label for="parentesco"><h6>Parentesco:</h6></label>
            <input type="text" name="parentesco" id="parentesco" class="form-control" value="<?php echo "$tipo"; ?>">
        </div>

        <div class="col-6 mt-2">
        <h6 for="opciones">Estudiante:</h6>
                <select class="form-select" aria-label="Default select example" name="id_estudiante" id="Estudiante">
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

                    
                    ?>
                </select>
        </div>        
                
        
        <div class="form-group col-6 mt-2">
            <label for="cedula_repre"><h6>Cédula del Representante:</h6></label>
            <input type="text" name="cedula_repre" id="cedula_repre" class="form-control" value="<?php echo "$CI"; ?>" >
        </div>

        
        <div class="form-group col-6 mt-2">
            <label for="lug_naci"><h6>Lugar de Nacimiento:</h6></label>
            <input type="text" name="lug_naci" id="lug_naci" class="form-control" value="<?php echo "$lugN"; ?>">
        </div>

        
        <div class="form-group col-6 mt-2">
            <label for="fech_naci"><h6>Fecha de Nacimiento:</h6></label>
            <input type="date" name="fech_naci" id="fech_naci" class="form-control" value="<?php echo "$FN"; ?>">
        </div>

        
        <div class="form-group col-6 mt-2">
            <label for="dir_hab"><h6>Dirección de Habitación:</h6></label>
            <input type="text" name="dir_hab" id="dir_hab" class="form-control" value="<?php echo "$dirH"; ?>">
        </div>

        
        <div class="form-group col-6 mt-2">
            <label for="telf_cont"><h6>Telefono de Contacto:</h6></label>
            <input type="text" name="telf_cont" id="telf_cont" class="form-control" value="<?php echo "$tlfC"; ?>">
        </div>

        
        <div class="form-group col-6 mt-2">
            <label for="lug_trab"><h6>Lugar de Trabajo:</h6></label>
            <input type="text" name="lug_trab" id="lug_trab" class="form-control" value="<?php echo "$lugT"; ?>">
        </div>

        
        <div class="form-group col-6 mt-2">
            <label for="Estado"><h6>Estado:</h6></label>
            <input type="text" name="Estado" id="Estado" class="form-control" value="<?php echo "$est"; ?>">
        </div>

        
        <div class="form-group col-6 mt-2">
            <label for="municipio"><h6>Municipio:</h6></label>
            <input type="text" name="municipio" id="municipio" class="form-control" value="<?php echo "$mun"; ?>">
        </div>

        
        <div class="form-group col-6 mt-2">
            <label for="departamento"><h6>Departamento:</h6></label>
            <input type="text" name="departamento" id="departamento" class="form-control" value="<?php echo "$dep"; ?>">
        </div>

        
        <div class="form-group col-6 mt-2">
            <label for="Edo_civil"><h6>Estado Civil:</h6></label>
            <input type="text" name="Edo_civil" id="Edo_civil" class="form-control" value="<?php echo "$estC"; ?>">
        </div>
        

       
        <button class="btn btn-success mb-2 mt-3 col-5" name="update">Update</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('../footer.php'); ?>
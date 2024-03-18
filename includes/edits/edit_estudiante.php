<?php
include("../connect.php");

//datos del estudiante
if (isset($_GET['id'])) {
   
    $id_estu = $_GET['id'];

   
    $sqlEstu = "SELECT * FROM estudiantes WHERE id_estudiante = $id_estu;";
    $result =  mysqli_query($conn, $sqlEstu);

    if (mysqli_num_rows($result) == 1) {
        
        
        $row = mysqli_fetch_array($result);
        
        $nomb = $row['nombres']; 
                
        $ape = $row['apellidos']; 
        $CI = $row['cedula']; 
        $tlf = $row['telefono']; 
        $mail = $row['correo'];
        $nombC = $row['nombre_contacto']; 
        $tlfC = $row['telefono_contacto']; 
        $discID = $row['discapacidad_id']; 
        $FN = $row['fecha_nacimiento']; 
        $obs = $row['observaciones']; 
        $seg = $row['seguimiento'];
        $idestu = $row['id_estudiante']; 
        
    


        }
    }

    //datos universitarios
    if (isset($_GET['id'])) {
   
    $id_uni = $_GET['id'];

   
    $sqlUni = "SELECT * FROM universidad WHERE id_estudiante = $id_uni;";
    $result2 =  mysqli_query($conn, $sqlUni);

    if (mysqli_num_rows($result2) == 1) {
        
        
        $row = mysqli_fetch_array($result2);
        
        $fac = $row['facultad_id'];         
        $car = $row['carrera_id']; 
        $per = $row['periodo_id']; 


        }
    }




    //EDITAR ESTUDIANTE
    if (isset($_POST['update'])) {
      $id_estu = $_GET['id'];
        
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $cedula = $_POST['cedula'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        
        $nomb_contacto = $_POST['nombre_contacto'];
        $tlf_contacto = $_POST['telefono_contacto'];

        $discapacidad = $_POST['discapacidad_id'];
        $fechN = $_POST['fechN'];
       
        $observaciones = $_POST['observaciones'];
        $seguimiento = $_POST['seguimiento'];

        $carrera_id = $_POST['carrera_id'];
        $facultades_id = $_POST['facultades_id'];
        $periodo_id = $_POST['periodo_id'];
      

      $queryEstu = "UPDATE estudiantes set nombres = '$nombre', apellidos = '$apellido', cedula = '$cedula', telefono = '$telefono', correo = '$correo', nombre_contacto = '$nomb_contacto' , telefono_contacto = '$tlf_contacto', discapacidad_id = '$discapacidad', fecha_nacimiento = '$fechN', observaciones = '$observaciones', seguimiento = '$seguimiento' WHERE id_estudiante = $id_estu;";

      $queryUni = "UPDATE universidad set carrera_id = '$carrera_id', facultad_id = '$facultades_id', periodo_id = '$periodo_id'  WHERE id_estudiante = $id_estu;";
      mysqli_query($conn, $queryEstu);
      mysqli_query($conn, $queryUni);
      
      header('Location: ../Estudiantes.php');
}

?>

<?php include('../header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col mx-auto">
      <div class="card card-body">
      <form action="edit_estudiante.php?id=<?php echo $_GET['id']; ?>" method="POST" class="row justify-content-center align-items-center">

         <div class="form-group col-6 mt-2">
            <label for="motivo_cita"><h6>Nombre del Estudiante:</h6></label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo "$nomb"; ?>" required >
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Es necesario llenar este campo</div>
        </div>
            
        
        <div class="form-group col-6 mt-2">
            <label for="apellido"><h6>Apellido del Estudiante:</h6></label>
            <input type="text" name="apellido" id="apellido" class="form-control" value="<?php echo "$ape"; ?>" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Es necesario llenar este campo</div>
        </div>

          <div class="form-group col-6 mt-2">
            <label for="fechN"><h6>Fecha de Nacimiento:</h6></label>
            <input type="date" name="fechN" id="fechN" class="form-control" value="<?php echo "$FN"; ?>" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Es necesario llenar este campo</div>
        </div>

           
        
        <div class="form-group col-6 mt-2">
            <label for="cedula"><h6>Cédula del Estudiante:</h6></label>
            <input type="text" name="cedula" id="cedula" class="form-control" value="<?php echo "$CI"; ?>" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Es necesario llenar este campo</div>
        </div>

        
        <div class="form-group col-6 mt-2">
            <label for="telefono"><h6>Teléfono del Estudiante:</h6></label>
            <input type="text" name="telefono" id="telefono" class="form-control" value="<?php echo "$tlf"; ?>" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Es necesario llenar este campo</div>
        </div>

        
        <div class="form-group col-6 mt-2">
            <label for="correo"><h6>Correo Académico:</h6></label>
            <input type="text" name="correo" id="correo" class="form-control" value="<?php echo "$mail"; ?>" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Es necesario llenar este campo</div>
        </div>

       
       
        <div class="form-group col-6 mt-2">
            <label for="nombre_contacto"><h6>Nombre del Representante:</h6></label>
            <input type="text" name="nombre_contacto" id="nombre_contacto" class="form-control" value="<?php echo "$nombC"; ?>" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Es necesario llenar este campo</div>
        </div>

        
        <div class="form-group col-6 mt-2">
            <label for="telefono_contacto"><h6>Teléfono del Representante</h6></label>
            <input type="text" name="telefono_contacto" id="telefono_contacto" class="form-control" value="<?php echo "$tlfC"; ?>" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Es necesario llenar este campo</div>
        </div>

        <div class="col-6 mt-2">
        <h6 for="opciones">Discapacidad:</h6>
                <select class="form-select discselect2" aria-label="Default select example" name="discapacidad_id" id="discapacidad" required>
                    <?php

                    include("../connect.php");

                    
                    $select = "SELECT * FROM discapacidad WHERE id_discapacidad = $discID;";
                    $resultados = mysqli_query($conn, $select);
                    $row = mysqli_fetch_array($resultados);
                    echo '<option value="' . $row['id_discapacidad'] . '">' . $row['discapacidades'] . '</option>';  
                    ?> 
                    <?php
                  // Conexión a la base de datos
                  $conexion = mysqli_connect("localhost", "root", "", "unipdis");

                  // Consulta a la tabla para obtener las opciones
                  $consulta = "SELECT * FROM discapacidad";
                  $resultados = mysqli_query($conexion, $consulta);

                  // Recorremos los resultados y creamos las opciones
                  while ($fila = mysqli_fetch_array($resultados)) {
                    echo '<option value="' . $fila['id_discapacidad'] . '">' . $fila['discapacidades'] . '</option>';
                  }

                    // Cerramos la conexión
                    mysqli_close($conexion);
                    ?>
                </select>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback">Es necesario llenar este campo</div>   
        </div>
        
        <div class="col-6 mt-4">
            <h6 for="opciones">Carreras:</h6>
                <select class="form-select estuselect2" aria-label="Default select example" name="carrera_id" id="carrera" required>
                  <?php

                    include("../connect.php");

                    
                    $select = "SELECT carrera_id, carreras FROM universidad u JOIN carrera c ON u.carrera_id = c.id_carrera WHERE  id_estudiante = $id_estu;";
                    $resultados = mysqli_query($conn, $select);
                    $row = mysqli_fetch_array($resultados);
                    echo '<option value="' . $row['carrera_id'] . '">' . $row['carreras'] . '</option>';  
                    ?>
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
                <div class="valid-feedback"></div>
                <div class="invalid-feedback">Es necesario llenar este campo</div>
            </div>    

            <div class="col-6 mt-4 mb-4">
             <h6 for="opciones">Facultades:</h6>
                <select class="form-select estuselect2" aria-label="Default select example" name="facultades_id" id="facultades" required>

                    <?php

                    include("../connect.php");

                    
                    $select = "SELECT facultad_id, facultades FROM universidad u JOIN facultad f ON u.facultad_id = f.id_facultad WHERE  id_estudiante = $id_estu;";
                    $resultados = mysqli_query($conn, $select);
                    $row = mysqli_fetch_array($resultados);
                    echo '<option value="' . $row['facultad_id'] . '">' . $row['facultades'] . '</option>';  
                    ?>
                   
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
                <div class="valid-feedback"></div>
                <div class="invalid-feedback">Es necesario llenar este campo</div>
            </div>
            

            <div class="col-6 mt-4 mb-4">
            <h6 for="opciones">Periodo:</h6>
                <select class="form-select estuselect2" aria-label="Default select example" name="periodo_id" id="periodo" required>
                   
                    <?php

                    include("../connect.php");

                    
                    $select = "SELECT periodo_id, periodos FROM universidad u JOIN periodo p ON u.periodo_id = p.id_periodo WHERE  id_estudiante = $id_uni;";
                    $resultados = mysqli_query($conn, $select);
                    $row = mysqli_fetch_array($resultados);
                    echo '<option value="' . $row['periodo_id'] . '">' . $row['periodos'] . '</option>';  
                    ?>


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
                <div class="valid-feedback"></div>
                <div class="invalid-feedback">Es necesario llenar este campo</div>
            </div>  

        <div class="form-group col-12 mt-2">
            <label for="observaciones"><h6>Observaciones:</h6></label>
            <textarea name="observaciones" id="observaciones" rows="4" class="form-control"  required><?php echo $obs; ?></textarea>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Es necesario llenar este campo</div>
        </div>

        <div class="form-group col-12 mt-2">
            <label for="seguimiento"><h6>Seguimiento:</h6></label>
            <textarea name="seguimiento" id="seguimiento" rows="4" class="form-control" required><?php echo $seg; ?></textarea>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Es necesario llenar este campo</div>
        </div>
        

       
        <button class="btn btn-success mb-2 mt-3 col-5" name="update">Update</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('../footer.php'); ?>
<?php 
 $conexion = mysqli_connect("localhost", "root", "", "unipdis");

                  
    // guardando estudiante
    if (isset($_POST["Guardar"])){
        
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
       
        

        $query1 = "INSERT INTO `estudiantes` (`nombres`, `apellidos`, `cedula`, `telefono`, `correo`, `nombre_contacto`, `telefono_contacto`, `discapacidad_id`, `fecha_nacimiento`, `observaciones`, `seguimiento`) VALUES ('$nombre', '$apellido', '$cedula', '$telefono', '$correo',  '$nomb_contacto', '$tlf_contacto', '$discapacidad', '$fechN', '$observaciones', '$seguimiento');";
        
        $result = mysqli_query($conexion, $query1);

        $queryID = "SELECT max(id_estudiante) FROM estudiantes;";
        $estudiantes_id = $conexion->insert_id;
        
        if(!$result){
            die("Query failed");

         }
        } 
        
        // Guardando datos universitarios

        if (isset($_POST["Guardar"])){

        
        
        $carrera_id = $_POST['carrera_id'];
        $facultades_id = $_POST['facultades_id'];
        $periodo_id = $_POST['periodo_id'];
        

        $query2 = "INSERT INTO `universidad` (`id_estudiante`, `carrera_id`, `facultad_id`, `periodo_id`) VALUES ('$estudiantes_id', '$carrera_id', '$facultades_id', '$periodo_id');";
        
        $result2 = mysqli_query($conexion, $query2);

        if(!$result2){
            die("Query failed");

         }
        } 

        if (isset($_POST["Guardar"])){
        
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
        
        

        $query3 = "INSERT INTO `padres` (`tipo_familiar`, `cedula_padre`, `lugar_nacimiento`, `fecha_nacimiento`, `direccion_habitacion`, `telefono_contacto`, `lugar_trabajo`, `estado`, `municipio`, `departamento`, `estadodo_civil`, `id_estudiante`) VALUES ('$parentesco', '$cedula_repre', '$lug_naci', '$fech_naci', '$dir_hab', '$telf_cont', '$lug_trab', '$Estado', '$municipio', '$departamento', '$Edo_civil', '$estudiantes_id'  );";
        
        $result3 = mysqli_query($conexion, $query3);

        if(!$result3){
            die("Query failed");

         }

         header("Location: ../Estudiantes.php");

       
        
    }
?>
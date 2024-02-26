<?php 
 $conexion = mysqli_connect("localhost", "root", "", "unipdis");

                  

    if (isset($_POST["Guardar_repre"])){
        
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
        

        $query = "INSERT INTO `padres` (`tipo_familiar`, `cedula_padre`, `lugar_nacimiento`, `fecha_nacimiento`, `direccion_habitacion`, `telefono_contacto`, `lugar_trabajo`, `estado`, `municipio`, `departamento`, `estadodo_civil`, `id_estudiante`) VALUES ('$parentesco', '$cedula_repre', '$lug_naci', '$fech_naci', '$dir_hab', '$telf_cont', '$lug_trab', '$Estado', '$municipio', '$departamento', '$Edo_civil', '$id_estudiante'  );";
        
        $result = mysqli_query($conexion, $query);

        if(!$result){
            die("Query failed");

         }
         header("Location: ../Estudiantes.php");*/
        // echo $query;


       
        // header("Location: index.php");  
    }
?>

<?php 
 $conexion = mysqli_connect("localhost", "root", "", "unipdis");

                  

    if (isset($_POST["Guardar_cita"])){
        
        
        $id_estudiante = $_POST['id_estudiante'];
        $fecha_cita = $_POST['fecha_cita'];
        $motivo_cita = $_POST['motivo_cita'];
        

        $query = "INSERT INTO `citas` (`id_estudiante`, `fecha_cita`, `motivo_cita`) VALUES ('$id_estudiante', '$fecha_cita', '$motivo_cita');";
        
        $result = mysqli_query($conexion, $query);

        if(!$result){
            die("Query failed");

         }
        echo 'saved';
        // echo $query;


        // $_SESSION['mensaje'] = 'Tarea Guardada';
        // $_SESSION['mensaje_tipo'] = 'success';
        // header("Location: index.php");  
    }
?>
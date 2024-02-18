<?php 
 $conexion = mysqli_connect("localhost", "root", "", "unipdis");

                  

    if (isset($_POST["Guardar_datos_uni"])){
        
        $estudiantes_id = $_POST['estudiantes_id'];
        $carrera_id = $_POST['carrera_id'];
        $facultades_id = $_POST['facultades_id'];
        $periodo_id = $_POST['periodo_id'];
        

        $query = "INSERT INTO `universidad` (`id_estudiante`, `carrera_id`, `facultad_id`, `periodo_id`) VALUES ('$estudiantes_id', '$carrera_id', '$facultades_id', '$periodo_id');";
        
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
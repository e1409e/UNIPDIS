<?php 
 $conexion = mysqli_connect("localhost", "root", "", "unipdis");

                  

    if (isset($_POST["Guardar_HM"])){
        
        
        $id_estudiante = $_POST['estudiantes_id'];
        $conapdis = $_POST['conapdis'];
        $inf_med = $_POST['inf_med'];
        $tratamiento = $_POST['tratamiento'];
        

        $query = "INSERT INTO `historial_medico` (`id_estudiante`, `certificado_conapdis`, `informe_medico`, `tratamiento`) VALUES ('$id_estudiante', '$conapdis', '$inf_med', '$tratamiento');";
        
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
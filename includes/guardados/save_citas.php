
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
        
        header("Location: ../info_medico/citas.php");
        


       
        // header("Location: index.php");  
    }

    
?>
<?php 
 $conexion = mysqli_connect("localhost", "root", "", "unipdis");

                  

    if (isset($_POST["Guardar_otros_parientes"])){
        
        
        $id_estudiante = $_POST['estudiantes_id'];
        $nombre_pariente = $_POST['nomb_pari'];
        $apellido_pariente = $_POST['ape_pari'];
        $fecha_nacimiento = $_POST['fechnac_pari'];
        $ocupacion = $_POST['ocupacion'];
        $parentesco = $_POST['Parent_otro'];
        

        $query = "INSERT INTO `otros_parientes` (`id_estudiante`, `nombre_pariente`, `apellido_pariente`, `fecha_nacimiento`, `ocupacion`, `parentesco`) VALUES ('$id_estudiante', '$nombre_pariente', ' $apellido_pariente', '$fecha_nacimiento', '$ocupacion', '$parentesco');";
        
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
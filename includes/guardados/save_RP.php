<?php 
 $conexion = mysqli_connect("localhost", "root", "", "unipdis");

                  

    if (isset($_POST["Guardar_RP"])){
        
        
        $Nombre = $_POST['Nombre'];
        $Apellido = $_POST['Apellido'];
        $lugnac = $_POST['lugnac'];
        $fechnac = $_POST['fechnac'];
        $edad = $_POST['edad'];
        $nv_ins = $_POST['nv_ins'];
        $motivocon = $_POST['motivocon'];
        $sintdiag = $_POST['sintdiag'];
        $recomendaciones = $_POST['recomendaciones'];
        
        

        $query = "INSERT INTO `reporte_psicologico` (`Nombre`, `Apellido`, `lugnac`, `fechnac`, `edad`, `nv_ins`, `motivocon`, `sintdiag`, `recomendaciones`) VALUES ('$Nombre', '$Apellido', '$lugnac', '$fechnac', '$edad', '$nv_ins', '$motivocon', '$sintdiag', '$recomendaciones');";
        
        $result = mysqli_query($conexion, $query);

        if(!$result){
            die("Query failed");

         }
        header("Location: ../info_medico/reportePsico.php");
        // echo $query;


        // $_SESSION['mensaje'] = 'Tarea Guardada';
        // $_SESSION['mensaje_tipo'] = 'success';
        // header("Location: index.php");  
    }
?>
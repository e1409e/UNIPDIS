<?php 
 $conexion = mysqli_connect("localhost", "root", "", "unipdis");

                  

    if (isset($_POST["Guardar_incidente"])){
        
        
        $id_estudiante = $_POST['estudiantes_id'];
        $hora = $_POST['Hora_inc'];
        $fecha = $_POST['fech_inc'];
        $lugar = $_POST['lug_inc'];
        $descripcion = $_POST['descripcion'];
        $acuerdos = $_POST['acuerdos'];
        $observaciones = $_POST['observaciones'];
        
        
        

        $query = "INSERT INTO `incidencias` (`id_estudiante`, `hora_incidente`, `fecha_incidente`, `donde_incidente`, `descripcion_incidente`, `acuerdos`, `observaciones`) VALUES ('$id_estudiante', '$hora', '$fecha', '$lugar', '$descripcion', '$acuerdos', '$observaciones');";
        
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
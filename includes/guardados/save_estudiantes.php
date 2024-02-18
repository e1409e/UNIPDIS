<?php 
 $conexion = mysqli_connect("localhost", "root", "", "unipdis");

                  

    if (isset($_POST["Guardar"])){
        
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $cedula = $_POST['cedula'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        
        $nomb_contacto = $_POST['nombre_contacto'];
        $tlf_contacto = $_POST['telefono_contacto'];

        $discapacidad = $_POST['discapacidad_id'];
        $edad = $_POST['edad'];
       
        $observaciones = $_POST['observaciones'];
        $seguimiento = $_POST['seguimiento'];
        $fecha_registro = $_POST['fecha_registro'];
        

        $query = "INSERT INTO `estudiantes` (`nombres`, `apellidos`, `cedula`, `telefono`, `correo`, `nombre_contacto`, `telefono_contacto`, `discapacidad_id`, `edad`, `observaciones`, `seguimiento`, `fecha_registro`) VALUES ('$nombre', '$apellido', '$cedula', '$telefono', '$correo',  '$nomb_contacto', '$tlf_contacto', '$discapacidad', '$edad', '$observaciones', '$seguimiento', '$fecha_registro');";
        
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


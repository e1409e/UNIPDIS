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
       
        

        $query = "INSERT INTO `estudiantes` (`nombres`, `apellidos`, `cedula`, `telefono`, `correo`, `nombre_contacto`, `telefono_contacto`, `discapacidad_id`, `edad`, `observaciones`, `seguimiento`) VALUES ('$nombre', '$apellido', '$cedula', '$telefono', '$correo',  '$nomb_contacto', '$tlf_contacto', '$discapacidad', '$edad', '$observaciones', '$seguimiento');";
        
        $result = mysqli_query($conexion, $query);

        if(!$result){
            die("Query failed");

         }
       
        // echo $query;


       
        header("Location: ../formularios/agreg_datos_uni.php");  
    }
?>


<?php 
 $conexion = mysqli_connect("localhost", "root", "", "unipdis");

                  

    if (isset($_POST["Guardar"])){
        
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $cedula = $_POST['cedula'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        $periodo = $_POST['periodo'];
        $facultades = $_POST['facultades'];
        $carreras = $_POST['carrera'];
        $nomb_contacto = $_POST['nomb_contacto'];
        $tlf_contacto = $_POST['tlf_contacto'];

        $discapacidad = $_POST['discapacidad'];
        $edad = $_POST['edad'];
       
        $observaciones = $_POST['observaciones'];
        $seguimiento = $_POST['seguimiento'];
        $fecha_registro = $_POST['fecha_registro'];
        

        // $query = "INSERT INTO censo(nombres, apellidos, cedula, carrera, telefono, correo, num_telf, discapacidad, edad, certificado_conapdis, observaciones, seguimiento, year_) VALUES ('$nombre', '$apellido', '$cedula', '$carrera', '$telefono', '$correo', '$num_tlf', '$discapacidad', '$edad', '$certificado_conapdis', '$observaciones', '$seguimiento', '$fecha_registro')";
        
        $result = mysqli_query($conexion, $query);

        if(!$result){
            die("Query failed");

        }
        echo 'saved';
        

        /* $_SESSION['mensaje'] = 'Tarea Guardada';
        $_SESSION['mensaje_tipo'] = 'success';
        header("Location: index.php");  */
    }
?>


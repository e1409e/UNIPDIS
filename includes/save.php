<?php 
include("includes/connect.php"); 

    if (isset($_POST["Guardar"])){
        
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $cedula = $_POST['cedula'];
        $carrera = $_POST['carrera'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        $num_tlf = $_POST['num_tlf'];
        $discapacidad = $_POST['discapacidad'];
        $edad = $_POST['edad'];
        $certificado_conapdis = $_POST['certificado_conapdis'];
        $observaciones = $_POST['observaciones'];
        $seguimiento = $_POST['seguimiento'];
        $year = $_POST['year'];
        

        $query = "INSERT INTO censo(nombres, apellidos, cedula, carrera, telefono, correo, num_telf, discapacidad, edad, certificado_conapdis, observaciones, seguimiento, year_) VALUES ('$nombre', '$apellido', '$cedula', '$carrera', '$telefono', '$correo', '$num_tlf', '$discapacidad', '$edad', '$certificado_conapdis', '$observaciones', '$seguimiento', '$year')";
        $result = mysqli_query($conn, $query);

        if(!$result){
            die("Query failed");

        }
        echo 'saved';
        

        /* $_SESSION['mensaje'] = 'Tarea Guardada';
        $_SESSION['mensaje_tipo'] = 'success';
        header("Location: index.php");  */
    }
?>


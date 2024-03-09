<?php
include("../connect.php");


if (isset($_GET['id'])) {
   
    $id_cita = $_GET['id'];

   
    $sql = "SELECT * FROM citas WHERE id_citas = $id_cita;";
    $result =  mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        
        
        $row = mysqli_fetch_array($result);
        $fecha = $row['fecha_cita'];
        $motivo = $row['motivo_cita'];
    


        }
    }  

// Cierra la conexión a la base de datos
mysqli_close($conn);
?>
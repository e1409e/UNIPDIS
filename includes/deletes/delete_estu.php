<?php
include("../connect.php");

// Verifica si se ha enviado el parámetro 'id' en la URL
if (isset($_GET['id'])) {
    // Obtiene el id de la cita a eliminar desde la URL
    $id_estudiante = $_GET['id'];

    // Query para eliminar la cita con el id proporcionado
    $sql = "DELETE FROM estudiantes WHERE id_estudiante = $id_estudiante";




    if (mysqli_query($conn, $sql)) {
        // echo "Cita eliminada correctamente";
        header("Location: ../Estudiantes.php");
    } else {
        echo "Error al eliminar la cita: " . mysqli_error($conn);
    }
} else {
    echo "Error: No se proporcionó un ID de cita válido";
}

// Cierra la conexión a la base de datos
mysqli_close($conn);
?>
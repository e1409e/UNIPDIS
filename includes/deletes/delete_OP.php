<?php
include("../connect.php");

// Verifica si se ha enviado el parámetro 'id' en la URL
if (isset($_GET['id'])) {
    // Obtiene el id de la cita a eliminar desde la URL
    $id_OP = $_GET['id'];

    // Query para eliminar la cita con el id proporcionado
    $sql = "DELETE FROM otros_parientes WHERE id_pariente = $id_OP";

    if (mysqli_query($conn, $sql)) {
        // echo "Cita eliminada correctamente";
        header("Location: ../parientes/otros_parientes.php");
    } else {
        echo "Error al eliminar: " . mysqli_error($conn);
    }
} else {
    echo "Error: No se proporcionó un ID válido";
}

// Cierra la conexión a la base de datos
mysqli_close($conn);
?>
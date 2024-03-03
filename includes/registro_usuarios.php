<!-- PHP de registro -->

    <?php 
    $conexion = mysqli_connect("localhost", "root", "", "unipdis");

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $cedula_usuario = $_POST['cedula_usuario'];
    $password = $_POST['password'];

    $insertar = "INSERT INTO usuarios(nombre, apellido, cedula_usuario, password) 
             VALUES ('$nombre', '$apellido', '$cedula_usuario', '$password')";


    // Verificacion de la cedula para que no se repita en la base de datos

    $verificar_cedula = mysqli_query($conexion, "SELECT * FROM usuarios WHERE cedula_usuario='$cedula_usuario' ");

    if (mysqli_num_rows($verificar_cedula) > 0) {   
        echo '
            <script>
                alert("Esta cedula ya ha sido registrada, por favor intente con otra.");
                window.location = "../register.php";
            </script>';
            exit();
    }

    $ejecutar = mysqli_query($conexion, $insertar);

    if ($ejecutar) {
        
        echo '
            <script>
                alert("Usurio Registrado Exitosamente");
                window.location = "../login.php";
            </script>';
    }
    else {
        echo '
            <script>
                alert("Por favor intente registrarse de nuevo.");
                window.location = "../register.php";
            </script>';
    }

    mysqli_close($conexion);

    ?>
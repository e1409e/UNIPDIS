<?php 

session_start();

$conexion = mysqli_connect("localhost", "root", "", "unipdis");

$cedula_usuario = $_POST['cedula_usuario'];
$password = $_POST['password'];

$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE cedula_usuario='$cedula_usuario' 
	and password='$password'");


if (mysqli_num_rows($validar_login) > 0) { 
		$_SESSION['usuario'] = $cedula_usuario;  
        header("location: ../index.php");
        exit();
    }
    else{
    	echo '<script>
                alert("El usuario y/o la contraseña son incorrectos, por favor intente de nuevo.");
                window.location = "../login.php";
              </script>';
            exit();
    }


?>
<?php  include("includes/connect.php") ?>

<?php 

    session_start();

    if (isset($_SESSION['usuario'])) {
        header("location: index.php");
    }

?>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login de la Pagina</title>
    <link rel="stylesheet" href="/UNIPDIS/bootstrap/css/bootstrap.min.css"/>  
    <link rel="stylesheet" href="/UNIPDIS/CSS/estilos.css"/> 


</head>
<body class="cuerpo">
	<main>
		<div class="contenedor_global">
        	<div class="caja">
            	<div class="caja_register">
                	<h3>¿Aún no tienes una cuenta?</h3>
                	<p>Regístrate para que puedas iniciar sesión</p>
                	<a href="/UNIPDIS/register.php" class="btn btn-outline-light">Regístrarse</a>
                </div>
            </div>

                <!--Formulario de Login-->
           	<div class="contenedor_login">

                    <!--Login-->
                <form action="includes/login_usuarios.php" method="POST" class="formulario_login">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Cedula" name="cedula_usuario">
                    <input type="password" placeholder="Contraseña" name="password">
                    <button>Entrar</button>
                </form>
            </div>
    	</div>
	</main>
    </body>


<?php include("includes/footer.php") ?>
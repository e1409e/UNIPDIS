<?php  include("includes/connect.php") ?>
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de la Pagina</title>
    <link rel="stylesheet" href="/UNIPDIS/bootstrap/css/bootstrap.min.css"/>  
    <link rel="stylesheet" href="/UNIPDIS/CSS/estilos.css"/> 


</head>

<body class="cuerpo">

	<main>
		<div class="contenedor_global">
        	<div class="caja">
            	<div class="caja_login">
                	<h3>¿Ya tienes una cuenta?</h3>
                	<p>Inicia sesión para entrar en la página</p>
             		<a href="/UNIPDIS/login.php" class="btn btn-outline-light">Iniciar Sesión</a>
             	</div>
            </div>

                <!--Formulario de registro-->
           	<div class="contenedor_register">

                    <!--Registro-->
                <form action="includes/registro_usuarios.php" method="POST" class="formulario_register">
                    <h2>Regístrarse</h2>
                    <input type="text" placeholder="Nombre" name="nombre">
                    <input type="text" placeholder="Apellido" name="apellido">
                    <input type="text" placeholder="Cedula" name="cedula_usuario">
                    <input type="password" placeholder="Contraseña" name="password">
                    <button>Regístrarse</button>
   	            </form>
            </div>
	</main>

</body>

<?php include("includes/footer.php") ?>
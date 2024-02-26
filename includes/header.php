<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Censo para estudiantes con discapacidad</title>

    <!--BOOTSTRAP-->
    <link rel="stylesheet" href="/UNIPDIS/bootstrap/css/bootstrap.min.css"/>  
    
    
    
    <!--Mi conf css-->
    <link rel="stylesheet" href="/UNIPDIS/CSS/extras.css"/> 
 

</head>
<body>

<nav class="navbar navbar-expand-lg bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand">
      <img src="/UNIPDIS/img/logoUJGH.png" alt="Logo" width="165" class="img-fluid d-inline-block align-text-center">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">

            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/UNIPDIS/index.php">Inicio</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="/UNIPDIS/includes/Estudiantes.php">Estudiantes</a>
            </li>

           

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Parientes
              </a>

              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/UNIPDIS/includes/parientes/padres.php">Representante</a></li>
                <li><a class="dropdown-item" href="/UNIPDIS/includes/parientes/otros_parientes.php">Otros Parientes</a></li>
              </ul>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Informe Medico
              </a>

              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/UNIPDIS/includes/info_medico/citas.php">Citas</a></li>
                <li><a class="dropdown-item" href="/UNIPDIS/includes/info_medico/discapacidades.php">Discapacidades</a></li>
                <li><a class="dropdown-item" href="/UNIPDIS/includes/info_medico/historial_medico.php">Historial Medico</a></li>
                <li><a class="dropdown-item" href="/UNIPDIS/includes/info_medico/incidencias.php">Incidencias</a></li>
              </ul>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Universidad
              </a>

              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/UNIPDIS/includes/universidad/Facultades.php">Facultades</a></li>
                <li><a class="dropdown-item" href="/UNIPDIS/includes/universidad/carreras.php">Carreras</a></li>
                <li><a class="dropdown-item" href="/UNIPDIS/includes/universidad/periodos.php">Periodos</a></li>
              </ul>  

        </ul>
    </div>
  </div>
</nav>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Censo para estudiantes con discapacidad</title>

      <!-- <!– Bootstrap –> -->
    <link rel="stylesheet" href="/UNIPDIS/bootstrap/css/bootstrap.min.css"/>  

    <!-- <!– Mi conf css –> -->
    <link rel="stylesheet" href="/UNIPDIS/CSS/extras.css"/>
    <link rel="stylesheet" href="/UNIPDIS/CSS/estilos.css"/>  

    <!-- <!– Font Awesome Stylesheets –> -->
    <link rel="stylesheet" href="/UNIPDIS/CSS/font-awesome.min.css">

    <!-- select2 -->
    <link href="/UNIPDIS/select2/css/select2.min.css" rel="stylesheet" />
 

    <!-- <!– jQuery –> -->
    <script src="/UNIPDIS/JS/jquery-3.7.1.js"></script>

    <!-- <!– DataTables Stylesheet –> -->
    <link href="/UNIPDIS/DataTables/datatables.min.css" rel="stylesheet">
    <link href="/UNIPDIS/DataTables/datatables.css" rel="stylesheet">
    <link href="/UNIPDIS/DataTables/dataTables.dataTables.css" rel="stylesheet">
    <link href="/UNIPDIS/DataTables/responsive.dataTables.css" rel="stylesheet">

    <!-- <!– DataTables JavaScript –> -->
    <script src="/UNIPDIS/DataTables/datatables.min.js"></script>
    <script src="/UNIPDIS/DataTables/datatables.js"></script>
    <script src="/UNIPDIS/DataTables/dataTables.responsive.js"></script>
    <script src="/UNIPDIS/DataTables/responsive.dataTables.js"></script>
    <script src="/UNIPDIS/DataTables/pdfmake-0.2.7/pdfmake.js"></script>
    <script src="/UNIPDIS/DataTables/pdfmake-0.2.7/pdfmake.min.js"></script>
    <script src="/UNIPDIS/DataTables/pdfmake-0.2.7/vfs_fonts.js"></script>
    <script src="/UNIPDIS/DataTables/JSZip-3.10.1/jszip.js"></script>
    <script src="/UNIPDIS/DataTables/JSZip-3.10.1/jszip.min.js"></script>
    
    <!-- select2 -->
    <script src="/UNIPDIS/select2/js/select2.min.js"></script>

    <!-- font awesome -->
    <script src="/UNIPDIS/JS/fontA.js"></script>

    <nav class="navbar navbar-expand-lg bg-primary justify-content-between">
  <div class="container-fluid">
    <a class="navbar-brand">
      <img src="/UNIPDIS/img/logoUJGH.png" alt="Logo" width="165" class="img-fluid d-inline-block align-text-center">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ">

            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/UNIPDIS/index.php"><i class="fa fa-house"></i>   Inicio</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="/UNIPDIS/includes/Estudiantes.php"><i class="fa fa-school"></i>   Estudiantes</a>
            </li>

           

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-people-roof"></i>   Parientes
              </a>

              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/UNIPDIS/includes/parientes/padres.php">Representante</a></li>
                <li><a class="dropdown-item" href="/UNIPDIS/includes/parientes/otros_parientes.php">Otros Parientes</a></li>
              </ul>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-file-medical"></i>   Informe Medico
              </a>

              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/UNIPDIS/includes/info_medico/citas.php">Citas</a></li>
                <li><a class="dropdown-item" href="/UNIPDIS/includes/info_medico/discapacidades.php">Discapacidades</a></li>
                <li><a class="dropdown-item" href="/UNIPDIS/includes/info_medico/historial_medico.php">Historial Medico</a></li>
                <li><a class="dropdown-item" href="/UNIPDIS/includes/info_medico/incidencias.php">Incidencias</a></li>
              </ul>

            <li class="nav-item dropdown ">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-building-columns"></i>   Universidad
              </a>

              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/UNIPDIS/includes/universidad/Facultades.php">Facultades</a></li>
                <li><a class="dropdown-item" href="/UNIPDIS/includes/universidad/carreras.php">Carreras</a></li>
                <li><a class="dropdown-item" href="/UNIPDIS/includes/universidad/periodos.php">Periodos</a></li>
              </ul>

              
                
              
 
        </ul>
    </div>
    <li>
      <a href="/UNIPDIS/includes/cerrar_sesion.php" class="btn btn-danger"><i class="fa fa-right-from-bracket"></i> Cerrar Sesion</a>
    </li>
  </div>
</nav>    
    

</head>

<body class="cuerpo1">


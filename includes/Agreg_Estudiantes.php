<!DOCTYPE html>
<html>
<head>
    
</head>
<body>
    <!-- AGREGAR NUEVOS ESTUDIANTES -->


<div class="container">
<h2 class="mt-5">Agregar Nuevos Estudiantes</h2> 
  <div class="card card-body">
     <form action="includes/save.php" method="POST">
       
        <h6>Nombre del Estudiante</h6>
        <div class="form-group">
            <input type="text" name="nombre" class="form-control">
        </div>

        <h6>Apellido del Estudiante</h6>
        <div class="form-group">
            <input type="text" name="apellido" class="form-control">
        </div>

        <h6>Cedula del Estudiante (sin signos de separacion, ej: 15123456)</h6>
        <div class="form-group">
            <input type="text" name="cedula" class="form-control">
        </div>

        <h6>Carrera</h6>
        <div class="form-group">
            <input type="text" name="carrera" class="form-control">
        </div>

        <h6>Telefono del Estudiante</h6>
        <div class="form-group">
            <input type="text" name="telefono" class="form-control">
        </div>

        <h6>Correo Academico</h6>
        <div class="form-group">
            <input type="text" name="correo" class="form-control">
        </div>

        <h6>Numero de Telefono</h6>
        <div class="form-group">
            <input type="text" name="num_tlf" class="form-control">
        </div>

        <h6>Discapacidad</h6>
        <div class="form-group">
            <input type="text" name="discapacidad" class="form-control">
        </div>

        <h6>Edad del Estudiante</h6>
        <div class="form-group">
            <input type="text" name="edad" class="form-control">
        </div>

        <h6>¿El estudiante posee certificado del conapdis?</h6>
        <div class="form-group">
            <input type="text" name="certificado_conapdis" class="form-control">
        </div>

        <h6>Observaciones</h6>
        <div class="form-group">
            <input type="text" name="observaciones" class="form-control">
        </div>

        <h6>Seguimiento</h6>
        <div class="form-group">
            <input type="text" name="seguimiento" class="form-control">
        </div>

        <h6>Año</h6>
        <div class="form-group">
            <input type="text" name="year" class="form-control">
        </div>
       
       <input type="submit" name="Guardar" class="btn btn-success btn-block" value="Guardado">
     </form>
   </div>
  </div>


</body>
</html>
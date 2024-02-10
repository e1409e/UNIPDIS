<?php  include("connect.php") ?>
<?php include("header.php") ?>

<br>
<br>
<div class="container w-75">
  <h2 class="mt-5">Estudiantes</h2>
  <div class="card card-body"> 
    

    

    <div class="table-responsive" > 
        <div id="seccionOculta" style="display: none;">
          <table class="table rounded table-hover table-bordered  table-lg mb-5">
            <thead>
              <tr>
                <th class="col-auto">ID</th>
                <th class="col-auto">Nombre</th>
                <th class="col-auto">Apellido</th>
                <th class="col-auto">Cedula</th>
                <th class="col-auto">telefono</th>
                <th class="col-auto">Correo</th>
                <th class="col-auto">Periodo</th>
                <th class="col-auto">Facultad</th>
                <th class="col-auto">Carrera</th>
                <th class="col-auto">Nomb. contacto</th>
                <th class="col-auto">Tlf. contacto</th>
                <th class="col-auto">Discapacidad</th>
                <th class="col-auto">Edad</th>
                <th class="col-auto">Observaciones</th>
                <th class="col-auto">Seguimiento</th>
                <th class="col-auto">Fecha de Registro</th>
                <th class="col-auto">Acciones</th>
            
              </tr>
            </thead>
            <tbody>
              <!-- Aquí iría el contenido de la base de datos -->
              <?php 
                include("connect.php");
                $select = "SELECT * FROM Estudiantes";
                $resultados = mysqli_query($conn, $select);

                while($row = mysqli_fetch_array($resultados)){ ?>
                  <tr>
                    <!-- columnas de la tabla en mysql-->

                    <td><?php echo $row['id_estudiante'] ?></td>
                    <td><?php echo $row['nombres'] ?></td>
                    <td><?php echo $row['apellidos'] ?></td>
                    <td><?php echo $row['cedula'] ?></td>
                    <td><?php echo $row['telefono'] ?></td>
                    <td><?php echo $row['correo'] ?></td>
                    <td><?php echo $row['periodo_id'] ?></td>
                    <td><?php echo $row['facultad_id'] ?></td>
                    <td><?php echo $row['carrera_id'] ?></td>
                    <td><?php echo $row['nombre_contacto'] ?></td>
                    <td><?php echo $row['telefono_contacto'] ?></td>
                    <td><?php echo $row['discapacidad_id'] ?></td>
                    <td><?php echo $row['edad'] ?></td>
                    <td><?php echo $row['observaciones'] ?></td>
                    <td><?php echo $row['seguimiento'] ?></td>
                    <td><?php echo $row['fecha_registro'] ?></td>
                  

                    <!--Botones de acciones-->
                      <td>
                        <div>
                          <a href="edit.php?id=" class="btn btn-secondary d-inline-block">A</a>
                          <a href="delete.php?id=" class="btn btn-danger d-inline-block">B</a>
                        </div>
                      </td> 
                  </tr>

                          <?php } ?>     

            
            </tbody>
          </table>

        </div>
        
        <button class="btn btn-outline-info btn-xs" onclick="toggleSeccion()">Mostrar/Ocultar</button> 
       

    </div>
  </div>
   
</div>



<?php include("Agreg_Estudiantes.php") ?>
<?php include("footer.php") ?>
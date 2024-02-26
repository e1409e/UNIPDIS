<?php  include("../connect.php") ?>
<?php include("../header.php") ?>


<div class="container w-75">
  <h2 class="mt-5">Incidencias</h2>
  <div class="card card-body">
  
    

    

    <div class="table-responsive" > 
        <!-- <div id="seccionOculta" style="display: none;"> -->
          <table class="table table-bordered rounded table-hover table-lg mb-5">
            <thead>
              <tr>
                <th class="col-auto">ID</th>
                <th class="col-auto">Estudiante</th>
                <th class="text-nowrap col-auto">Hora del Incidente</th>
                <th class="text-nowrap col-auto">Fecha del Incidente</th>
                <th class="text-nowrap col-auto">Lugar del Incidente</th>
                <th class="text-nowrap col-auto">Descripción</th>
                <th class="text-nowrap col-auto">Acuerdos</th>
                <th class="text-nowrap col-auto">Observaciones</th>
                <th class="text-nowrap col-1">Acciones</th>
            
              </tr>
            </thead>
            <tbody>
              <!-- Aquí iría el contenido de la base de datos -->
              <?php 
                include("../connect.php");
                $select = "SELECT b.id_incidencia, CONCAT(a.nombres, ' ', a.apellidos, ' C.I: ', a.cedula) AS Estudiante, b.hora_incidente, b.fecha_incidente, b.donde_incidente, b.descripcion_incidente, b.acuerdos, b.observaciones FROM incidencias b INNER JOIN estudiantes a ON a.id_estudiante = b.id_estudiante;";
                $resultados = mysqli_query($conn, $select);

                while($row = mysqli_fetch_array($resultados)){ ?>
                  <tr>
                    <!-- columnas de la tabla en mysql-->

                    <td class="text-nowrap col-auto"><?php echo $row['id_incidencia'] ?></td>
                    <td class="text-nowrap col-auto"><?php echo $row['Estudiante'] ?></td>
                    <td class="text-nowrap col-auto"><?php echo $row['hora_incidente'] ?></td>
                    <td class="text-nowrap col-auto"><?php echo $row['fecha_incidente'] ?></td>
                    <td class="text-nowrap col-auto"><?php echo $row['donde_incidente'] ?></td>
                    <td class="text-nowrap col-auto"><?php echo $row['descripcion_incidente'] ?></td>
                    <td class="text-nowrap col-auto"><?php echo $row['acuerdos'] ?></td>
                    <td class="text-nowrap col-auto"><?php echo $row['observaciones'] ?></td>
                    

                    <!--Botones de acciones-->
                      <td>
                        <div class="btn-group">
                          <a href="edit.php?id=" class="btn btn-secondary d-inline-block">A</a>
                          <a href="delete.php?id=" class="btn btn-danger d-inline-block">B</a>
                        </div>
                      </td> 
                  </tr>

                          <?php } ?>     

            
            </tbody>
          </table>

       <!--  </div>
        <button class="btn btn-outline-info btn-xs" onclick="toggleSeccion()">Mostrar/Ocultar</button>   -->
        <a href="/UNIPDIS/includes/formularios/agreg_incidencias.php" class="btn btn-primary mb-3">Nuevo</a>

    </div>
  </div>
     
</div> 



<?php include("../footer.php") ?>
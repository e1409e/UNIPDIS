<?php  include("../connect.php") ?>
<?php include("../header.php") ?>


<div class="container w-75">
  <h2 class="mt-5">Historial Medico</h2>
  <div class="card card-body">
  
    

    

    <div class="table-responsive" > 
        <!-- <div id="seccionOculta" style="display: none;"> -->
          <table class="table table-bordered rounded table-hover table-lg mb-5 ">
            <thead>
              <tr>
                <th class="col-1">#</th>
                <th class="text-nowrap col-auto">Estudiante</th>
                <th class="text-nowrap col-auto">Certificado de Conapdis</th>
                <th class="text-nowrap col-auto">Informe Medico</th>
                <th class="text-nowrap col-auto">Tratamiento</th>
                <th class="text-nowrap col-1">Acciones</th>
              </tr>
            </thead>
            <tbody>
              <!-- Aquí iría el contenido de la base de datos -->
              <?php 
                include("../connect.php");
                $select = "SELECT b.id_historialmedico , CONCAT(a.nombres, ' ', a.apellidos, ' C.I: ', a.cedula) AS Estudiante, b.certificado_conapdis, b.informe_medico, b.tratamiento FROM historial_medico b INNER JOIN estudiantes a ON a.id_estudiante = b.id_estudiante;";
                $resultados = mysqli_query($conn, $select);

                while($row = mysqli_fetch_array($resultados)){ ?>
                  <tr>
                    <!-- columnas de la tabla en mysql-->

                    <td class="text-nowrap col-auto"><?php echo $row['id_historialmedico'] ?></td>
                    <td class="text-nowrap col-auto"><?php echo $row['Estudiante'] ?></td>
                    <td class="text-nowrap col-auto"><?php echo $row['certificado_conapdis'] ?></td>
                    <td class="text-nowrap col-auto"><?php echo $row['informe_medico'] ?></td>
                    <td class="text-nowrap col-auto"><?php echo $row['tratamiento'] ?></td>

                    <!--Botones de acciones-->
                      <td>
                        <div class="btn-group">
                          <a href="../edits/edit_HM.php?id=<?php echo $row['id_historialmedico']; ?>" class="btn btn-secondary d-inline-block"><i class="fa fa-pencil"></i></a>


                          <a href="../deletes/delete_HM.php?id=<?php echo $row['id_historialmedico']; ?>" class="btn btn-danger d-inline-block"><i class="fa fa-trash"></i></a>
                        </div>
                      </td> 
                  </tr>

                          <?php } ?>     

            
            </tbody>
          </table>

        <!-- </div>
        <button class="btn btn-outline-info btn-xs" onclick="toggleSeccion()">Mostrar/Ocultar</button>  -->
        <a href="/UNIPDIS/includes/formularios/agreg_hist_medico.php" class="btn btn-primary mb-3">Nuevo</a> 
       

    </div>
  </div>
     
</div> 



<?php include("../footer.php") ?>
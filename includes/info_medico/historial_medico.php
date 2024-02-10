<?php  include("../connect.php") ?>
<?php include("../header.php") ?>

<br>
<div class="container-fluid">
  <h2 class="mt-5">Historial Medico</h2>
  <div class="card card-body">
  
    

    

    <div class="table-responsive" > 
        <div id="seccionOculta" style="display: none;">
          <table class="table table-bordered ">
            <thead>
              <tr>
                <th class="col-auto">ID</th>
                <th class="col-auto">Estudiante</th>
                <th class="col-auto">Certificado de Conapdis</th>
                <th class="col-auto">Informe Medico</th>
                <th class="col-auto">Tratamiento</th>
              </tr>
            </thead>
            <tbody>
              <!-- Aquí iría el contenido de la base de datos -->
              <?php 
                include("../connect.php");
                $select = "SELECT * FROM historial_medico";
                $resultados = mysqli_query($conn, $select);

                while($row = mysqli_fetch_array($resultados)){ ?>
                  <tr>
                    <!-- columnas de la tabla en mysql-->

                    <td><?php echo $row['id_historialmedico'] ?></td>
                    <td><?php echo $row['id_estudiante'] ?></td>
                    <td><?php echo $row['certificado_conapdis'] ?></td>
                    <td><?php echo $row['informe_medico'] ?></td>
                    <td><?php echo $row['tratamiento'] ?></td>

                    <!--Botones de acciones-->
                      <td>
                        <a href="../edit.php?id=" class="btn btn-secondary">Editar</a>
                        <a href="../delete.php?id=" class="btn btn-danger">Eliminar</a>
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



<?php include("../footer.php") ?>
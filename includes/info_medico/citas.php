<?php  include("../connect.php") ?>
<?php include("../header.php") ?>


<div class="container w-75">
  <h2 class="mt-5">Citas</h2>
  <div class="card card-body">
  
    

    

    <div class="table-responsive" > 
        <div id="seccionOculta" style="display: none;">
          <table class="table table-bordered ">
            <thead>
              <tr>
                <th class="col-auto">ID</th>
                <th class="col-auto">Estudiante</th>
                <th class="col-auto">Fecha de la Cita</th>
                <th class="col-auto">Motivo de la Cita</th>
                <th class="col-auto">Acciones</th>
            
              </tr>
            </thead>
            <tbody>
              <!-- Aquí iría el contenido de la base de datos -->
              <?php 
                include("../connect.php");
                $select = "SELECT b.id_citas, CONCAT(a.nombres, ' ', a.apellidos, ' C.I: ', a.cedula) AS Estudiante, b.fecha_cita, b.motivo_cita FROM citas b INNER JOIN estudiantes a ON a.id_estudiante = b.id_estudiante;";
                $resultados = mysqli_query($conn, $select);

                while($row = mysqli_fetch_array($resultados)){ ?>
                  <tr>
                    <!-- columnas de la tabla en mysql-->

                    <td><?php echo $row['id_citas'] ?></td>
                    <td><?php echo $row['Estudiante'] ?></td>
                    <td><?php echo $row['fecha_cita'] ?></td>
                    <td><?php echo $row['motivo_cita'] ?></td>
                    

                    <!--Botones de acciones-->
                      <td>
                        <a href="../edit.php?id=" class="btn btn-secondary">A</a>
                        <a href="../delete.php?id=" class="btn btn-danger">B</a>
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
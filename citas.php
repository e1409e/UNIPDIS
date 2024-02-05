<?php  include("includes/connect.php") ?>
<?php include("includes/header.php") ?>

<br>
<div class="container-fluid">
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
            
              </tr>
            </thead>
            <tbody>
              <!-- Aquí iría el contenido de la base de datos -->
              <?php 
                include("includes/connect.php");
                $select = "SELECT * FROM citas";
                $resultados = mysqli_query($conn, $select);

                while($row = mysqli_fetch_array($resultados)){ ?>
                  <tr>
                    <!-- columnas de la tabla en mysql-->

                    <td><?php echo $row['id_citas'] ?></td>
                    <td><?php echo $row['id_estudiante'] ?></td>
                    <td><?php echo $row['fecha_cita'] ?></td>
                    <td><?php echo $row['motivo_cita'] ?></td>
                    

                    <!--Botones de acciones-->
                      <td>
                        <a href="includes/edit.php?id=" class="btn btn-secondary">A</a>
                        <a href="includes/delete.php?id=" class="btn btn-danger">B</a>
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



<?php include("includes/footer.php") ?>
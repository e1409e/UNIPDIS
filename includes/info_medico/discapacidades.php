<?php  include("../connect.php") ?>
<?php include("../header.php") ?>


<div class="container w-75">
  <h2 class="mt-5">Discapacidades</h2>
  <div class="card card-body">
    

    <div class="table-responsive" > 
        <!-- <div id="seccionOculta" style="display: none;"> -->
          <table class="table table-bordered rounded table-hover table-lg mb-5">
            <thead>
              <tr>
                <th class="col-1">ID</th>
                <th class="col-auto">Discapacidad</th>
                <th class="col-1">Acciones</th>
              </tr>
            </thead>
            <tbody>
              <!-- Aquí iría el contenido de la base de datos -->
              <?php 
                include("../connect.php");
                $select = "SELECT * FROM discapacidad";
                $resultados = mysqli_query($conn, $select);

                while($row = mysqli_fetch_array($resultados)){ ?>
                  <tr>
                    <!-- columnas de la tabla en mysql-->

                    <td><?php echo $row['id_discapacidad'] ?></td>
                    <td><?php echo $row['discapacidades'] ?></td>

                    <!--Botones de acciones-->
                      <td>
                        <div class="btn-group">
                          <a href="edit.php?id=" class="btn btn-secondary d-inline-block"><i class="fa fa-pencil"></i></a>

                          <a href="../deletes/delete_disc.php?id=<?php echo $row['id_discapacidad']; ?>" class="btn btn-danger d-inline-block"><i class="fa fa-trash"></i></a>
                        </div>
                      </td> 
                  </tr>

                          <?php } ?>     

            
            </tbody>
          </table>

        <!-- </div>
        <button class="btn btn-outline-info btn-xs" onclick="toggleSeccion()">Mostrar/Ocultar</button>   -->
        <a href="/UNIPDIS/includes/formularios/agreg_discapacidad.php" class="btn btn-primary mb-3">Nuevo</a>
       

    </div>
  </div>
     
</div> 



<?php include("../footer.php") ?>
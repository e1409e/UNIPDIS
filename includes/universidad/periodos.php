<?php include("../header.php") ?>
<?php  include("../connect.php") ?>

<!-- PERIODOS -->

<div class="container w-75">
  <h2 class="mt-5">Periodos</h2>
  <div class="card card-body"> 
    

    <div class="table-responsive" > 
        <!-- <div id="seccionOculta" style="display: none;"> -->
          <table class="table rounded table-hover table-bordered  table-lg mb-5">
            <thead>
              <tr>
                <th class="text-nowrap col-1">ID</th>
                <th class="text-nowrap col-auto">Periodos</th>
                <th class="col-1">Acciones</th>


              </tr>
            </thead>
            <tbody>
              <!-- Aquí iría el contenido de la base de datos -->
              <?php 
                include("../connect.php");
                $select = "SELECT * FROM periodo";
                $resultados = mysqli_query($conn, $select);

                while($row = mysqli_fetch_array($resultados)){ ?>
                  <tr>
                    <!-- columnas de la tabla en mysql-->

                    <td><?php echo $row['id_periodo'] ?></td>
                    <td><?php echo $row['periodos'] ?></td>

                    <!--Botones de acciones-->
                      <td>
                        <div class="btn-group">
                          <a href="edit.php?id=" class="btn btn-secondary d-inline-block"><i class="fa fa-pencil"></i></a>


                          <a href="../deletes/delete_periodo.php?id=<?php echo $row['id_periodo']; ?>" class="btn btn-danger d-inline-block"><i class="fa fa-trash"></i></a>
                        </div>
                      </td> 
                   
                  </tr>

                          <?php } ?>     

            
            </tbody>
          </table>
        <!-- </div>

        <button class="btn btn-primary btn-sm" onclick="toggleSeccion()">Mostrar</button>  -->
        <a href="/UNIPDIS/includes/formularios/agreg_periodo.php" class="btn btn-primary mb-3">Nuevo</a>
       
    </div>
  </div>
</div>

<?php include("../footer.php"); ?> 
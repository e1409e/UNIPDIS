<?php  include("includes/connect.php") ?>
<?php include("includes/header.php") ?>



<br>
<div class="container-fluid">
  <h2 class="mt-5">Facultades</h2>
  <div class="card card-body"> 
    <div class="table-responsive" > 
          <table class="table rounded table-hover table-bordered  table-lg mb-5">
            <thead>
              <tr>
                <th class="col-1">ID</th>
                <th class="col-auto">Facultades</th>
               
              </tr>
            </thead>
            <tbody>
              <!-- Aquí iría el contenido de la base de datos -->
              <?php 
                include("includes/connect.php");
                $select = "SELECT * FROM facultad";
                $resultados = mysqli_query($conn, $select);

                while($row = mysqli_fetch_array($resultados)){ ?>
                  <tr>
                    <!-- columnas de la tabla en mysql-->

                    <td><?php echo $row['id_facultad'] ?></td>
                    <td><?php echo $row['facultades'] ?></td>
                   
                  </tr>

                          <?php } ?>    

            </tbody>
          </table>
    </div>
  </div>   
</div> 


<!-- CARRERAS -->
<br>
<div class="container-fluid">
  <h2 class="mt-5">Carreras</h2>
  <div class="card card-body"> 
    

    <div class="table-responsive" > 
        
          <table class="table rounded table-hover table-bordered  table-lg mb-5">
            <thead>
              <tr>
                <th class="col-1">ID</th>
                <th class="col-auto">Carreras</th>
              </tr>
            </thead>
            <tbody>
              <!-- Aquí iría el contenido de la base de datos -->
              <?php 
                include("includes/connect.php");
                $select = "SELECT * FROM carrera";
                $resultados = mysqli_query($conn, $select);

                while($row = mysqli_fetch_array($resultados)){ ?>
                  <tr>
                    <!-- columnas de la tabla en mysql-->

                    <td><?php echo $row['id_carrera'] ?></td>
                    <td><?php echo $row['carreras'] ?></td>
                   
                  </tr>

                          <?php } ?>     

            
            </tbody>
          </table>
    </div>
  </div>

</div>


<!-- PERIODOS -->
<br>
<div class="container-fluid">
  <h2 class="mt-5">Periodos</h2>
  <div class="card card-body"> 
    

    <div class="table-responsive" > 
        <!-- <div id="seccionOculta" style="display: none;"> -->
          <table class="table rounded table-hover table-bordered  table-lg mb-5">
            <thead>
              <tr>
                <th class="col-1">ID</th>
                <th class="col-auto">Periodos</th>
              </tr>
            </thead>
            <tbody>
              <!-- Aquí iría el contenido de la base de datos -->
              <?php 
                include("includes/connect.php");
                $select = "SELECT * FROM periodo";
                $resultados = mysqli_query($conn, $select);

                while($row = mysqli_fetch_array($resultados)){ ?>
                  <tr>
                    <!-- columnas de la tabla en mysql-->

                    <td><?php echo $row['id_periodo'] ?></td>
                    <td><?php echo $row['periodos'] ?></td>
                   
                  </tr>

                          <?php } ?>     

            
            </tbody>
          </table>
        <!-- </div>

        <button class="btn btn-primary btn-sm" onclick="toggleSeccion()">Mostrar</button>  -->
       
    </div>
  </div>
</div>
<?php include("includes/footer.php") ?>
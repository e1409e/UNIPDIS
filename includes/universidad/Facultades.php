<?php include("../header.php") ?>
<?php  include("../connect.php") ?>




<!-- FACULTADES -->
<br>
<br>
<div class="container w-100">
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
                include("../connect.php");
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

<?php include("../footer.php") ?>
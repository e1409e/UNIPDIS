<?php  include("includes/connect.php") ?>
<?php include("includes/header.php") ?>

<br>
<div class="container-fluid">
  <h2 class="mt-5">Discapacidades</h2>
  <div class="card card-body">
  
    

    

    <div class="table-responsive" > 
        <div id="seccionOculta" style="display: none;">
          <table class="table table-bordered ">
            <thead>
              <tr>
                <th class="col-auto">ID</th>
                <th class="col-auto">Discapacidad</th>
              </tr>
            </thead>
            <tbody>
              <!-- Aquí iría el contenido de la base de datos -->
              <?php 
                include("includes/connect.php");
                $select = "SELECT * FROM discapacidad";
                $resultados = mysqli_query($conn, $select);

                while($row = mysqli_fetch_array($resultados)){ ?>
                  <tr>
                    <!-- columnas de la tabla en mysql-->

                    <td><?php echo $row['id_discapacidad'] ?></td>
                    <td><?php echo $row['discapacidades'] ?></td>

                    <!--Botones de acciones-->
                      <td>
                        <a href="includes/edit.php?id=" class="btn btn-secondary">Editar</a>
                        <a href="includes/delete.php?id=" class="btn btn-danger">Eliminar</a>
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
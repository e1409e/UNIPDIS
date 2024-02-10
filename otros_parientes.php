<?php  include("UNIPDIS/includes/connect.php") ?>
<?php include("UNIPDIS/includes/header.php") ?>

<br>
<div class="container-fluid">
  <h2 class="mt-5">Otros Parientes</h2>
  <div class="card card-body">
  
    

    

    <div class="table-responsive" > 
        <div id="seccionOculta" style="display: none;">
          <table class="table table-bordered ">
            <thead>
              <tr>
                <th class="col-auto">ID del Estudiante</th>
                <th class="col-auto">Parentesco</th>
                <th class="col-auto">Nombre</th>
                <th class="col-auto">Apellido</th>
                <th class="col-auto">Fecha de Nacimiento</th>
                <th class="col-auto">Ocupacion</th>
                <th class="col-auto">Acciones</th>
            
              </tr>
            </thead>
            <tbody>
              <!-- Aquí iría el contenido de la base de datos -->
              <?php 
                include("includes/connect.php");
                $select = "SELECT * FROM otros_parientes";
                $resultados = mysqli_query($conn, $select);

                while($row = mysqli_fetch_array($resultados)){ ?>
                  <tr>
                    <!-- columnas de la tabla en mysql-->

                    <td><?php echo $row['id_estudiante'] ?></td>
                    <td><?php echo $row['nombre_pariente'] ?></td>
                    <td><?php echo $row['apellido_pariente'] ?></td>
                    <td><?php echo $row['fecha_nacimiento'] ?></td>
                    <td><?php echo $row['ocupacion'] ?></td>
                    <td><?php echo $row['parentesco'] ?></td>
                    
                    
                  

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
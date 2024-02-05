<?php  include("includes/connect.php") ?>
<?php include("includes/header.php") ?>

<br>
<div class="container-fluid">
  <h2 class="mt-5">Padres</h2>
  <div class="card card-body"> 
    

    

    <div class="table-responsive" > 
        <div id="seccionOculta" style="display: none;">
          <table class="table table-bordered ">
            <thead>
              <tr>
                <th class="col-auto">tipo_padre</th>
                <th class="col-auto">nombre_padre</th>
                <th class="col-auto">apellido_padre</th>
                <th class="col-auto">cedula_padre</th>
                <th class="col-auto">lugar_nacimiento</th>
                <th class="col-auto">fecha_nacimiento</th>
                <th class="col-auto">direccion_habitacion</th>
                <th class="col-auto">telefono_contacto</th>
                <th class="col-auto">lugar_trabajo</th>
                <th class="col-auto">estado</th>
                <th class="col-auto">municipio</th>
                <th class="col-auto">departamento</th>
                <th class="col-auto">estadodo_civil</th>
                <th class="col-auto">id_estudiante</th>
                
                <th class="col-auto">Acciones</th>
            
              </tr>
            </thead>
            <tbody>
              <!-- Aquí iría el contenido de la base de datos -->
              <?php 
                include("includes/connect.php");
                $select = "SELECT * FROM padres";
                $resultados = mysqli_query($conn, $select);

                while($row = mysqli_fetch_array($resultados)){ ?>
                  <tr>
                    <!-- columnas de la tabla en mysql-->

                    <td><?php echo $row['tipo_padre'] ?></td>
                    <td><?php echo $row['nombre_padre'] ?></td>
                    <td><?php echo $row['apellido_padre'] ?></td>
                    <td><?php echo $row['cedula_padre'] ?></td>
                    <td><?php echo $row['lugar_nacimiento'] ?></td>
                    <td><?php echo $row['fecha_nacimiento'] ?></td>
                    <td><?php echo $row['direccion_habitacion'] ?></td>
                    <td><?php echo $row['telefono_contacto'] ?></td>
                    <td><?php echo $row['lugar_trabajo'] ?></td>
                    <td><?php echo $row['estado'] ?></td>
                    <td><?php echo $row['municipio'] ?></td>
                    <td><?php echo $row['departamento'] ?></td>
                    <td><?php echo $row['estadodo_civil'] ?></td>
                    <td><?php echo $row['id_estudiante'] ?></td>
                    
                  

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
        <button class="btn btn-outline-info btn-sm" onclick="toggleSeccion()">Mostrar</button> 
       

    </div>
  </div>
     
</div> 



<?php include("includes/footer.php") ?>
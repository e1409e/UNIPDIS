<?php include("../header.php");?>
<?php  include("../connect.php");?>


<br>
<br>
<div class="container W-100">
  <h2 class="mt-5">Familiar Directo</h2>
  <div class="card card-body"> 
    

    

    <div class="table-responsive" > 
        <div id="seccionOculta" style="display: none;">
          <table class="table table-bordered ">
            <thead>
              <tr>
                <th class="col-auto">Parentesco</th>
                <th class="col-auto">Nombre</th>
                <th class="col-auto">Apellido</th>
                <th class="col-auto">Cedula</th>
                <th class="col-auto">Lugar de Nacimiento</th>
                <th class="col-auto">Fecha de Nacimiento</th>
                <th class="col-auto">Direccion</th>
                <th class="col-auto">Tlf. Contacto</th>
                <th class="col-auto">Lugar de Trabajo</th>
                <th class="col-auto">Estado</th>
                <th class="col-auto">Municipio</th>
                <th class="col-auto">Departamento</th>
                <th class="col-auto">Estado Civil</th>
                <th class="col-auto">Estudiante</th>
                
                <th class="col-auto">Acciones</th>
            
              </tr>
            </thead>
            <tbody>
              <!-- Aquí iría el contenido de la base de datos -->
              <?php 
                include("../connect.php");
                $select = "SELECT * FROM padres";
                $resultados = mysqli_query($conn, $select);

                while($row = mysqli_fetch_array($resultados)){ ?>
                  <tr>
                    <!-- columnas de la tabla en mysql-->

                    <td><?php echo $row['tipo_familiar'] ?></td>
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
                        <a href="../edit.php?id=" class="btn btn-secondary">A</a>
                        <a href="../delete.php?id=" class="btn btn-danger">B</a>
                      </td> 
                  </tr>

                          <?php } ?>     

            
            </tbody>
          </table>

        </div>
        <button class="btn btn-outline-info btn-sm" onclick="toggleSeccion()">Mostrar/Ocultar</button> 
       

    </div>
  </div>
     
</div> 



<?php include("../footer.php");?>
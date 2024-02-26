<?php  include("connect.php") ?>
<?php include("header.php") ?>

<div class="container w-75">
  <h2 class="mt-5">Estudiantes</h2>
  <div class="card card-body"> 
    

    

    <div class="table-responsive" > 
        <!-- <div id="seccionOculta" style="display: none;"> -->
          <table class="table rounded table-hover table-bordered table-lg mb-5">
            <thead>
              <tr>
                <th class="col-auto">ID</th>
                <th class="col-auto">Nombre</th>
                <th class="col-auto">Apellido</th>
                <th class="col-auto">Cedula</th>
                <th class="col-auto">telefono</th>
                <th class="col-auto">Correo</th>  
                <th class="text-nowrap col-auto">Nomb. contacto</th>
                <th class="text-nowrap col-auto">Tlf. contacto</th>
                <th class="col-auto">Discapacidad</th>
                <th class="col-auto">Edad</th>
                <th class="col-auto">Observaciones</th>
                <th class="col-auto">Seguimiento</th>
                <th class="text-nowrap col-auto">Fecha de Registro</th>
                <th class="col-auto">Facultad</th>
                <th class="col-auto">Carrera</th>
                <th class="col-auto">Periodo</th>

                <th class="col-auto">Acciones</th>
            
              </tr>
            </thead>
            <tbody>
              <!-- Aquí iría el contenido de la base de datos -->
              <?php 
                include("connect.php");
                $select = "SELECT a.id_estudiante, a.nombres, a.apellidos, a.cedula, a.telefono, a.correo, a.nombre_contacto, a.telefono_contacto, d.discapacidades, a.edad, a.observaciones, a.seguimiento, a.fecha_registro, f.Siglas, c.carreras, p.periodos FROM estudiantes a 
                  INNER JOIN universidad u ON a.id_estudiante = u.id_estudiante 
                  JOIN facultad f ON u.facultad_id = f.id_facultad 
                  JOIN carrera c ON u.carrera_id = c.id_carrera 
                  JOIN periodo p ON u.periodo_id = p.id_periodo
                  JOIN discapacidad d ON a.discapacidad_id = d.id_discapacidad;";
                $resultados = mysqli_query($conn, $select);

                while($row = mysqli_fetch_array($resultados)){ ?>
                  <tr>
                    <!-- columnas de la tabla en mysql-->

                    <td class="text-nowrap col-auto"><?php echo $row['id_estudiante'] ?></td>
                    <td class="text-nowrap col-auto"><?php echo $row['nombres'] ?></td>
                    <td class="text-nowrap col-auto"><?php echo $row['apellidos'] ?></td>
                    <td class="text-nowrap col-auto"><?php echo $row['cedula'] ?></td>
                    <td class="text-nowrap col-auto"><?php echo $row['telefono'] ?></td>
                    <td class="text-nowrap col-auto"><?php echo $row['correo'] ?></td>
                    <td class="text-nowrap col-auto"><?php echo $row['nombre_contacto'] ?></td>
                    <td class="text-nowrap col-auto"><?php echo $row['telefono_contacto'] ?></td>
                    <td class="text-nowrap col-auto"><?php echo $row['discapacidades'] ?></td>
                    <td class="text-nowrap col-auto"><?php echo $row['edad'] ?></td>
                    <td class="text-nowrap col-auto"><?php echo $row['observaciones'] ?></td>
                    <td class="text-nowrap col-auto"><?php echo $row['seguimiento'] ?></td>
                    <td class="text-nowrap col-auto"><?php echo $row['fecha_registro'] ?></td>
                    <td class="text-nowrap col-auto"><?php echo $row['Siglas'] ?></td>
                    <td class="text-nowrap col-auto"><?php echo $row['carreras'] ?></td>
                    <td class="text-nowrap col-auto"><?php echo $row['periodos'] ?></td>
                  

                    <!--Botones de acciones-->
                      <td>
                        <div class="btn-group">
                          <a href="edit.php?id=" class="btn btn-secondary d-inline-block">A</a>
                          <a href="delete.php?id=" class="btn btn-danger d-inline-block">B</a>
                        </div>
                      </td> 
                  </tr>

                          <?php } ?>     

            
            </tbody>
          </table>

        <!-- </div> -->
        
        <!-- <button class="btn btn-outline-info btn-xs" onclick="toggleSeccion()">Mostrar/Ocultar</button> -->
        <a href="/UNIPDIS/includes/formularios/Agreg_Estudiantes.php" class="btn btn-primary mb-3">Nuevo</a>
        
        
       

    </div>
  </div>

  


<?php include("footer.php") ?>
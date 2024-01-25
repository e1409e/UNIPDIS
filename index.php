<?php  include("includes/connect.php") ?>
<?php include("includes/header.php") ?>

<div class="container">
  <h2 class="mt-5">Contenido de la base de datos</h2> 

  <div class="table-responsive" >

      <table class="table table-bordered table-sm mb-5">
        <thead>
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Cedula</th>
            <th scope="col">Carrera</th>
            <th scope="col">Numero de telefono</th>
            <th scope="col">Correo</th>
            <th scope="col">Telefono</th>
            <th scope="col">Discapacidad</th>
            <th scope="col">Edad</th>
            <th scope="col">Certificado del conapdis</th>
            <th scope="col">Observaciones</th>
            <th scope="col">Seguimiento</th>
            <th scope="col">Año</th>
            <th scope="col">Acciones</th>
        
          </tr>
        </thead>
        <tbody>
          <!-- Aquí iría el contenido de la base de datos -->
          <?php 
            include("includes/connect.php");
            $select = "SELECT * FROM Estudiantes";
            $resultados = mysqli_query($conn, $select);

            while($row = mysqli_fetch_array($resultados)){ ?>
              <tr>
                <!-- columnas de la tabla en mysql-->

                <td><?php echo $row['nombres'] ?></td>
                <td><?php echo $row['apellidos'] ?></td>
                <td><?php echo $row['C.I'] ?></td>
                <td><?php echo $row['carrera'] ?></td>
                <td><?php echo $row['telefono'] ?></td>
                <td><?php echo $row['correo'] ?></td>
                <td><?php echo $row['num_telf'] ?></td>
                <td><?php echo $row['discapacidad'] ?></td>
                <td><?php echo $row['edad'] ?></td>
                <td><?php echo $row['certificado_conapdis'] ?></td>
                <td><?php echo $row['observaciones'] ?></td>
                <td><?php echo $row['seguimiento'] ?></td>
                <td><?php echo $row['year'] ?></td>
              

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

</div>

<?php include("includes/Agreg_Estudiantes.php") ?>


<?php include("includes/footer.php") ?>
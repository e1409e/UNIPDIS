<?php  include("connect.php") ?>
<?php include("header.php") ?>

<div class="container mb-5 w-75">
  <h2 class="mt-5 text-center">ESTUDIANTES</h2>
  <div class="card card-body kardE"> 
    

    <div class="table-responsive" > 
        
          <table id="estu" class="table rounded table-hover  table-lg mb-2 mt-3" >
            <thead>
              <tr>
                <th class="col-auto"></th>
                <th class="col-auto">#</th>
                <th class="col-auto">Nombre</th>
                <th class="col-auto">Apellido</th>
                <th class="col-auto">Cedula</th>
                <th class="col-auto">telefono</th>
                <th class="col-auto">Correo</th>  
                <th class="text-nowrap col-auto">Nomb. contacto</th>
                <th class="text-nowrap col-auto">Tlf. contacto</th>
                <th class="col-auto">Discapacidad:</th>
                <th class="col-auto">Observaciones:</th>
                <th class="col-auto">Seguimiento:</th>
                <th class="col-auto">Fecha de Nacimiento:</th>
                <th class="text-nowrap col-auto">Fecha de Registro:</th>
                <th class="col-auto">Facultad:</th>
                <th class="col-auto">Carrera:</th>
                <th class="col-auto">Periodo:</th>
                


                <th class="col-auto">Acciones</th>
            
              </tr>
            </thead>
            <tbody>
              <!-- Aquí iría el contenido de la base de datos -->
              <?php 
                include("connect.php");
                $select = "SELECT a.id_estudiante, a.nombres, a.apellidos, a.cedula, a.telefono, a.correo, a.nombre_contacto, a.telefono_contacto, d.discapacidades, a.fecha_nacimiento, a.observaciones, a.seguimiento, a.fecha_registro, f.Siglas, c.carreras, p.periodos FROM estudiantes a 
                  INNER JOIN universidad u ON a.id_estudiante = u.id_estudiante 
                  JOIN facultad f ON u.facultad_id = f.id_facultad 
                  JOIN carrera c ON u.carrera_id = c.id_carrera 
                  JOIN periodo p ON u.periodo_id = p.id_periodo
                  JOIN discapacidad d ON a.discapacidad_id = d.id_discapacidad;";
                $resultados = mysqli_query($conn, $select);

                while($row = mysqli_fetch_array($resultados)){ ?>
                  <tr>
                    <!-- columnas de la tabla en mysql-->
                    <td class="text-nowrap col-auto"></td>
                    <td class="text-nowrap col-auto"><?php echo $row['id_estudiante'] ?></td>
                    <td class="text-nowrap col-auto"><?php echo $row['nombres'] ?></td>
                    <td class="text-nowrap col-auto"><?php echo $row['apellidos'] ?></td>
                    <td class="text-nowrap col-auto"><?php echo $row['cedula'] ?></td>
                    <td class="text-nowrap col-auto"><?php echo $row['telefono'] ?></td>
                    <td class="text-nowrap col-auto"><?php echo $row['correo'] ?></td>
                    <td class="text-nowrap col-auto"><?php echo $row['nombre_contacto'] ?></td>
                    <td class="text-nowrap col-auto"><?php echo $row['telefono_contacto'] ?></td>
                    <td class="text-nowrap col-auto"><?php echo $row['discapacidades'] ?></td>
                    <td class="text-nowrap col-auto"><?php echo $row['observaciones'] ?></td>
                    <td class="text-nowrap col-auto"><?php echo $row['seguimiento'] ?></td>
                    <td class="text-nowrap col-auto"><?php echo $row['fecha_nacimiento'] ?></td>
                    <td class="text-nowrap col-auto"><?php echo $row['fecha_registro'] ?></td>
                    <td class="text-nowrap col-auto"><?php echo $row['Siglas'] ?></td>
                    <td class="text-nowrap col-auto"><?php echo $row['carreras'] ?></td>
                    <td class="text-nowrap col-auto"><?php echo $row['periodos'] ?></td>
                  

                    <!--Botones de acciones-->
                      <td>
                        <div class="btn-group">
                          <a href="/UNIPDIS/includes/edits/edit_estudiante.php?id=<?php echo $row['id_estudiante']; ?>" class="btn btn-secondary d-inline-block"><i class="fa fa-pencil"></i></a>


                          <a href="/UNIPDIS/includes/deletes/delete_estu.php?id=<?php echo $row['id_estudiante']; ?>" class="btn btn-danger d-inline-block"><i class="fa fa-trash"></i></a>
                        </div>
                      </td> 
                  </tr>

                          <?php } ?>     

            
            </tbody>
          </table>


       
        
        
        <a href="/UNIPDIS/includes/formularios/agreg_E.php" class="btn btn-primary mb-3 mt-3">Nuevo</a>
       
        
        
       

    </div>
  </div>
</div>  


<script type="text/javascript">
    $(document).ready(function() {
        $('#estu').DataTable({
            "language": {
                "url": "/UNIPDIS/JS/es-ES.json"
            },
          "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
          "dom": 'Bflrtpi',
          "pagingType": "simple_numbers",
          "info": true,
          
            buttons: [
                  {
                  extend: 'excelHtml5',
                  text: '<i class=" fa fa-file-excel-o"></i> ',
                  titleAttr: 'Exportar a Excel',
                  className: 'btn btn-success',
                },
                {
                  extend: 'pdfHtml5',
                  text: '<i class="fa fa-file"></i> ',
                  titleAttr: 'Exportar a PDF',
                  className: 'btn btn-danger',
                  orientation: 'landscape',
                    pageSize: 'LEGAL',
                },
                {
                  extend: 'print',
                  text: '<i class="fa fa-print"></i> ',
                  titleAttr: 'Imprimir',
                  className: 'btn btn-info',
                  orientation: 'landscape',
                    pageSize: 'LEGAL',
                },

              ],
            
         columnDefs: [
        {
            className: 'dtr-control',
            orderable: false,
            target: 0
        }
    ],
    order: [1, 'asc'],
    responsive: {
        details: {
            type: 'column',
            target: 'tr'
        }
    }

        });
    });
</script>


<?php include("footer.php") ?>
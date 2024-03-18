<?php include("../header.php");?>
<?php  include("../connect.php");?>



<div class="container W-75">
  <h2 class="mt-5 text-center">OTROS PARIENTES</h2>
  <div class="card card-body kardE">
  
    <div class="table-responsive" > 
        <!-- <div id="seccionOculta" style="display: none;"> -->
          <table id="OP" class="table table-bordered rounded table-hover table-lg mb-2 mt-3">
            <thead>
              <tr>
                <th class="col-auto"></th>
                <th class="col-auto">#</th>
                <th class="text-nowrap col-auto">Estudiante</th>
                <th class="col-auto">Nombre</th>
                <th class="col-auto">Apellido</th>
                <th class="text-nowrap col-auto">Fecha de Nacimiento</th>
                <th class="col-auto">Ocupacion</th>
                <th class="col-auto">Parentesco</th>
                <th class="col-1">Acciones</th>
            
              </tr>
            </thead>
            <tbody>
              <!-- Aquí iría el contenido de la base de datos -->
              <?php 
                include("../connect.php");
                $select = "SELECT b.id_pariente, CONCAT(a.nombres, ' ', a.apellidos, ' C.I: ', a.cedula) AS Estudiante, b.nombre_pariente, b.apellido_pariente, b.fecha_nacimiento, b.ocupacion, b.parentesco FROM otros_parientes b INNER JOIN estudiantes a ON a.id_estudiante = b.id_estudiante;";
                $resultados = mysqli_query($conn, $select);

                while($row = mysqli_fetch_array($resultados)){ ?>
                  <tr>
                    <!-- columnas de la tabla en mysql-->
                    <td class="text-nowrap col-auto"></td>
                    <td class="text-nowrap col-auto"><?php echo $row['id_pariente'] ?></td>
                    <td class="text-nowrap col-auto"><?php echo $row['Estudiante'] ?></td>
                    <td class="text-nowrap col-auto"><?php echo $row['nombre_pariente'] ?></td>
                    <td class="text-nowrap col-auto"><?php echo $row['apellido_pariente'] ?></td>
                    <td class="text-nowrap col-2"><?php echo $row['fecha_nacimiento'] ?></td>
                    <td class="text-nowrap col-auto"><?php echo $row['ocupacion'] ?></td>
                    <td class="text-nowrap col-auto"><?php echo $row['parentesco'] ?></td>
                    
                    
                  

                    <!--Botones de acciones-->
                      <td>
                        <div class="btn-group">
                          <a href="../edits/edit_OP.php?id=<?php echo $row['id_pariente']; ?>" class="btn btn-secondary d-inline-block"><i class="fa fa-pencil"></i></a>


                          <a href="../deletes/delete_OP.php?id=<?php echo $row['id_pariente']; ?>" class="btn btn-danger d-inline-block"><i class="fa fa-trash"></i></a>
                        </div>
                      </td> 
                  </tr>

                          <?php } ?>     

            
            </tbody>
          </table>

        <a href="/UNIPDIS/includes/formularios/agreg_otros_parientes.php" class="btn btn-primary mb-3 mt-3">Nuevo</a>

    </div>
  </div>
     
</div> 
<script type="text/javascript">
    $(document).ready(function() {
        $('#OP').DataTable({
            "language": {
                "url": "/UNIPDIS/JS/es-ES.json"
            },
          "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
          "dom": 'Bflrtpi',
          "pagingType": "simple_numbers",
          "info": false,
          
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
                },
                {
                  extend: 'print',
                  text: '<i class="fa fa-print"></i> ',
                  titleAttr: 'Imprimir',
                  className: 'btn btn-info',
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


<?php include("../footer.php");?>
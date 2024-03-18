<?php  include("../connect.php") ?>
<?php include("../header.php") ?>


<div class="container w-75">
  <h2 class="mt-5 text-center">INCIDENCIAS</h2>
  <div class="card card-body kardE">
  
    

    

    <div class="table-responsive" >
             
          <table id="Tinc" class="table table-bordered rounded table-hover table-lg mb-2 mt-3 ">
            <thead>
              <tr>
                <th class="col-auto"></th>
                <th class="col-auto">#</th>
                <th class="col-auto">Estudiante</th>
                <th class="text-nowrap col-auto">Hora del Incidente</th>
                <th class="text-nowrap col-auto">Fecha del Incidente</th>
                <th class="text-nowrap col-auto">Lugar del Incidente</th>
                <th class="text-nowrap col-auto">Descripción</th>
                <th class="text-nowrap col-auto">Acuerdos:</th>
                <th class="text-nowrap col-auto">Observaciones:</th>
                <th class="text-nowrap col-1">Acciones</th>
            
              </tr>
            </thead>
            <tbody>
              <!-- Aquí iría el contenido de la base de datos -->
              <?php 
                include("../connect.php");
                $select = "SELECT b.id_incidencia, CONCAT(a.nombres, ' ', a.apellidos, ' C.I: ', a.cedula) AS Estudiante, b.hora_incidente, b.fecha_incidente, b.donde_incidente, b.descripcion_incidente, b.acuerdos, b.observaciones FROM incidencias b INNER JOIN estudiantes a ON a.id_estudiante = b.id_estudiante;";
                $resultados = mysqli_query($conn, $select);

                while($row = mysqli_fetch_array($resultados)){ ?>
                  <tr>
                    <!-- columnas de la tabla en mysql-->
                    <td class="text-nowrap col-auto"></td>
                    <td class="text-nowrap col-auto"><?php echo $row['id_incidencia'] ?></td>
                    <td class="text-nowrap col-auto"><?php echo $row['Estudiante'] ?></td>
                    <td class="text-nowrap col-auto"><?php echo $row['hora_incidente'] ?></td>
                    <td class="text-nowrap col-auto"><?php echo $row['fecha_incidente'] ?></td>
                    <td class="text-nowrap col-auto"><?php echo $row['donde_incidente'] ?></td>
                    <td class="text-nowrap col-auto"><?php echo $row['descripcion_incidente'] ?></td>
                    <td class="text-nowrap col-auto"><?php echo $row['acuerdos'] ?></td>
                    <td class="text-nowrap col-auto"><?php echo $row['observaciones'] ?></td>
                    

                    <!--Botones de acciones-->
                      <td>
                        <div class="btn-group">
                          <a href="../edits/edit_inci.php?id=<?php echo $row['id_incidencia']; ?>" class="btn btn-secondary d-inline-block"><i class="fa fa-pencil"></i></a>

                          <a href="../deletes/delete_inci.php?id=<?php echo $row['id_incidencia']; ?>" class="btn btn-danger d-inline-block"><i class="fa fa-trash"></i></a>
                        </div>
                      </td> 
                  </tr>

                          <?php } ?>     

            
            </tbody>
          </table>
          

      
      
      <a href="/UNIPDIS/includes/formularios/agreg_incidencias.php" class="float-right btn btn-primary col-1 mb-3 mt-3">Nuevo</a>
    </div>
    
    
    
  </div>
     
</div> 

<div class="text-right">
  <script type="text/javascript">
    $(document).ready(function() {
        $('#Tinc').DataTable({
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
</div>



<?php include("../footer.php") ?>
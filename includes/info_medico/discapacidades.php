<?php  include("../connect.php") ?>
<?php include("../header.php") ?>


<div class="container w-75">
  <h2 class="mt-5">Discapacidades</h2>
  <div class="card card-body">
    

    <div class="table-responsive" > 
        <!-- <div id="seccionOculta" style="display: none;"> -->
          <table id="Tdisc" class="table table-bordered rounded table-hover table-lg mb-2 mt-3">
            <thead>
              <tr>
                <th class="col-1"></th>
                <th class="col-1">#</th>
                <th class="col-auto">Discapacidad</th>
                <th class="col-1">Acciones</th>
              </tr>
            </thead>
            <tbody>
              <!-- Aquí iría el contenido de la base de datos -->
              <?php 
                include("../connect.php");
                $select = "SELECT * FROM discapacidad";
                $resultados = mysqli_query($conn, $select);

                while($row = mysqli_fetch_array($resultados)){ ?>
                  <tr>
                    <!-- columnas de la tabla en mysql-->
                    <td></td>
                    <td><?php echo $row['id_discapacidad'] ?></td>
                    <td><?php echo $row['discapacidades'] ?></td>

                    <!--Botones de acciones-->
                      <td>
                        <div class="btn-group">
                          <a href="../edits/edit_disc.php?id=<?php echo $row['id_discapacidad']; ?>" class="btn btn-secondary d-inline-block"><i class="fa fa-pencil"></i></a>

                          <a href="../deletes/delete_disc.php?id=<?php echo $row['id_discapacidad']; ?>" class="btn btn-danger d-inline-block"><i class="fa fa-trash"></i></a>
                        </div>
                      </td> 
                  </tr>

                          <?php } ?>     

            
            </tbody>
          </table>

        <!-- </div>
        <button class="btn btn-outline-info btn-xs" onclick="toggleSeccion()">Mostrar/Ocultar</button>   -->
        <a href="/UNIPDIS/includes/formularios/agreg_discapacidad.php" class="btn btn-primary mb-3 mt-3">Nuevo</a>
       

    </div>
  </div>
     
</div> 
<script type="text/javascript">
    $(document).ready(function() {
        $('#Tdisc').DataTable({
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


<?php include("../footer.php") ?>
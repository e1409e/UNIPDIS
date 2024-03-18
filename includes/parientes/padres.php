<?php include("../header.php");?>
<?php  include("../connect.php");?>





<div class="container mb-5 W-75">
  <h2 class="mt-5 text-center">REPRESENTANTES</h2>
  <div class="card card-body kardE"> 
    

    <div class="table-responsive" > 
        <!-- <div id="seccionOculta" style="display: none;"> -->
          <table class="table table-bordered rounded table-hover table-lg mb-2 mt-3" id="padre">
            <thead>
              <tr>
                <th class="text-nowrap col-auto"></th>
                <th class="text-nowrap col-auto">#</th>
                <th class="col-auto">Parentesco</th>

                <th class="text-nowrap col-auto">Nombre Del Representante</th>
                <th class="text-nowrap col-auto">Cedula</th>
                <th class="text-nowrap col-auto">Lugar de Nacimiento</th>
                <th class="text-nowrap col-auto">Fecha de Nacimiento</th>
                <th class="text-nowrap col-autp">Direccion</th>
                <th class="text-nowrap col-auto">Tlf. Contacto:</th>
                <th class="text-nowrap col-auto">Lugar de Trabajo:</th>
                <th class="text-nowrap col-auto">Estado:</th>
                <th class="text-nowrap col-auto">Municipio:</th>
                <th class="text-nowrap col-auto">Departamento:</th>
                <th class="text-nowrap col-auto">Estado Civil:</th>
                <th class="text-nowrap col-auto">Estudiante:</th>
                
                <th class="col-1">Acciones</th>
            
              </tr>
            </thead>
            <tbody>
              <!-- Aquí iría el contenido de la base de datos -->
              <?php 
                include("../connect.php");
                $select = "SELECT p.id_padres, p.tipo_familiar, a.nombre_contacto, p.cedula_padre, p.lugar_nacimiento, p.fecha_nacimiento, p.direccion_habitacion, a.telefono_contacto, p.lugar_trabajo, p.estado, p.municipio, p.departamento, p.estadodo_civil, CONCAT(a.nombres, ' ', a.apellidos) AS id_estudiante FROM padres p INNER JOIN estudiantes a ON p.id_estudiante = a.id_estudiante; ";
                $resultados = mysqli_query($conn, $select);

                while($row = mysqli_fetch_array($resultados)){ ?>
                  <tr>
                    <!-- columnas de la tabla en mysql-->
                     <td class="text-nowrap col-auto"></td>
                    <td class="text-nowrap col-auto"><?php echo $row['id_padres'] ?></td>
                    <td class="text-nowrap col-auto"><?php echo $row['tipo_familiar'] ?></td>
                    <td class="text-nowrap col-auto"><?php echo $row['nombre_contacto'] ?></td>
                    
                    <td class="text-nowrap col-auto"><?php echo $row['cedula_padre'] ?></td>
                    <td class="text-nowrap col-auto"><?php echo $row['lugar_nacimiento'] ?></td>
                    <td class="text-nowrap col-auto"><?php echo $row['fecha_nacimiento'] ?></td>
                    <td class="text-nowrap col-auto"><?php echo $row['direccion_habitacion'] ?></td>
                    <td class="text-nowrap col-auto"><?php echo $row['telefono_contacto'] ?></td>
                    <td class="text-nowrap col-auto"><?php echo $row['lugar_trabajo'] ?></td>
                    <td class="text-nowrap col-auto"><?php echo $row['estado'] ?></td>
                    <td class="text-nowrap col-auto"><?php echo $row['municipio'] ?></td>
                    <td class="text-nowrap col-auto"><?php echo $row['departamento'] ?></td>
                    <td class="text-nowrap col-auto"><?php echo $row['estadodo_civil'] ?></td>
                    <td class="text-nowrap col-auto"><?php echo $row['id_estudiante'] ?></td>
                    
                  

                    <!--Botones de acciones-->
                      <td>
                        <div class="btn-group">
                          <a href="../edits/edit_repre.php?id=<?php echo $row['id_padres']; ?>" class="btn btn-secondary d-inline-block"><i class="fa fa-pencil"></i></a>


                          <a href="../deletes/delete_repre.php?id=<?php echo $row['id_padres']; ?>" class="btn btn-danger d-inline-block"><i class="fa fa-trash"></i></a>
                        </div>
                      </td> 
                  </tr>

                          <?php } ?>     

            
            </tbody>
          </table>

        
    </div>
  </div>
     
</div> 
<script type="text/javascript">
    $(document).ready(function() {
        $('#padre').DataTable({
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
                  exportOptions: {
                        modifier: {
                            page: 'current'
                        }
                    },
                  filename: function() {
                    return "Incidencias"      
                    }, 
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


<?php include("../footer.php");?>
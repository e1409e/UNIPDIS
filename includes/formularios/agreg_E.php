<?php include("../header.php") ?>
<?php  include("../connect.php") ?>

<div class="container w-75">

<h2 class="mt-5 item-title text-center">Agregar Nuevos Estudiantes</h2> 
  
  <div class="card card-body mb-3">
     <form action="/UNIPDIS/includes/guardados/save_E.php" method="POST" class="row justify-content-center align-items-center needs-validation">
      
        
        
        <div class="form-group col-6  mt-2">
            <label for="nombre"><h6>Nombre del Estudiante:</h6></label>
            <input type="text" name="nombre" id="nombre" class="form-control" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Es necesario llenar este campo</div>
        </div>
            
        
        <div class="form-group col-6 mt-2">
            <label for="apellido"><h6>Apellido del Estudiante:</h6></label>
            <input type="text" name="apellido" id="apellido" class="form-control" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Es necesario llenar este campo</div>
        </div>

          <div class="form-group col-6 mt-2">
            <label for="fechN"><h6>Fecha de Nacimiento:</h6></label>
            <input type="date" name="fechN" id="fechN" class="form-control" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Es necesario llenar este campo</div>
        </div>

           
        
        <div class="form-group col-6 mt-2">
            <label for="cedula"><h6>Cédula del Estudiante:</h6></label>
            <input type="text" name="cedula" id="cedula" class="form-control" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Es necesario llenar este campo</div>
        </div>

        
        <div class="form-group col-6 mt-2">
            <label for="telefono"><h6>Teléfono del Estudiante:</h6></label>
            <input type="text" name="telefono" id="telefono" class="form-control" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Es necesario llenar este campo</div>
        </div>

        
        <div class="form-group col-6 mt-2">
            <label for="correo"><h6>Correo Académico:</h6></label>
            <input type="text" name="correo" id="correo" class="form-control" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Es necesario llenar este campo</div>
        </div>

       
       
        
        
        
        <div class="form-group col-12 mt-2">
            <label for="observaciones"><h6>Observaciones:</h6></label>
            <textarea name="observaciones" id="observaciones" rows="4" class="form-control" required></textarea>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Es necesario llenar este campo</div>
        </div>

        <div class="form-group col-12 mt-2 mb-3">
            <label for="seguimiento"><h6>Seguimiento:</h6></label>
            <textarea name="seguimiento" id="seguimiento" rows="4" class="form-control" required></textarea>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Es necesario llenar este campo</div>
        </div>

        <div class="col-6 mt-4">
        <h6 for="opciones">Discapacidad:</h6>
                <select class="form-select discselect2" aria-label="Default select example" name="discapacidad_id" id="discapacidad" required>
                   <option value="discapacidad">Seleccione una discapacidad</option>
                    <?php
                  // Conexión a la base de datos
                  $conexion = mysqli_connect("localhost", "root", "", "unipdis");

                  // Consulta a la tabla para obtener las opciones
                  $consulta = "SELECT id_discapacidad, discapacidades FROM discapacidad";
                  $resultados = mysqli_query($conexion, $consulta);

                  // Recorremos los resultados y creamos las opciones
                  while ($fila = mysqli_fetch_array($resultados)) {
                    echo '<option value="' . $fila['id_discapacidad'] . '">' . $fila['discapacidades'] . '</option>';
                  }

                    // Cerramos la conexión
                    mysqli_close($conexion);
                    ?>
                </select>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback">Es necesario llenar este campo</div>   
        </div>


        

        <div class="col-6 mt-4">
            <h6 for="opciones">Carreras:</h6>
                <select class="form-select estuselect2" aria-label="Default select example" name="carrera_id" id="carrera" required>
                   <option value="carrera">Seleccione una carrera</option>
                    <?php
                  // Conexión a la base de datos
                  $conexion = mysqli_connect("localhost", "root", "", "unipdis");

                  // Consulta a la tabla para obtener las opciones
                  $consulta = "SELECT id_carrera, carreras FROM carrera";
                  $resultados = mysqli_query($conexion, $consulta);

                  // Recorremos los resultados y creamos las opciones
                  while ($fila = mysqli_fetch_array($resultados)) {
                    echo '<option value="' . $fila['id_carrera'] . '">' . $fila['carreras'] . '</option>';
                  }

                    // Cerramos la conexión
                    mysqli_close($conexion);
                    ?>
                </select>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback">Es necesario llenar este campo</div>
            </div>    

            <div class="col-6 mt-4 mb-4">
             <h6 for="opciones">Facultades:</h6>
                <select class="form-select estuselect2" aria-label="Default select example" name="facultades_id" id="facultades" required>
                   <option value="default">Seleccione una Facultad</option>
                    <?php
                  // Conexión a la base de datos
                  $conexion = mysqli_connect("localhost", "root", "", "unipdis");

                  // Consulta a la tabla para obtener las opciones
                  $consulta = "SELECT id_facultad, facultades FROM facultad";
                  $resultados = mysqli_query($conexion, $consulta);

                  // Recorremos los resultados y creamos las opciones
                  while ($fila = mysqli_fetch_array($resultados)) {
                    echo '<option value="' . $fila['id_facultad'] . '">' . $fila['facultades'] . '</option>';
                  }

                    // Cerramos la conexión
                    mysqli_close($conexion);
                    ?>
                </select>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback">Es necesario llenar este campo</div>
            </div>
            

            <div class="col-6 mt-4 mb-4">
            <h6 for="opciones">Periodo:</h6>
                <select class="form-select estuselect2" aria-label="Default select example" name="periodo_id" id="periodo" required>
                   <option value="periodo">Seleccione un periodo</option>
                    <?php
                  // Conexión a la base de datos
                  $conexion = mysqli_connect("localhost", "root", "", "unipdis");

                  // Consulta a la tabla para obtener las opciones
                  $consulta = "SELECT id_periodo, periodos FROM periodo";
                  $resultados = mysqli_query($conexion, $consulta);

                  // Recorremos los resultados y creamos las opciones
                  while ($fila = mysqli_fetch_array($resultados)) {
                    echo '<option value="' . $fila['id_periodo'] . '">' . $fila['periodos'] . '</option>';
                  }

                    // Cerramos la conexión
                    mysqli_close($conexion);
                    ?>
                </select>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback">Es necesario llenar este campo</div>
            </div>   

        
        <h2 class="mt-3 mb-5 item-title text-center">Agregar Representante</h2>

        <div class="form-group col-6 mt-2">
            <label for="nombre_contacto"><h6>Nombre del Representante:</h6></label>
            <input type="text" name="nombre_contacto" id="nombre_contacto" class="form-control" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Es necesario llenar este campo</div>
        </div>

        
        <div class="form-group col-6 mt-2">
            <label for="telefono_contacto"><h6>Teléfono del Representante</h6></label>
            <input type="text" name="telefono_contacto" id="telefono_contacto" class="form-control" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Es necesario llenar este campo</div>
        </div>


         <div class="form-group col-6 mt-2">
            <label for="parentesco"><h6>Parentesco:</h6></label>
            <input type="text" name="parentesco" id="parentesco" class="form-control" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Es necesario llenar este campo</div>
        </div>
                
        
        <div class="form-group col-6 mt-2">
            <label for="cedula_repre"><h6>Cédula del Representante:</h6></label>
            <input type="text" name="cedula_repre" id="cedula_repre" class="form-control" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Es necesario llenar este campo</div>
        </div>

        
        <div class="form-group col-6 mt-2">
            <label for="lug_naci"><h6>Lugar de Nacimiento:</h6></label>
            <input type="text" name="lug_naci" id="lug_naci" class="form-control" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Es necesario llenar este campo</div>
        </div>

        
        <div class="form-group col-6 mt-2">
            <label for="fech_naci"><h6>Fecha de Nacimiento:</h6></label>
            <input type="text" name="fech_naci" id="fech_naci" class="form-control" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Es necesario llenar este campo</div>
        </div>

        
        <div class="form-group col-6 mt-2">
            <label for="dir_hab"><h6>Dirección de Habitación:</h6></label>
            <input type="text" name="dir_hab" id="dir_hab" class="form-control" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Es necesario llenar este campo</div>
        </div>

        
        <div class="form-group col-6 mt-2">
            <label for="telf_cont"><h6>Telefono de Contacto:</h6></label>
            <input type="text" name="telf_cont" id="telf_cont" class="form-control" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Es necesario llenar este campo</div>
        </div>

        
        <div class="form-group col-6 mt-2">
            <label for="lug_trab"><h6>Lugar de Trabajo:</h6></label>
            <input type="text" name="lug_trab" id="lug_trab" class="form-control" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Es necesario llenar este campo</div>
        </div>

        
        <div class="form-group col-6 mt-2">
            <label for="Estado"><h6>Estado:</h6></label>
            <input type="text" name="Estado" id="Estado" class="form-control" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Es necesario llenar este campo</div>
        </div>

        
        <div class="form-group col-6 mt-2">
            <label for="municipio"><h6>Municipio:</h6></label>
            <input type="text" name="municipio" id="municipio" class="form-control" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Es necesario llenar este campo</div>
        </div>

        
        <div class="form-group col-6 mt-2">
            <label for="departamento"><h6>Departamento:</h6></label>
            <input type="text" name="departamento" id="departamento" class="form-control" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Es necesario llenar este campo</div>
        </div>

        
        <div class="form-group col-12 mt-2">
            <label for="Edo_civil"><h6>Estado Civil:</h6></label>
            <input type="text" name="Edo_civil" id="Edo_civil" class="form-control" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Es necesario llenar este campo</div>
        </div>

             

       
       <br>
       <br>
       <input type="submit" name="Guardar" class="btn btn-success btn-block col-2 mt-5" value="Guardado">
      

    </form>
  </div>
</div>



<?php include("../footer.php") ?>

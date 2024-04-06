<?php
include("../connect.php");


if (isset($_GET['id'])) {
   
    $id_psicologico = $_GET['id'];

   
    $sql = "SELECT * FROM reporte_psicologico WHERE id_psicologico = $id_psicologico;";
    $result =  mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        
        
        $row = mysqli_fetch_array($result);
        $Nomb = $row['Nombre'];
        $Ape = $row['Apellido'];
        $LN = $row['lugnac'];
        $FN = $row['fechnac'];
        $Ed = $row['edad'];
        $lv = $row['nv_ins'];
        $moti = $row['motivocon'];
        $SD = $row['sintdiag'];
        $reco = $row['recomendaciones'];
                    


        }
    }  

    if (isset($_POST['update'])) {
      $id_psicologico = $_GET['id'];

        $Nombre = $_POST['Nombre'];
        $Apellido = $_POST['Apellido'];
        $lugnac = $_POST['lugnac'];
        $fechnac = $_POST['fechnac'];
        $edad = $_POST['edad'];
        $nv_ins = $_POST['nv_ins'];
        $motivocon = $_POST['motivocon'];
        $sintdiag = $_POST['sintdiag'];
        $recomendaciones = $_POST['recomendaciones'];

      $query = "UPDATE reporte_psicologico set Nombre = '$Nombre', Apellido = '$Apellido', lugnac = '$lugnac', fechnac = '$fechnac', edad = '$edad', nv_ins = '$nv_ins', motivocon = '$motivocon', sintdiag = '$sintdiag', recomendaciones = '$recomendaciones'  WHERE id_psicologico = $id_psicologico;";
      mysqli_query($conn, $query);
      
      header('Location: ../info_medico/reportePsico.php');
}

?>

<?php include('../header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-8 mx-auto">
        <h2 class="text-center mt-3">Editar Reporte Psicologico</h2>
      <div class="card card-body">
      <form action="edit_RP.php?id=<?php echo $_GET['id']; ?>" method="POST" class="row justify-content-center align-items-center">
       

            <div class="form-group col-6 mt-2">
                <label for="Nombre"><h6>Nombre:</h6></label>
                <input type="text" name="Nombre" id="Nombre" class="form-control" value="<?php echo $Nomb; ?>" required>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback">Es necesario llenar este campo</div>
            </div>


            
            <div class="form-group col-6 mt-2">
                 <label for="Apellido"><h6>Apellido:</h6></label>
                <input type="text" name="Apellido" id="Apellido" class="form-control" value="<?php echo $Ape; ?>" required>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback">Es necesario llenar este campo</div>
            </div>

             
            <div class="form-group col-6 mt-2">
                <label for="lugnac"><h6>Lugar de Nacimiento:</h6></label>
                <input type="text" name="lugnac" id="lugnac" class="form-control" value="<?php echo $LN; ?>" required>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback">Es necesario llenar este campo</div>
            </div>


            <div class="form-group col-6 mt-2">
                <label for="fechnac"><h6>Fecha de Nacimiento:</h6></label>
                <input type="date" name="fechnac" id="fechnac" class="form-control" value="<?php echo $FN; ?>" required>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback">Es necesario llenar este campo</div>
            </div>

            <div class="form-group col-6 mt-2">
                <label for="edad"><h6>Edad:</h6></label>
                <input type="text" name="edad" id="edad" class="form-control" value="<?php echo $Ed; ?>" required>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback">Es necesario llenar este campo</div>
            </div>

            <div class="form-group col-6 mt-2">
                <label for="nv_ins"><h6>Nivel de Instrucción:</h6></label>
                <input type="text" name="nv_ins" id="nv_ins" class="form-control" value="<?php echo $lv; ?>" required>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback">Es necesario llenar este campo</div>
            </div>




            <div class="form-group col-12 mt-2">
                <label for="motivocon"><h6>Motivo de Consulta:</h6></label>
                <textarea name="motivocon" id="motivocon" rows="6" class="form-control" required><?php echo $moti; ?></textarea>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback">Es necesario llenar este campo</div>
            </div>

            <div class="form-group col-12 mt-2">
                <label for="sintdiag"><h6>Síntesis Diagnóstica:</h6></label>
                <textarea name="sintdiag" id="sintdiag" rows="6" class="form-control" required><?php echo $SD; ?></textarea>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback">Es necesario llenar este campo</div>
            </div>


            <div class="form-group col-12 mt-2">
                <label for="recomendaciones"><h6>Recomendaciones:</h6></label>
                <textarea name="recomendaciones" id="recomendaciones" rows="6" class="form-control" required><?php echo $reco; ?></textarea>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback">Es necesario llenar este campo</div>
            </div>

          

           <button class="btn btn-success mb-2 mt-3 col-4" name="update">Update</button>

        </div>
       
       
     </form>
      </div>
    </div>
  </div>
</div>
<?php include('../footer.php'); ?>
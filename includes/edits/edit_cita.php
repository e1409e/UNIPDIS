<?php
include("../connect.php");


if (isset($_GET['id'])) {
   
    $id_cita = $_GET['id'];

   
    $sql = "SELECT * FROM citas WHERE id_citas = $id_cita;";
    $result =  mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        
        
        $row = mysqli_fetch_array($result);
        $fechaC = $row['fecha_cita'];
        $motivoC = $row['motivo_cita'];
    


        }
    }  

    if (isset($_POST['update'])) {
      $id_cita = $_GET['id'];
      $fecha = $_POST['fecha'];
      $motivo = $_POST['motivo'];

      $query = "UPDATE citas set fecha_cita = '$fecha', motivo_cita = '$motivo' WHERE id_citas = $id_cita;";
      mysqli_query($conn, $query);
      
      header('Location: ../info_medico/citas.php');
}

?>

<?php include('../header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit_cita.php?id=<?php echo $_GET['id']; ?>" method="POST" class="row justify-content-center align-items-center">
        <div class="form-group">
          <input name="fecha" type="date" class="form-control" value="<?php echo $fechaC; ?>">
        </div>
        <div class="form-group">
        <textarea name="motivo" class="form-control mt-2" cols="30" rows="5"><?php echo $motivoC;?></textarea>
        </div>
        <button class="btn btn-success mb-2 mt-3 col-4" name="update">
          Update
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('../footer.php'); ?>
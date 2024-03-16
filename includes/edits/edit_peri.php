<?php
include("../connect.php");


if (isset($_GET['id'])) {
   
    $id_peri = $_GET['id'];

   
    $sql = "SELECT * FROM periodo WHERE id_periodo = $id_peri;";
    $result =  mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        
        
        $row = mysqli_fetch_array($result);
        $periodo = $row['periodos'];
        
    


        }
    }  

    if (isset($_POST['update'])) {
      $id_peri = $_GET['id'];
      $peri = $_POST['periodo'];
      

      $query = "UPDATE periodo set periodos = '$peri' WHERE id_periodo = $id_peri;";
      mysqli_query($conn, $query);
      
      header('Location: ../universidad/periodos.php');
}

?>

<?php include('../header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit_peri.php?id=<?php echo $_GET['id']; ?>" method="POST" class="row justify-content-center align-items-center">


        <div class="form-group col-9">
            <label for="periodo"><h6>Periodo</h6></label>
            <input type="text" name="periodo" id="periodo" class="form-control" value="<?php echo $periodo; ?>">
        </div>

       
        <button class="btn btn-success mb-2 mt-3 col-5" name="update">Update</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('../footer.php'); ?>
<?php
include("../connect.php");


if (isset($_GET['id'])) {
   
    $id_disc = $_GET['id'];

   
    $sql = "SELECT * FROM discapacidad WHERE id_discapacidad = $id_disc;";
    $result =  mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        
        
        $row = mysqli_fetch_array($result);
        $disc = $row['discapacidades'];
        
    


        }
    }  

    if (isset($_POST['update'])) {
      $id_disc = $_GET['id'];
      $disc = $_POST['discapacidad'];
      

      $query = "UPDATE discapacidad set discapacidades = '$disc' WHERE id_discapacidad = $id_disc;";
      mysqli_query($conn, $query);
      
      header('Location: ../info_medico/discapacidades.php');
}

?>

<?php include('../header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit_disc.php?id=<?php echo $_GET['id']; ?>" method="POST" class="row justify-content-center align-items-center">


        <div class="form-group col-8">
            <label for="discapacidad"><h6>Discapacidad</h6></label>
            <input type="text" name="discapacidad" id="discapacidad" class="form-control">
        </div>
       
        <button class="btn btn-success mb-2 mt-3 col-5" name="update">Update</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('../footer.php'); ?>
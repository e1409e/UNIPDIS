<?php include("../header.php") ?>
<?php  include("../connect.php") ?>



<div class="container w-75">
<h2 class="mt-5 item-title text-center">Agregar Discapacidad</h2>
<div class="col-md-8 mx-auto"> 
  <div class="card card-body mb-3">
     <form action="/UNIPDIS/includes/guardados/save_disc.php" method="POST" class="row justify-content-center needs-validation">
       


        <div class="form-group col-9">
            <label for="discapacidad"><h6>Discapacidad</h6></label>
            <input type="text" name="discapacidad" id="discapacidad" class="form-control" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Es necesario llenar este campo</div>
        </div>

        
        

        
        <br>
        <br>    

        <input type="submit" name="Guardar_disc" class="btn btn-success btn-block col-4 mt-3" value="Guardado">
        </div>
       
       
     </form>
   </div>
</div>
</div>


<?php include("../footer.php") ?>

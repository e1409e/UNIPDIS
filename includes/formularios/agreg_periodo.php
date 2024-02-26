<?php include("../header.php") ?>
<?php  include("../connect.php") ?>



<div class="container w-75">
<h2 class="mt-5 item-title text-center">Agregar Periodo</h2> 
  <div class="card card-body mb-3">
     <form action="/UNIPDIS/includes/guardados/save_periodo.php" method="POST" class="row justify-content-center">
       


        <div class="form-group col-11">
            <label for="periodo"><h6>Periodo</h6></label>
            <input type="text" name="periodo" id="periodo" class="form-control">
        </div>

        
        

        
        <br>
        <br>    

        <input type="submit" name="Guardar_periodo" class="btn btn-success btn-block col-3 mt-3" value="Guardado">
        </div>
       
       
     </form>
   </div>
  </div>


<?php include("../footer.php") ?>
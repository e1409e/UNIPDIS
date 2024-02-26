<?php 
 $conexion = mysqli_connect("localhost", "root", "", "unipdis");

                  

    if (isset($_POST["Guardar_disc"])){
        
        
        $discapacidad = $_POST['discapacidad'];
        
        

        $query = "INSERT INTO `discapacidad` (`discapacidades`) VALUES ('$discapacidad');";
        
        $result = mysqli_query($conexion, $query);

        if(!$result){
            die("Query failed");

         }
        
        header("Location: ../info_medico/discapacidades.php");
        


       
        // header("Location: index.php");  
    }

    
?>
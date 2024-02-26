<?php 
 $conexion = mysqli_connect("localhost", "root", "", "unipdis");

                  

    if (isset($_POST["Guardar_periodo"])){
        
        
        $periodo = $_POST['periodo'];
        
        

        $query = "INSERT INTO `periodo` (`periodos`) VALUES ('$periodo');";
        
        $result = mysqli_query($conexion, $query);

        if(!$result){
            die("Query failed");

         }
        
        header("Location: ../universidad/periodos.php");
        


       
        // header("Location: index.php");  
    }

    
?>
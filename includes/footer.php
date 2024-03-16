<!-- SCRIPTS -->


    
    <!--BOOTSTRAP-->
    <script src="/UNIPDIS/bootstrap/js/bootstrap.min.js"></script>
    <script src="/UNIPDIS/bootstrap/js/bootstrap.bundle.min.js"></script> 

     <!-- jQuery Library -->
  
    

    <script src="/UNIPDIS/JS/popper.min.js"></script>
    
   
    

<!-- validacion de campos -->
<script>
    (function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
</script>

<script type="text/javascript">
    $(document).ready(function() {
    $('.estuselect2').select2();
});
</script>
<script type="text/javascript">
    $(document).ready(function() {
    $('.discselect2').select2();
});
</script>
    <!-- <script>
        function toggleSeccion() {
        var seccion = document.getElementById("seccionOculta");
        if (seccion.style.display === "none") {
        seccion.style.display = "block";
        } else {
        seccion.style.display = "none";
            }
        }
    </script>

    <script>
        function toggleSeccion2() {
        var seccion = document.getElementById("seccionOculta2");
        if (seccion.style.display === "none") {
        seccion.style.display = "block";
        } else {
        seccion.style.display = "none";
            }
        }
    </script> -->


</body>
</html>

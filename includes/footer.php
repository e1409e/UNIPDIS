<!-- SCRIPTS -->
    <!--BOOTSTRAP-->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <script>
    // Función para ajustar el ancho de las celdas al hacer clic en ellas
      document.querySelectorAll('td').forEach(function(td) {
        td.addEventListener('click', function() {
          var ancho = this.offsetWidth;
            this.style.width = ancho + 'px';
      });
    });
</script>
    
</body>
</html>
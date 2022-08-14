<?php 
            if(isset($_GET['id'])){
                $idBorrar = $_GET['id'];
                // $mensaje = "¿Está seguro de que desea borrar el contenido?";
                // $boton = "Borrar";
                // $accion = "borrar";
                // ControladorFormulario::ctrBorrarTerminacion('terminacion', )   
                ControladorFormulario::ctrBorrarTerminacion('terminacion', $idBorrar);?>

                
                <script> location.href="index.php?pagina=contenido-cuerpo"; </script>


           <?php } ?>
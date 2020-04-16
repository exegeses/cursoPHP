<?php  
	include 'includes/header.html';
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Ingreso al sistema</h1>

        <div class="alert bg-light col-6 mx-auto p-3 border">

            <form action="login.php" method="post">
                Usuario:<br>
                <input type="email" name="usuEmail" class="form-control" required>
                <br>
                Clave:<br>
                <input type="password" name="usuPass" class="form-control" required>
                <br>
                <button class="btn btn-dark btn-block">ingresar</button>
                
            </form>

        </div>

<?php

    if ( isset( $_GET['error'] ) ){
        $error = $_GET['error'];
        $titulo = 'Error en el login';
        $leyenda = 'Nombre de usuario usuario y/o contraseña incorrectos';
        if( $error == 2 ){
            $titulo = 'Error de ingreso';
            $leyenda = 'Debe loguearse para ingresar a sistema';
        }

?>
        <script>
            Swal.fire(
                '<?= $titulo ?>',
                '<?= $leyenda ?>',
                'error'
            )
        </script>
<?php
    }
?>
    </main>

<?php  include 'includes/footer.php';  ?>
<?php  
	include 'includes/header.html';
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Ingreso al sistema</h1>

        <div class="alert bg-light col-6 mx-auto p-3 border">

            <form action="login.php" method="post">
                Usuario:<br>
                <input type="text" name="usuEmail" class="form-control">
                <br>
                Clave:<br>
                <input type="password" name="usuPass" class="form-control">
                <br>
                <button class="btn btn-dark btn-block">ingresar</button>
                
            </form>

        </div>

<?php

    if ( isset( $_GET['error'] ) ){
    //$error = $_GET['error'];
?>
        <script>
            Swal.fire(
                'Error en el login',
                'Nombre de usuario usuario y/o contraseña incorrectos',
                'error'
            )
        </script>
<?php
    }
?>
    </main>

<?php  include 'includes/footer.php';  ?>
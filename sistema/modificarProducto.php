<?php

    require 'funciones/conexion.php';
    require 'funciones/productos.php';
    $chequeo = modificarProducto();
	include 'includes/header.html';
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Modificación de un producto</h1>
<?php
        $clase = 'danger';
        $mensaje = 'No se puedo modificar el productos.';
        if ( $chequeo ){
            $clase = 'success';
            $mensaje = 'Producto modificado correctamente.';
        }
?>
        <div class="alert alert-<?= $clase ?>">
            <?= $mensaje ?>
            <a href="adminProductos.php" class="btn btn-outline-secondary mx-2">
                Volver a panel
            </a>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>
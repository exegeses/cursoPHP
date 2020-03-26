<?php

    require 'funciones/conexion.php';
    require 'funciones/productos.php';
    $chequeo = agregarProducto();
	include 'includes/header.html';
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Alta de un nuevo Producto</h1>
<?php
        $clase = 'danger';
        $mensaje = 'No se puedo agregar el productos.';
        if ( $chequeo ){
            $clase = 'success';
            $mensaje = 'Productos agregado correctamente.';
        }
?>
        <div class="alert alert-<?= $clase ?>">
            <?= $mensaje ?>
        </div>
    </main>

<?php  include 'includes/footer.php';  ?>
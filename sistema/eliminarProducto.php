<?php  
	include 'includes/header.html';
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Baja de un producto</h1>
<?php
        $clase = 'danger';
        $mensaje = 'No se puedo eliminar el productos.';
        if ( $chequeo ){
            $clase = 'success';
            $mensaje = 'Producto eliminado correctamente.';
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
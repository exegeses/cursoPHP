<?php
    require 'funciones/conexion.php';
    require 'funciones/categorias.php';
    $chequeo = eliminarCategoria();
	include 'includes/header.html';
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Baja de una categoría</h1>
<?php
        $clase = 'danger';
        $mensaje = 'No se puedo eliminar la categoría.';
        if ( $chequeo ){
            $clase = 'success';
            $mensaje = 'Categoría eliminada correctamente.';
        }
?>
        <div class="alert alert-<?= $clase ?>">
            <?= $mensaje ?>
            <a href="adminCategorias.php" class="btn btn-outline-secondary mx-2">
                Volver a panel
            </a>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>
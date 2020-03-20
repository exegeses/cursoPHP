<?php
    require 'funciones/conexion.php';
    require 'funciones/categorias.php';
    $chequeo = agregarCategoria();
	include 'includes/header.html';
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Alta de una nueva categoría</h1>
<?php
    $clase = 'danger';
    $mensaje = 'No se puedo agregar la categoría.';
    if ( $chequeo ){
        $clase = 'success';
        $mensaje = 'Categoría agregada correctamente.';
    }
?>
        <div class="alert alert-<?= $clase ?>">
            <?= $mensaje ?>
        </div>


    </main>

<?php  include 'includes/footer.php';  ?>
<?php

    require 'funciones/conexion.php';
    require 'funciones/categorias.php';
    $cantidad = productoPorCategoria();

    if( $cantidad == 0 ){
        $categoria = verCategoriaPorId();
    }

	include 'includes/header.html';
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Baja de una categoría</h1>

    <?php
        if ( $cantidad > 0 ) { // si hay productos de esa categoría
?>
            <div class="alert alert-danger col-6 mx-auto">
                No se puede eliminar la categoría seleccionada,
                ya que tiene productos relacionados.

                <a href="adminCategorias.php" class="btn btn-secondary mx-2">
                    Volver a panel
                </a>
            </div>
<?php
        }
        else { //si no hay productos de esa categoría
?>
            <div class="alert border-danger text-danger col-6 mx-auto">

                Se eliminará la categoría: <?= $categoria['catNombre']; ?>
                <form action="eliminarCategoria" method="post">
                    <input type="hidden" name="idCategoria" value="<?= $categoria['idCategoria'] ?>">
                    <button class="btn btn-danger btn-block my-2">
                        Confirmar baja
                    </button>
                    <a href="adminCategorias.php" class="btn btn-outline-secondary btn-block">
                        Volver a panel
                    </a>

                </form>

            </div>
<?php
        }
?>









    </main>

<?php  include 'includes/footer.php';  ?>
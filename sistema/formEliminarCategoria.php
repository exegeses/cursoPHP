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

                <a href="adminCategorias.php" class="btn btn-outline-secondary btn-block my-2">
                    Volver a panel
                </a>
            </div>
<?php
        }
        else { //si no hay productos de esa categoría
?>
            <div class="alert border-danger text-danger col-6 mx-auto">

                Se eliminará la categoría: <span class="lead"><?= $categoria['catNombre']; ?></span>
                <form action="eliminarCategoria.php" method="post">
                    <input type="hidden" name="idCategoria" value="<?= $categoria['idCategoria'] ?>">
                    <button class="btn btn-danger btn-block my-2">
                        Confirmar baja
                    </button>
                    <a href="adminCategorias.php" class="btn btn-outline-secondary btn-block">
                        Volver a panel
                    </a>

                </form>

            </div>


            <script>
                // ventana sweet alert 2

                Swal.fire({
                    title: '¿Desea eliminar la categoría seleccionada?',
                    text: "Esta acción no se puede deshacer",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3C3836',
                    confirmButtonText: 'Si, la quiero eliminar!',
                    cancelButtonText: 'No la quiero eliminar'
                }).then((result) => {
                    if (!result.value) {
                        //redirección a admin
                        window.location = 'adminCategorias.php';
                    }
                })

            </script>
<?php
        }
?>









    </main>

<?php  include 'includes/footer.php';  ?>
<?php

    require 'funciones/conexion.php';
    require 'funciones/productos.php';
    $producto = verProductoPorID( $_GET['idProducto'] );
	include 'includes/header.html';
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Baja de un Producto</h1>

        <article class="card col-6 mx-auto text-danger border-danger">
            <div class="row">
                <div class="col-6 p-0">
                    <img src="productos/<?= $producto['prdImagen']; ?>" class="img-thumbnail">
                </div>
                <div class="card-body col-6">
                    <span class="lead">
                        <?= $producto['prdNombre']; ?>
                    </span>
                    <br>
                    Marca: <?= $producto['mkNombre']; ?>
                    <br>
                    Categoría: <?= $producto['catNombre']; ?>
                    <br>
                    Presentación: <?= $producto['prdPresentacion']; ?>
                    <br>
                    Stock: <?= $producto['prdStock']; ?>
                    <br>
                    Precio:
                    <span class="lead">
                        $<?= $producto['prdPrecio']; ?>     
                    </span>

                    <form action="eliminarProducto.php" method="post">

                        <button class="btn btn-danger btn-block py-2">
                            Confirmar Baja
                        </button>
                        <a href="adminProductos.php" class="btn btn-outline-secondary btn-block">
                            Volver a panel
                        </a>

                    </form>

                </div>
            </div>
        </article>

    </main>

<?php  include 'includes/footer.php';  ?>
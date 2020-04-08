<?php

    require 'funciones/conexion.php';
    require 'funciones/productos.php';
    $productos = listarProductos();

	include 'includes/header.html';
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Catálogo de Productos</h1>

        <section class="row mt-3">

<?php
    while( $producto = mysqli_fetch_assoc($productos) ){
?>
            <article class="card col-4 p-0">
                <img src="productos/<?= $producto['prdImagen']; ?>" class="card-img-top">
                <div class="card-body">

                    <h2 class="text-info">
                        <?= $producto['prdNombre']; ?>
                    </h2>

                    <?= $producto['mkNombre']; ?> -
                    <?= $producto['catNombre']; ?> <br>
                    <?= $producto['prdPresentacion'] ?> <br>
                    <span class="text-info lead">
                        $<?= $producto['prdPrecio']; ?>
                    </span>

                    <a href="" class="btn btn-info btn-block">ver detalle</a>
                </div>
            </article>
<?php
    }
?>

        </section>


    </main>

<?php  include 'includes/footer.php';  ?>
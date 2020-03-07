<?php
    $productos = [
        'iPhone 6', 'iPad Pro', 'Galaxy x', 'Nexus 7',
        'LG', 'nokia z', 'Apple Watch'
    ];
    $fotos = [
        'iphone6', 'ipad', 'galaxy', 'nexus7',
        'lg', 'nokia', 'watch'
    ];
    $descripciones = [
        'Iphone 6 ya es viejoto para se la banca', 'iPad Pro, no se me ocurre que poner', 'Galaxy por el universo',
        'Nexus 7 que se enciende en llamas',
        'ELEGE ameo', 'Nokia, no sabía que seguia existiendo Nokia', 'Apple Watch, un vicio caro y muy util, además da la hora'
    ];
    $precios = [
        '300', '450', '250', '325',
        '580', '584', '1544'
    ];
    $cantidad = count($productos);
    $n = 0;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lista de Productos</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <main>
        <h1>Lista de Productos</h1>
<?php
    while( $n < $cantidad ){
?>
        <article>
            <h2><?php echo $productos[$n] ?></h2>
            <img src="productos/<?php echo $fotos[$n]; ?>.jpg">
            <p>
                <?php echo $descripciones[$n]; ?>
                <span class="precio">$<?php echo $precios[$n] ?></span>
            </p>

        </article>
<?php
        $n++;
    }
?>

    </main>

</body>
</html>

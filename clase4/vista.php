<?php
    require 'funciones.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Uso de mi biblioteca</h1>

    <h2>duplicar</h2>
    <?php
        echo duplicar(333);
    ?>
    <h2>dividir</h2>
    <?php
        echo dividir(280,20);
    ?>
    <br>
    <?php
        echo dividir('pera',20);
    ?>

</body>
</html>
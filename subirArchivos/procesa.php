<?php

    $prdImagen = $_FILES['prdImagen'];
?>
<pre><?php print_r($prdImagen) ?></pre>
<?php

    $ruta = 'fotos/';
    $prdImagen = $_FILES['prdImagen']['name'];
    $temp = $_FILES['prdImagen']['tmp_name'];

    move_uploaded_file( $temp, $ruta.$prdImagen);
?>


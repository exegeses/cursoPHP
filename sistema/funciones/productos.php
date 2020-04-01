<?php

#############################
##### CRUD DE PRODUCTOS #####
#############################


    /**
     * @return bool|mysqli_result
     */
    function listarProductos()
    {
        $link = conectar();
        $sql = "SELECT 
                        idProducto, prdNombre, prdPrecio,
                        p.idMarca, mkNombre, p.idCategoria, catNombre, 
                        prdPresentacion, prdStock,
                        prdImagen
                    FROM productos p, marcas m, categorias c
                    WHERE m.idMarca = p.idMarca
                    AND c.idCategoria = p.idCategoria";
        $resultado = mysqli_query($link, $sql)
                        or die( mysqli_error($link) );
        return $resultado;
    }


    function subirArchivo()
    {
        $ruta = 'productos/';
        $prdImagen = 'noDisponible.jpg'; # en agregar si NO ENVIAN imagen

        if( isset($_POST['imagenAnterior']) ){  # en modificar si existe imagenAnterior
            $prdImagen = $_POST['imagenAnterior'];
        }

        if( $_FILES['prdImagen']['error'] == 0 ){ # si ENVIAN uma imagen
            $prdImagen = $_FILES['prdImagen']['name'];
            $temp = $_FILES['prdImagen']['tmp_name'];

            move_uploaded_file( $temp, $ruta.$prdImagen);
        }


        return $prdImagen;
    }

    function agregarProducto()
    {
        $prdNombre = $_POST['prdNombre'];
        $prdPrecio = $_POST['prdPrecio'];
        $idMarca = $_POST['idMarca'];
        $idCategoria = $_POST['idCategoria'];
        $prdPresentacion = $_POST['prdPresentacion'];
        $prdStock = $_POST['prdStock'];
        $prdImagen = subirArchivo();

        $link = conectar();
        $sql = $sql = "INSERT INTO productos 
                            VALUES 
                                (
                                    DEFAULT , 
                                    '" .$prdNombre. "', 
                                    " .$prdPrecio. ", 
                                    " .$idMarca. ", 
                                    " .$idCategoria. ", 
                                    '" .$prdPresentacion. "', 
                                    " .$prdStock. ", 
                                    '" .$prdImagen. "' 
                                )";
        $resultado = mysqli_query( $link, $sql )
                            or die( mysqli_error($link) );
        return $resultado;
    }


    function verProductoPorID($idProducto){
        $link = conectar();
        $sql = "SELECT 
                        idProducto, prdNombre, prdPrecio,
                        p.idMarca, mkNombre, p.idCategoria, catNombre, 
                        prdPresentacion, prdStock,
                        prdImagen
                    FROM productos p, marcas m, categorias c
                    WHERE m.idMarca = p.idMarca
                    AND c.idCategoria = p.idCategoria
                    AND idProducto = ".$idProducto;
        $resultado = mysqli_query( $link, $sql )
                            or die( mysqli_error($link) );
        $producto = mysqli_fetch_assoc($resultado);
        return $producto;
    }


    function modificarProducto()
    {
        $prdNombre = $_POST['prdNombre'];
        $prdPrecio = $_POST['prdPrecio'];
        $idMarca = $_POST['idMarca'];
        $idCategoria = $_POST['idCategoria'];
        $prdPresentacion = $_POST['prdPresentacion'];
        $prdStock = $_POST['prdStock'];
        $prdImagen = subirArchivo();
        $idProducto = $_POST['idProducto'];

        $link = conectar();
        $sql = "UPDATE productos 
                    SET
                        prdNombre = '".$prdNombre."',
                        prdPrecio = ".$prdPrecio.",
                        idMarca = ".$idMarca.",
                        idCategoria = ".$idCategoria.",
                        prdPresentacion = '".$prdPresentacion."',
                        prdStock = ".$prdStock.",
                        prdImagen = '".$prdImagen."'
                    WHERE idProducto = ".$idProducto;

        $resultado = mysqli_query( $link, $sql )
                            or die( mysqli_error($link) );
        return $resultado;
    }
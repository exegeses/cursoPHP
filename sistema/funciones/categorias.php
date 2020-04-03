<?php

#############################
##### CRUD DE CATEGORIAS ####
#############################

    function listarCategorias()
    {
            $link = conectar();
            $sql = "SELECT idCategoria, catNombre
                        FROM categorias";
            $resultado = mysqli_query($link, $sql);
            return $resultado;
    }


    function agregarCategoria()
    {
        // capturamos dato enviado por el form
        $catNombre = $_POST['catNombre'];
        $link = conectar();
        $sql = "INSERT INTO categorias
                    VALUES
                    ( DEFAULT, '".$catNombre."')";
        $resultado = mysqli_query($link, $sql);
        return $resultado;
    }


    /**
    *  chequear se hay productos de una categoría
    */
    function productoPorCategoria()
    {
        $idCategoria = $_GET['idCategoria'];
        $link = conectar();
        $sql = "SELECT 1 
                    FROM productos
                    WHERE idCategoria = ".$idCategoria;
        $resultado = mysqli_query($link, $sql)
                            or die( mysqli_error($link) );
        $cantidad = mysqli_num_rows($resultado);
        return $cantidad;
    }

    function verCategoriaPorId()
    {
        $idCategoria = $_GET['idCategoria'];
        $link = conectar();
        $sql = "SELECT idCategoria, catNombre
                            FROM categorias
                        WHERE idCategoria = " . $idCategoria;
        $resultado = mysqli_query($link, $sql);
        $categoria = mysqli_fetch_assoc($resultado);
        return $categoria;
    }

/**
 * listarCategorias()
 * verCategoriaPorID()
 * agregarCategoria()
 * modificarCategoria()
 * eliminarCategoria()
 */
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
 * listarCategorias()
 * verCategoriaPorID()
 * agregarCategoria()
 * modificarCategoria()
 * eliminarCategoria()
 */
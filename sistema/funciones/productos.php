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
                        idMarca, idCategoria,
                        prdPresentacion, prdStock,
                        prdImagen
                        
                    FROM
                        productos";
        $resultado = mysqli_query($link, $sql);
        return $resultado;
    }
    
    
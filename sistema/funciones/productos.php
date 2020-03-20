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
        $resultado = mysqli_query($link, $sql);
        return $resultado;
    }
    
    
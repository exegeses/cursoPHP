<?php

#########################
##### CRUD DE MARCAS ####
#########################

    /**
     * @return bool|mysqli_result $resultado
     */
    function listarMarcas()
    {
        $link = conectar();
        $sql = "SELECT idMarca, mkNombre
                    FROM marcas";
        $resultado = mysqli_query( $link, $sql );
        return $resultado;
    }

/**
 * listarMarcas()
 * verMarcaPorID()
 * agregarMarca()
 * modificarMarca()
 * eliminarMarca()
 */

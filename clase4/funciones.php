<?php

/**
 * @param $numero
 * @return float|int
 */
    function duplicar($numero)
    {
        $resultado = $numero * 2;
        return $resultado;
    }

    /**
     * @param float|int $dividendo
     * @param float|int $divisor
     * @return float|int $resultado
     */
    function dividir( $dividendo, $divisor )
    {
        if( $divisor==0 ){
            return 'el divisar no puede ser 0';
        }
        if( is_numeric($dividendo) && is_numeric($divisor) && $divisor != 0  ){
            $resultado = $dividendo/$divisor;
            return $resultado;
        }
        return 'Debe utilizar números';

    }


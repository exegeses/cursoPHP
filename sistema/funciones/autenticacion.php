<?php

    ##########################
    #####  autenticación  ####

    function login()
    {
        $usuEmail = $_POST['usuEmail'];
        $usuPass = $_POST['usuPass'];
        $link = conectar();
        $sql = "SELECT usuNombre, usuApellido
                   FROM usuarios
                   WHERE usuEmail = '".$usuEmail."'
                     AND usuPass = '".$usuPass."'";
        $resultado = mysqli_query( $link, $sql )
                            or die( mysqli_error($link) );
        $cantidad = mysqli_num_rows($resultado);

        if( $cantidad == 0 ){
            // error en login -> redireccion a formLogin
            header( 'location: formLogin.php?error=1' );
        }
        else{
            // login ok
            ######## autenticación con sesiones
            //session_start() está en config.php
            $_SESSION['login'] = 1;
            // redirección a admin
            header( 'location: admin.php' );
        }
    }

    function logout()
    {

    }

    function autenticar()
    {

    }
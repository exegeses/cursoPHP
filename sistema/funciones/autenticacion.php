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

            //guardamos nombre y apellido en sesión
            $datos = mysqli_fetch_assoc($resultado);
            $_SESSION['usuNombre'] = $datos['usuNombre'];
            $_SESSION['usuApellido'] = $datos['usuApellido'];

            // redirección a admin
            header( 'location: admin.php' );
        }
    }

    function logout()
    {
        session_unset();
        session_destroy();
        //redirección a index (con delay)
        header('refresh:3; url=index.php');
    }

    function autenticar()
    {
        if( !isset( $_SESSION['login'] ) ){
            header( 'location: formLogin.php?error=2' );
        }
    }
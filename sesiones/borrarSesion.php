<?php

    session_start();

    unset($_SESSION['numero']);

    session_unset();//eliminar TODAS las variables de sesión
    session_destroy();// elimina la sesión
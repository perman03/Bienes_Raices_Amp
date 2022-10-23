<?php

    function conectarBD() : mysqli{
        $db = mysqli_connect('localhost', 'root', 'noviembre3', 'bienesraices_crud');

        if(!$db){
            echo 'ERROR: No se pudo conectar con la base de datos';
            exit;            // si no se pudo conectar, tenemos que detener la ejecucion del codigo
        }

        return $db; 


    }
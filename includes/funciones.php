<?php

    require 'app.php';  // llamada a app.php para los define



    function incluirTemplate(string $nombre, bool $inicio = false){
        include TEMPLATES_URL . "/${nombre}.php";

    }

    
    /* 
        El '$inicio = false' sirve para evitar la verificación del estado de la variable que imprime la imagen del Header
        Practicamente tiene un parametro default de falso para las demas paginas. 
        Solo en el index tiene la variable en true o estado activo.

     */
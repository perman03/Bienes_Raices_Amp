<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/bienesraices_amp/build/css/app.css">
    <title>Bienes Raíces</title>
</head>
<body>

<!-- HEADER -->
    <!-- OPERADOR TERNARIO PARA VERIFICAR SI LA VARIABLE INICIO ES TRUE -->
    <header class="header <?php echo $inicio ? 'inicio' : '';?>">

        <div class="contenedor contenido-header">

            <div class="barra">
                <a href="index.php"><img src="/bienesraices_amp/build/img/logo.svg" alt="Logotipo de bienes raices"></a>

                <div class="mobile-menu">
                    <img src="/bienesraices_amp/build/img/barras.svg" alt="icono menú responsive">
                </div>

                <div class="derecha">
                    <img src="/bienesraices_amp/build/img/dark-mode.svg" alt="boton para darkmode" class="dark-mode">
                    <nav class="navegacion">
                        <a href="nosotros.php">Nosotros</a>
                        <a href="anuncios.php">Anuncios</a>
                        <a href="blog.php">Blog</a>
                        <a href="contacto.php">Contacto</a>
                    </nav>
                </div>
            </div>  <!--Cierre de barra-->
            
        </div>

    </header>
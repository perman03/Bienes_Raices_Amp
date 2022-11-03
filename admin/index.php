<?php 
    
    //importar conexión a BD
    require '../includes/config/database.php';
    $db = conectarBD(); 


    //Escribir el QUERY
    $query = "SELECT * FROM propiedades";


    //Consultar la BD
    $resultadoQuery = mysqli_query($db, $query);

    // muestra mensaje condicional
    $resultado = $_GET['resultado'] ?? NULL;









    require '../includes/funciones.php';    // mandamos a llamar el archivo que contiene la funcion 
    incluirTemplate('header');          // mandamos a llamar la funcion y le pasamos como argumento el nombre del template
?>

<!-- FIN DE HEADER-->


<!-- MAIN -->

    <main class="contenedor seccion">
        <h1>Administrador de Bienes Raíces</h1>
        <?php if(intval($resultado) === 1): ?>
            <p class="alerta exito">Anuncio creado correctamente</p>
        <?php endif; ?>

        <a href="/bienesraices_amp/admin/propiedades/crear.php" class="boton boton-verde">Crear Nueva Propiedad</a>
        
        <table class="propiedades">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Imagen</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>  <!-- MOSTRAR RESULTADOS DESDE LA BD -->
                <?php while($propiedad = mysqli_fetch_assoc($resultadoQuery)): ?>
                <tr>
                    <td> <?php echo $propiedad['id']; ?> </td>
                    <td> <?php echo $propiedad['titulo']; ?> </td>
                    <td> <img src="/bienesraices_amp/imagenes/<?php echo $propiedad['imagen']; ?>" class="imagen-tabla"> </td>
                    <td>$ <?php echo $propiedad['precio']; ?> </td>
                    <td>
                        <a href="#" class="boton-rojo">Eliminar</a>
                        <a href="#" class="boton-amarillo-block">Editar</a>
                    </td>
                </tr>
                <?php endwhile;?>
            </tbody>
        </table>


    </main>

<!-- FIN DE MAIN -->

<!-- INICIO DE FOOTER -->

    <?php 

    //cerrar conexion BD
        mysqli_close($db);

        incluirTemplate('footer'); 
    
    
    ?>


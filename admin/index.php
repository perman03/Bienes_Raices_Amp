<?php 
    
    $resultado = $_GET['resultado'] ?? NULL;
    require '../includes/funciones.php';    // mandamos a llamar el archivo que contiene la funcion 
      
    incluirTemplate('header');          // mandamos a llamar la funcion y le pasamos como argumento el nombre del template
        
    

?>

<!-- FIN DE HEADER-->


<!-- MAIN -->

    <main class="contenedor seccion">
        <h1>Administrador de Bienes Rsaíces</h1>
        <?php if(intval($resultado) === 1): ?>
            <p class="alerta exito">Anuncio creado correctamente</p>
        <?php endif; ?>

        <a href="/bienesraices_amp/admin/propiedades/crear.php" class="boton boton-verde">Crear Nueva Propiedad</a>



    </main>

<!-- FIN DE MAIN -->
















<!-- INICIO DE FOOTER -->

    <?php 

        incluirTemplate('footer'); 
    
    
    ?>


<?php 

    //conexión a la base de datos
    require '../../includes/config/database.php';
    $db=conectarBD(); 

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        echo "<pre>";
             var_dump($_POST);
        echo "</pre>";

        $titulo = $_POST['titulo'];
        $precio = $_POST['precio']; 
        $descripcion = $_POST['descripcion'];
        $habitaciones = $_POST['habitaciones']; 
        $wc = $_POST['wc']; 
        $estacionamiento = $_POST['estacionamiento']; 
        $vendedores_id = $_POST['vendedor']; 

        // Insertar en la BD
        $query = "INSERT INTO propiedades (titulo, precio, descripcion, habitaciones, wc, estacionamiento,
                                vendedores_id) VALUES ('$titulo', '$precio', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$vendedores_id') ";

        // echo $query; 

        $resultado = mysqli_query($db, $query); 

        if($resultado){
            echo 'Insertado de forma correcta';
        }


    }





    require '../../includes/funciones.php';   
    incluirTemplate('header');  

?>

<!-- FIN DE HEADER-->


<!-- MAIN -->

    <main class="contenedor seccion">
        <h1>CREAR</h1>
        <a href="/bienesraices_amp/admin/index.php" class="boton boton-verde">Volver</a>

        <form action="/bienesraices_amp/admin/propiedades/crear.php" class="formulario" method="POST">
            <fieldset>
                <legend>Información general</legend>

                <label for="titulo">Titulo:</label>
                <input type="text" name="titulo" id="titulo" placeholder="Titulo de la propiedad">

                <label for="precio">Precio:</label>
                <input type="number" name="precio" id="precio" placeholder="Precio de la propiedad" min="1">

                <label for="imagen">Imagen:</label>
                <input type="file" name="imagen" id="imagen" accept="image/jpeg, image/png">

                <label for="descripción">Descripcion:</label>
                <textarea name="descripcion" id="descripcion">Proporciona una descripción</textarea>

            </fieldset>

            <fieldset>
                <legend>Información de la Propiedad</legend>

                <label for="habitaciones">Habitaciones:</label>
                <input type="number" name="habitaciones" id="habitaciones" placeholder="Numero de habitaciones" min="1">

                <label for="wc">Baños:</label>
                <input type="wc" name="wc" id="wc" placeholder="Numero de baños:">

                <label for="estacionamiento">Estacionamiento:</label>
                <input type="estacionamiento" name="estacionamiento" id="estacionamiento" placeholder="Numero de estacionamientos">
            
            </fieldset>

            <fieldset>
                <legend>Vendedor</legend>
                <select name="vendedor">
                    <option value="1">Franco</option>
                    <option value="2">Valery</option>
                </select>
            </fieldset>

            <input type="submit" value="Crear propiedad" class="boton boton-verde">
        </form>
    </main>

<!-- FIN DE MAIN -->
















<!-- INICIO DE FOOTER -->

    <?php 

        incluirTemplate('footer'); 
    
    
    ?>


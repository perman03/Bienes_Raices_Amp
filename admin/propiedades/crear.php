<?php 

    //conexión a la base de datos
    require '../../includes/config/database.php';
    $db=conectarBD(); 
    //consultar para obtener vendedores
    $consulta = "SELECT * FROM vendedores";
    $resultado = mysqli_query($db, $consulta);
    //arreglo con mensaje de errores
    $errores = [];

    //declarar por fuera los valores con string vacios nos ayudará para guardar la información del usuario si falla el form
    $titulo = '';
    $precio = ''; 
    $descripcion = '';
    $habitaciones = ''; 
    $wc = ''; 
    $estacionamiento = ''; 
    $vendedores_id = '';


    //ejecutar el codigo despues de que el usuario envia el formulario
    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        // echo "<pre>";
        //      var_dump($_POST);
        // echo "</pre>";

        //Todos los valores los asignamos a una variable
        $titulo =  mysqli_real_escape_string($db,   $_POST['titulo']);
        $precio =mysqli_real_escape_string($db,  $_POST['precio']); 
        $descripcion =mysqli_real_escape_string($db,  $_POST['descripcion']);
        $habitaciones =mysqli_real_escape_string($db,  $_POST['habitaciones']); 
        $wc = mysqli_real_escape_string($db, $_POST['wc']); 
        $estacionamiento = mysqli_real_escape_string($db, $_POST['estacionamiento']); 
        $vendedores_id = mysqli_real_escape_string($db, $_POST['vendedor']); 
        $creado = date('Y-m-d H:i:s');

        // asignar superglobal files hacia una variable
        $imagen = $_FILES['imagen'];
        var_dump($imagen);

        if(!$titulo){
            $errores[] = "Debes añadir un titulo";   //coloca automaticamerte el error en el array
        }

        if(!$precio){
            $errores[] = "Debes añadir un precio";   //coloca automaticamerte el error en el array
        }

        if(strlen($descripcion) < 51){
            $errores[] = "Debes añadir una descripcion con al menos 50 caracteres";   //coloca automaticamerte el error en el array
        }

        if(!$habitaciones){
            $errores[] = "Debes añadir el numero de habitaciones";   //coloca automaticamerte el error en el array
        }

        if(!$wc){
            $errores[] = "Debes añadir el numero de baños";   //coloca automaticamerte el error en el array
        }

        if(!$estacionamiento){
            $errores[] = "Debes añadir el numero de lugares de estacionamientos";   //coloca automaticamerte el error en el array
        }

        if(!$vendedores_id){
            $errores[] = "Debes elegir a un vendedor";   //coloca automaticamerte el error en el array
        }

        if(!$imagen['name'] || $imagen['error']){
            $errores[] = "La imagen es obligatoria";
        }


        //validar imagen por tamaño
        $medida = 1000 * 1000;                       //maximo 1MB
        if($imagen['size'] > $medida){
            $errores[] = "La imagen es muy pesada";
        }

        // echo "<pre>";
        // var_dump($errores);
        //  echo "</pre>";

        //Revisar que el arreglo de errores este vacio
        if(empty($errores)){
            
            /* SUBIR ARCHIVOS */

            //crear carperta de imagenes de forma automatica
            $carpetaImagenes = '../../imagenes';

            if(!is_dir($carpetaImagenes)){
                mkdir($carpetaImagenes);
            }

            //generar nombre unico a imagenes (con extensión)
            $nombreImagen = md5( uniqid( rand(), true ) ) . ".jpg";

            // subir imagen a carpeta del server
            move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . "/" . $nombreImagen);

            
           // Insertar en la BD
            $query = "INSERT INTO propiedades (titulo, precio, imagen, descripcion, habitaciones, wc, estacionamiento, creado,
            vendedores_id) VALUES ('$titulo', '$precio', '$nombreImagen', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$creado', '$vendedores_id') ";

            $resultado = mysqli_query($db, $query); 
            if($resultado){
                //redireccionar al usuario
                header('Location: /bienesraices_amp/admin/index.php?resultado=1');
                
            }

        }
    }

    require '../../includes/funciones.php';   
    incluirTemplate('header');  

?>

<!-- FIN DE HEADER-->


<!-- MAIN -->

    <main class="contenedor seccion">
        <h1>CREAR</h1>
        <a href="/bienesraices_amp/admin/index.php" class="boton boton-verde">Volver a menú principal</a>

        <!-- Desplegar el arreglo de los errores en la interfaz -->
        <?php foreach($errores as $error):?>
            <div class="alerta error">
                <?php echo $error;?>
            </div>
        <?php endforeach;?>

        <form action="/bienesraices_amp/admin/propiedades/crear.php" class="formulario" method="POST" enctype="multipart/form-data">
            <fieldset>
                <legend>Información general</legend>

                <label for="titulo">Titulo:</label>
                <input type="text" name="titulo" id="titulo" placeholder="Titulo de la propiedad" value="<?php echo $titulo;?>">

                <label for="precio">Precio:</label>
                <input type="number" name="precio" id="precio" placeholder="Precio de la propiedad" min="1" value="<?php echo $precio;?>">

                <label for="imagen">Imagen:</label>
                <input type="file" name="imagen" id="imagen" accept="image/jpeg, image/png" name="imagen">

                <label for="descripción">Descripcion:</label>
                <textarea name="descripcion" placeholder="Proporciona una descripción" id="descripcion"><?php echo $descripcion;?></textarea>

            </fieldset>

            <fieldset>
                <legend>Información de la Propiedad</legend>

                <label for="habitaciones">Habitaciones:</label>
                <input type="number" name="habitaciones" id="habitaciones" placeholder="Numero de habitaciones" min="1" value="<?php echo $habitaciones;?>">

                <label for="wc">Baños:</label>
                <input type="wc" name="wc" id="wc" placeholder="Numero de baños:" value="<?php echo $wc;?>">

                <label for="estacionamiento">Estacionamiento:</label>
                <input type="estacionamiento" name="estacionamiento" id="estacionamiento" placeholder="Numero de estacionamientos" value="<?php echo $estacionamiento;?>">
            
            </fieldset>

            <fieldset>
                <legend>Vendedor</legend>
                <select name="vendedor">
                    <option value="">-- Selecciona a un vendedor --</option>
                    <?php while($vendedor = mysqli_fetch_assoc($resultado) ):?>
                        <option <?php echo $vendedores_id === $vendedor['id'] ? 'selected' : '';?> value="<?php echo $vendedor['id'];?>"> <?php echo $vendedor['nombre'] . " " . $vendedor['apellido']; ?> </option>
                    <?php endwhile;?>
                </select>
            </fieldset>

            <input type="submit" value="Crear propiedad" class="boton boton-amarillo">
        </form>
    </main>

<!-- FIN DE MAIN -->
















<!-- INICIO DE FOOTER -->

    <?php 

        incluirTemplate('footer'); 
    
    
    ?>


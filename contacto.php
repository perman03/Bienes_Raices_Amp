<?php 
    
    require 'includes/funciones.php';    // mandamos a llamar el archivo que contiene la funcion 
      
    incluirTemplate('header');          // mandamos a llamar la funcion y le pasamos como argumento el nombre del template
        
    

?>
<!-- FIN DE HEADER-->


<!-- MAIN -->
    <main class="contenedor seccion">
        <h1>Contáctanos</h1>

        <picture>
            <source srcset="build/img/destacada3.webp" type="image/webp">
            <source srcset="build/img/destacada3.jpg" type="image/jpeg">
            <img src="build/img/destacada3.jpg" alt="Imagen destacada" loading="lazy">
        </picture>

        <h2>Llene el siguiente formulario de contacto</h2>

        <form class="formulario">
            <fieldset>
                <legend>Información Personal</legend>

                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" placeholder="Ingresa tu nombre">

                <label for="email">E-Mail</label>
                <input type="email" name="email" id="email" placeholder="Ingresa tu email">

                <label for="telefono">Teléfono</label>
                <input type="number" name="telefono" id="telefono" placeholder="Ingresa tu número de teléfono">

                <label for="mensaje">Mensaje</label>
                <textarea name="mensaje" id="mensaje" placeholder="Dejanos tu mensaje"></textarea>
            </fieldset>

            <fieldset>
                <legend>Información sobre la propiedad</legend>

                <label for="venta-compra">Vende o Compra:</label>
                <select name="venta-compra" id="venta-compra">
                    <option value="" disabled selected>-- Selecciona una opción --</option>
                    <option value="compra">Compra</option>
                    <option value="venta">Venta</option>
                </select>

                <label for="precio-presupuesto">Precio o Presupuesto</label>
                <input type="number" name="precio-presupuesto" id="precio-presupuesto" placeholder="Ingresa tu precio o presupuesto">
            </fieldset>

            <fieldset>
                <legend>Información sobre la propiedad</legend>

                <p>¿Cómo desea ser contactado?</p>
                <div class="forma-contacto">
                    <label for="contactar-telefono">TELÉFONO</label>
                    <input type="radio" name="contacto" id="contactar-telefono" value="telefono">

                    <label for="contactar-email">E-MAIL</label>
                    <input type="radio" name="contacto" id="contactar-email" value="e-mail">
                </div>

                <p>Si eligió la opción de teléfono, seleccione la fecha y la hora</p>

                <label for="fecha">Fecha:</label>
                <input type="date" id="fecha">

                <label for="hora">Hora:</label>
                <input type="time" id="hora" min="09:00" max="18:00">

            </fieldset>
       
       
       
            <input type="submit" value="Enviar" class="boton-verde">
       
        </form>

        




    </main>

<!-- FIN DE MAIN -->



<!-- INICIO DE FOOTER -->

    <?php 

        incluirTemplate('footer'); 


    ?>

<!-- FIN DE FOOTER  -->

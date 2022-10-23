<?php 
    
    require 'includes/funciones.php';    // mandamos a llamar el archivo que contiene la funcion 
      
    incluirTemplate('header');          // mandamos a llamar la funcion y le pasamos como argumento el nombre del template
        
    

?>
<!-- FIN DE HEADER-->


<!-- MAIN -->
    <main class="contenedor seccion">
        <h1>Nuestro Blog</h1>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog1.webp" type="image/webp">
                    <source srcset="build/img/blog1.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog1.jpg" alt="Entrada blog uno">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Terraza en el techo de tu casa</h4>
                    <p>Escrito el: <span>10/10/2022</span> por: <span>Admin</span></p>

                    <p>
                        Consejos para construir una terraza en el techo de tu casa con los 
                        mejores materiales y ahorrando dinero.
                    </p>
                </a>
            </div>
          </article>

          <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog2.webp" type="image/webp">
                    <source srcset="build/img/blog2.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog2.jpg" alt="Entrada blog dos">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Guía para la decoración de tu hogar</h4>
                    <p>Escrito el: <span>10/10/2022</span> por: <span>Admin</span></p>

                    <p>
                        Maximiza el espacio en tu hogar con esta guía. Aprende a 
                        combinar muebles y colores para darle vida a tu espacio
                    </p>
                </a>
            </div>
          </article>

          <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog3.webp" type="image/webp">
                    <source srcset="build/img/blog3.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog3.jpg" alt="Entrada blog uno">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Terraza en el techo de tu casa</h4>
                    <p>Escrito el: <span>10/10/2022</span> por: <span>Admin</span></p>

                    <p>
                        Consejos para construir una terraza en el techo de tu casa con los 
                        mejores materiales y ahorrando dinero.
                    </p>
                </a>
            </div>
          </article>

          <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog4.webp" type="image/webp">
                    <source srcset="build/img/blog4.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog4.jpg" alt="Entrada blog dos">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Guía para la decoración de tu hogar</h4>
                    <p>Escrito el: <span>10/10/2022</span> por: <span>Admin</span></p>

                    <p>
                        Maximiza el espacio en tu hogar con esta guía. Aprende a 
                        combinar muebles y colores para darle vida a tu espacio
                    </p>
                </a>
            </div>
          </article>


    </main>

<!-- FIN DE MAIN -->



<!-- INICIO DE FOOTER -->

    <?php 

        incluirTemplate('footer'); 


    ?>


<!-- FIN DE FOOTER  -->

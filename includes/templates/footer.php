<!-- INICIO DE FOOTER -->

<footer class="footer seccion">

<div class="contenedor contenedor-footer">
    <nav class="navegacion">
        <a href="nosotros.php">Nosotros</a>
        <a href="anuncios.php">Anuncios</a>
        <a href="blog.php">Blog</a>
        <a href="contacto.php">Contacto</a>
    </nav>
</div>


    <?php 
    // colocar de forma dinamica el año

        $fecha = date('Y'); 
    
    ?>
    <p class="copyright">Todos los derechos reservados <?php echo $fecha; ?> </p>

</footer>

<!-- FIN DE FOOTER  -->

<script src="build/js/bundle.min.js"></script>
</body>
</html>
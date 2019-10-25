<?php get_header(); // mandamos llamar el header ?>

<div class="wrapper 404"><!--*-->
    <div class="container">
        <div class="row">
            <div class="g12">
                <div class="content">
                    <h2 class="errortitle">Error 404</h2>

                    <h2>¿Y ahora qué?</h2>
                    <h4>Tranquilo, usted puede volver a la <a href="<?php bloginfo('url'); ?>/">página de inicio</a> y retomar el camino.</h4>

                    <h4>Si le apetece puede iniciar una búsqueda rápida.</h4><br>

                    <?php get_search_form(); ?>
                </div>
            </div>
        </div><!-- End Row-->
    </div>
</div>
<?php get_footer(); ?>
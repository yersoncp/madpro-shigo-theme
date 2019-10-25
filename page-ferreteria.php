<?php
/*
Template Name: Plantilla Ferretería
*/
?>

<?php get_header(); // mandamos llamar el header ?>

<div class="wrapper page">
    <div class="container">
      <div class="row">
        <div class="g9">
          <div class="custom_content">

            <div class="postlist">
              <?php if (have_posts()) : ?>
              <?php while (have_posts()) : the_post(); ?>
                <!--Inicio post-->
                    <div class="post"><!--*-->

                      <!--Inicio detalles-->
                        <div class="details">
                          <h1><?php the_title(); ?></h1>
                          <hr><br>
                        </div> <!--Fin detalles-->

                        <!--Inicio entradas-->
                        <div class="entry"><!--*-->
                          <div class="thumbnail">
                             <?php if ( has_post_thumbnail() ) {
                                the_post_thumbnail(array(120,120));
                              } ?>
                            </div>
                          <?php the_content() ?>
                        </div><!--Fin entradas-->
                        <div class="clear"></div>
                    </div><!--Fin post-->
                <br>
              <?php endwhile; endif; ?>
              <!-- TERMINA SENTENCIA -->

              <div class="products">
                <?php  
                // Inicio consulta WP_Query
                global $wp_query;
                $wp_query = new WP_Query("post_type=ferreteria&post_status=publish&posts_per_page=0");
                // Fin consulta WP_Query
                ?>

                <?php if ($wp_query->have_posts()) : ?>
                <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                <!--Inicio post-->
                    <div class="post" id="post-<?php the_ID(); ?>"><!--*-->

                      <!--Inicio detalles-->
                        <div class="details">
                          <h4 class="title_post"><?php the_title(); ?></h4>
                        </div> <!--Fin detalles-->

                        <!--Inicio entradas-->
                        <div class="entry"><!--*-->
                            <div class="thumbnail">
                             <?php if ( has_post_thumbnail() ) {
                                the_post_thumbnail(array(150,150));
                              } ?>
                            </div>
                          <a class="readmore" href="<?php the_permalink() ?>" rel="bookmark" title="Enlace permanente a  <?php the_title(); ?>">Ver detalles →</a>
                          <div class="clear"></div>
                        </div><!--Fin entradas-->
                    </div><!--Fin post-->
              <?php endwhile; else: ?>
                <h2>Ups!!!</h2>
                <p><?php _e('Sorry, no se ha encontrado publicaciones.'); ?></p>
            
              <?php endif; ?>
              <!-- TERMINA SENTENCIA -->
              <div class="clear"></div>
            </div>

            </div>
          </div>
        </div>

        <div class="g3">
          <?php get_sidebar(); ?>
        </div>
    
      </div><!-- End Row-->
    </div>
</div>

<?php get_footer(); ?>
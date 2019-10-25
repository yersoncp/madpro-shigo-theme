<?php
/*
Template Name: Plantilla Madera
*/
?>

<?php get_header(); // mandamos llamar el header ?>

<div class="wrapper page">
    <div class="container">
      <div class="row">
        <div class="g9">
          <div class="custom_content">
            <div class="postlist">

              <h1 style="display:none"><?php the_title(); ?></h1>

              <div class="products">
                <?php  
                // Inicio consulta WP_Query
                global $wp_query;
                $wp_query = new WP_Query("post_type=madera&post_status=publish&posts_per_page=0&tipo=maderas");
                // Fin consulta WP_Query
                ?>

                <div class="subtitle">
                  <h2>Maderas</h2>
                </div>

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

              <!--Lista de Tablones-->
              <div class="products">
                <?php  
                // Inicio consulta WP_Query
                global $wp_query;
                $wp_query = new WP_Query("post_type=madera&post_status=publish&posts_per_page=0&tipo=tablones");
                // Fin consulta WP_Query
                ?>

                <div class="subtitle">
                  <h2>Tablones</h2>
                </div>

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

              <!--Lista de Triplay-->
              <div class="products">
                <?php  
                // Inicio consulta WP_Query
                global $wp_query;
                $wp_query = new WP_Query("post_type=madera&post_status=publish&posts_per_page=0&tipo=triplay");
                // Fin consulta WP_Query
                ?>

                <div class="subtitle">
                  <h2>Triplay</h2>
                </div>

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
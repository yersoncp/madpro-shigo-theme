<?php get_header(); // mandamos llamar el header ?>

<div class="wrapper page single">
    <div class="container">
      <div class="row">
        <div class="g8">
          <div class="content">

            <div class="postlist">
              <?php if (have_posts()) : ?>
              <?php while (have_posts()) : the_post(); ?>
                <!--Inicio post-->
                    <div class="post" id="post-<?php the_ID(); ?>"><!--*-->

                      <!--Inicio detalles-->
                        <div class="details">
                          <h1><?php the_title(); ?></h1>
                          <hr><br>
                          <!--<span><?php the_time('j \d\e\ F \d\e\ Y \ '); ?></span>-->
                        </div> <!--Fin detalles-->

                        <!--Inicio entradas-->
                        <div class="entry"><!--*-->
                          <div class="thumbnail">
                             <?php if ( has_post_thumbnail() ) {
                                the_post_thumbnail();
                              } ?>
                            </div>
                          <?php the_content() ?>
                        </div><!--Fin entradas-->
                        <div class="clear"></div>
                    </div><!--Fin post-->

              <!-- INICIA NAVEGACION INTERNA -->
              <div class="navigation">
                <br><hr><br>
                <div class="left">
                <?php previous_post_link('&laquo; %link') ?>
                </div>
                <div class="right">
                <?php next_post_link('%link &raquo;') ?>
                </div>
                <br />  
              </div>
              <!-- TERMINA NAVEGACION INTERNA -->
              <br>
              <?php edit_post_link('[ Editar esta entrada ]', '<div>', '</div>'); ?>

              <?php endwhile; else: ?>
                <h2>Ups!!!</h2>
                <p><?php _e('Sorry, no se ha encontrado publicaciones.'); ?></p>
            
              <?php endif; ?>
              <!-- TERMINA SENTENCIA -->
            </div>
          </div>
        </div>

        <div class="g4">
          <?php get_sidebar(); ?>
        </div>
    
      </div><!-- End Row-->
    </div>
</div>

<?php get_footer(); ?>
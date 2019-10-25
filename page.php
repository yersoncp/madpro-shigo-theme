<?php get_header(); // mandamos llamar el header ?>

<div class="wrapper page">
    <div class="container">
      <div class="row">
        <div class="g9">
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
                                the_post_thumbnail(array(120,120));
                              } ?>
                            </div>
                          <?php the_content() ?>
                        </div><!--Fin entradas-->
                        <div class="clear"></div>
                    </div><!--Fin post-->
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
    
        <div class="g3">
          <?php get_sidebar(); ?>
        </div>
    
      </div><!-- End Row-->
    </div>
</div>

<?php get_footer(); ?>
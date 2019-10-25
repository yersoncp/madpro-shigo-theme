<?php get_header(); // mandamos llamar el header ?>

<div class="wrapper search">
  <div class="container">
    <div class="row">
      <div class="g8">
        <div class="postlist">
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <!--Inicio post-->
                    <div class="post" id="post-<?php the_ID(); ?>">

                      <!--Inicio detalles-->
                        <div class="details">
                  <h4><a href="<?php the_permalink() ?>" rel="bookmark" title="Enlace permanente a  <?php the_title(); ?>">
                          <?php the_title(); ?></a></h4>
                          <span><?php the_time('j \d\e\ F \d\e\ Y \ '); ?></span>
                        </div> <!--Fin detalles-->

                        <!--Inicio entradas-->
                        <div class="entry">
                          <div class="thumbnail">
                             <?php if ( has_post_thumbnail() ) {
                                the_post_thumbnail(array(120,120));
                              } ?>
                            </div>
                          <?php the_excerpt() ?>
                        </div><!--Fin entradas-->

                        <a href="<?php the_permalink() ?>" rel="bookmark" title="Seguir leyendo <?php the_title(); ?>">Leer mas</a>
                        <div class="clear"></div>
                    </div><!--Fin post-->

                  <?php endwhile; ?>
                <?php endif; ?>

            <?php $max_page = $wp_query->max_num_pages; if (!$paged && $max_page >= 1){$current_page = 1;}else{$current_page = $paged;}?>
            <div class="page-nav">
                <div class="page-nav-2 pagination">
                  <span class="page-index"><?php printf(__('Pagina %1$s de %2$s'), $current_page, $max_page); ?></span>
                  <?php echo paginate_links(array(
                    "base" => add_query_arg("paged", "%#%"),
                    "format" => '',
                    "type" => "list",
                    "total" => $max_page,
                    "current" => $current_page,
                    "show_all" => false,
                    "end_size" => 3,
                    "mid_size" => 3,
                    "prev_next" => true,
                    "next_text" => __('»'),
                    "prev_text" => __('«'),
                    ));
                  ?>
                  <?php wp_reset_query(); ?>
                </div>
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
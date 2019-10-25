<?php get_header(); ?>

<div class="wrapper home"><!--*-->
	<div class="container">
		<div class="row">
			<div class="g9">
				<h1 style="overflow:hidden; text-indent:-10000px; font-size:0">Maderera Madpro</h1>
				<!-- Jssor Slider Begin -->
				<div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 700px; height: 360px; overflow: hidden; ">

					<div u="loading" style="position: absolute; top: 0px; left: 0px;">
						<div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
						background-color: #000000; top: 0px; left: 0px;width: 100%;height:100%;">
						</div>
						<div style="position: absolute; display: block; background: #ddd url(<?php bloginfo('template_directory'); ?>/images/loading.gif) no-repeat center center;
						top: 0px; left: 0px;width: 100%;height:100%;">
						</div>
					</div>
					
					<!-- Slides Container -->
					<div u="slides" style="position:absolute; cursor: move; width: 700px; height: 360px; overflow: hidden;">
						<div>
							<img u="image" src="<?php bloginfo('template_directory'); ?>/images/slider/01.jpg" />
						</div>

						<div>
							<img u="image" src="<?php bloginfo('template_directory'); ?>/images/slider/02.jpg" />
						</div>

						<div>
							<img u="image" src="<?php bloginfo('template_directory'); ?>/images/slider/03.jpg" />
						</div>

						<div>
							<img u="image" src="<?php bloginfo('template_directory'); ?>/images/slider/04.jpg" />
						</div>
					</div>

			        <!-- Arrow Left -->
			        <span u="arrowleft" class="jssora12l" style="width: 30px; height: 46px; top: 150px; left: 0px;">
			        </span>
			        <!-- Arrow Right -->
			        <span u="arrowright" class="jssora12r" style="width: 30px; height: 46px; top: 150px; right: 0px">
			        </span>
			        <!-- Arrow Navigator Skin End -->
			        <a style="display: none" href="http://www.jssor.com">jQuery</a>
				</div>
			    <!-- Jssor Slider End -->
			</div><!-- End g9-->

			<!--Sidebar-->
			<div class="g3">
				<div class="offer">
					<img src="<?php bloginfo('template_directory'); ?>/images/oferta_especial.jpg" alt="Ofertas especiales en Triplay">
				</div>
			</div><!--Fin Sidebar-->
	
		</div><!-- End Row-->
		
		<div class="row">
			<div class="featured">
				<div class="g4">
					<div class="featured_item">
						<img src="<?php bloginfo('template_directory'); ?>/images/f-tiempo.png" alt="">
						<h5>Tiempo de entrega</h5>
						<p>Nos esforzamos para lograr una atención rápida, eficiente.</p>
					</div>
					<div class="clear"></div>
				</div>

				<div class="g4">
					<div class="featured_item">
						<img src="<?php bloginfo('template_directory'); ?>/images/f-stock.png" alt="">
						<h5>Stock de productos</h5>
						<p>Contamos con todo el stock de todo tipo de maderas.</p>
					</div>
				<div class="clear"></div>
				</div>

				<div class="g4">
					<div class="featured_item">
						<img src="<?php bloginfo('template_directory'); ?>/images/f-offer.png" alt="">
						<h5>Ofertas exclusivas</h5>
						<p>Visítenos y le aseguramos que nuestras ofertas le dejarán con la boca abierta.</p>
					</div>
				</div>
			</div>
		</div><!-- End Row-->

		<div class="row">
			<div class="g12">
				<div class="custom_postlist">
					<div class="madera">
						<h4>Maderas</h4>
						<hr>
					<?php  
					// Inicio consulta WP_Query
					global $wp_query;
					$wp_query = new WP_Query("post_type=madera&post_status=publish&posts_per_page=3&orderby=rand");
					// Fin consulta WP_Query
					?>

					<?php if ($wp_query->have_posts()) : ?>
					<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
					<!--Inicio post-->
					<div class="post" id="post-<?php the_ID(); ?>"><!--*-->

						<!--Inicio entradas-->
						<div class="entry"><!--*-->
							<div class="thumbnail">
								<?php if ( has_post_thumbnail() ) {
									the_post_thumbnail(array(120,120));
								} ?>
							</div>
							<p><b><?php the_title(); ?></b></p>
							<a href="<?php the_permalink() ?>" rel="bookmark" title="Enlace permanente a  <?php the_title(); ?>">
								Ver detalles →</a>
						</div><!--Fin entradas-->

					</div><!--Fin post-->

					<?php endwhile; else: ?>
					<h3>Ups!!!</h3>
					<p><?php _e('Sorry, no se ha encontrado productos.'); ?></p>

					<?php endif; ?>
					<!-- TERMINA SENTENCIA -->
					<div class="clear"></div>
					</div>
				</div>

				<div class="custom_postlist">
					<div class="ferreteria">
							<h4>Ferretería</h4>
							<hr>
						<?php  
						// Inicio consulta WP_Query
						global $wp_query;
						$wp_query = new WP_Query("post_type=ferreteria&post_status=publish&posts_per_page=3&orderby=rand");
						// Fin consulta WP_Query
						?>

						<?php if ($wp_query->have_posts()) : ?>
						<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
						<!--Inicio post-->
						<div class="post" id="post-<?php the_ID(); ?>"><!--*-->

							<!--Inicio entradas-->
							<div class="entry"><!--*-->
								<div class="thumbnail">
									<?php if ( has_post_thumbnail() ) {
										the_post_thumbnail(array(120,120));
									} ?>
								</div>
								<p><b><?php the_title(); ?></b></p>
								<a href="<?php the_permalink() ?>" rel="bookmark" title="Enlace permanente a  <?php the_title(); ?>">
									Ver detalles →</a>
							</div><!--Fin entradas-->

						</div><!--Fin post-->

						<?php endwhile; else: ?>
						<h3>Ups!!!</h3>
						<p><?php _e('Sorry, no se ha encontrado productos.'); ?></p>

						<?php endif; ?>
						<!-- TERMINA SENTENCIA -->
					<div class="clear"></div>
					</div>
				</div>

			</div>
		</div>

	</div>
</div>
<?php get_footer(); ?>
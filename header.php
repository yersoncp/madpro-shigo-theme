<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<!--************************************************************
	Shigo v1.0.0
	Designed & Build by Zurvin Company
	*************************************************************-->
	<meta charset="utf-8" />
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php if ( is_home() ) { ?><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?><?php } ?>
	    <?php if ( is_author() ) { ?><?php bloginfo('name'); ?> | Archivo por autor<?php } ?>
	    <?php if ( is_single() ) { ?><?php wp_title(''); ?> | <?php bloginfo('name'); ?><?php } ?>
	    <?php if ( is_page() ) { ?><?php wp_title(''); ?> | <?php bloginfo('name'); ?><?php } ?>
	    <?php if ( is_category() ) { ?><?php bloginfo('name'); ?> | Archivo por Categoria | <?php single_cat_title(); ?><?php } ?>
	    <?php if ( is_month() ) { ?><?php bloginfo('name'); ?> | Archivo por Mes | <?php the_time('F'); ?><?php } ?>
	    <?php if ( is_search() ) { ?><?php bloginfo('name'); ?> | Resultados de búsqueda<?php } ?>
	    <?php if (function_exists('is_tag')) { if ( is_tag() ) { ?><?php bloginfo('name'); ?> | Archivo por Tag | <?php  single_tag_title("", true); } } ?></title>
	<meta name="description" content="Maderera MADPRO es líder en la transformación y comercialización de madera montaña y eucalipto, tapajuntas, machihembrados, zócalos y estacas en todas las medidas y presentaciones para la industria del mueble y acabados de construcción." />
	<meta name="keywords" content="maderas huancayo, madera montaña, madera eucalipto, ferretería, maderera, madpro, tapajuntas, machihembrado, zócalo, traslapados, estacas"/>
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> 

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

	<meta name="theme-color" content="#fb7f30" />

	<!-- CSS -->
	<link type="text/css" media="screen" rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/normalize.min.css">
	<link type="text/css" media="screen" rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/wablegrid.css">
	<link type="text/css" media="screen" rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/slicknav.css">
	<link type="text/css" media="screen" rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/style.css">

	<!-- Favicons -->
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/icons/favicon.ico">
	<link rel="apple-touch-icon-precomposed" href="<?php bloginfo('template_directory'); ?>/images/icons/apple-touch-icon.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php bloginfo('template_directory'); ?>/images/icons/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php bloginfo('template_directory'); ?>/images/icons/apple-touch-icon-114x114.png">

	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php wp_head(); ?>

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-51699098-1', 'madpro.pe');
	  ga('send', 'pageview');
	</script>

	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/vendors/js/jquery-1.9.1.min.js"></script>
	<!-- Carrusel -->
	 <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/vendors/carrusel/simple.carousel.js"></script>
	 <script type="text/javascript">
        jQuery(document).ready(function() {
            // example 1
            $("ul.brands").simplecarousel({
                width:90,
                height:60,
                visible: 7,
                auto: 5000,
                next: $('.next'),
                prev: $('.prev')
            });
        });
        
    </script>

</head>

<body>

	<!-- <div class="top-header">
		<div class="container">
			<div class="row">
				<div class="g12">
					<span class="left"><i class="location"></i>Psje. Franscisco Vidal Nº 184. El Tambo - Huancayo</span>
					<div class="right">
						<ul class="social">
							<li><a target="_blank" href="https://www.facebook.com/madproperu"><i class="facebook"></i>Facebook</a></li>
							<li><a target="_blank" href="https://twitter.com/madproperu"><i class="twitter"></i>Twitter</a></li>
						</ul>
					</div>
					<div class="clear"></div>		
				</div>
			</div>
		</div>
	</div> -->

	<header>
		<div class="container">
			<div class="row">
				<div class="g12">

					<div class="logotipo">
						<a alt="Maderas Huancayo Madpro" href="<?php bloginfo('url'); ?>"><span><?php bloginfo('name'); ?></span></a>
					</div>

					<nav>
						<ul id="menulist">
							<li class="<?php if (((is_home()) && !(is_paged())) or (is_archive()) or (is_single()) or (is_paged()) or (is_search())) { ?>page_item current_page_item<?php } ?>"><a href="<?php echo get_settings('home'); ?>">
							<?php _e('Home'); ?>
							</a></li>
							<?php wp_list_pages('sort_column=menu_order&depth=1&title_li='); ?>
						</ul>
					</nav>

					<div class="clear"></div>

				</div>
			</div><!-- End Row-->
		</div>
	</header>
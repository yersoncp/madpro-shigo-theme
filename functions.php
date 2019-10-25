<?php

/*Support Thumbnails*/
add_theme_support( 'post-thumbnails' );
require_once(TEMPLATEPATH . '/functions/zwp_sidebar.php');
require_once(TEMPLATEPATH . '/functions/zwp_cpt_madera.php');
require_once(TEMPLATEPATH . '/functions/zwp_cpt_ferreteria.php');

/*-----------------------------------------*/
/* Limitar the_excerpt()
/*-----------------------------------------*/
function theme_excerpt_length($length){
   return 35; //el número aquí es nueva cantidad de palabras en el excerpt
}
add_filter('excerpt_length','theme_excerpt_length');

/*-----------------------------------------*/
/* Cargando plugin integrado
/*-----------------------------------------*/
if ( !function_exists( 'optionsframework_init' ) ) {
	define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/inc/' );
	require_once dirname( __FILE__ ) . '/inc/options-framework.php';
}
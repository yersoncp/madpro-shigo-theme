<?php 
/*
Descripción: Migajas de navegacion (breadcrumb)
Use: 
$defaults = array(
	'theme_location'  => 'top-menu',
	'link_before'     => "<i></i>",
	'depth'           => 1,
);
*/

add_theme_support('menus');
if (function_exists('register_nav_menu')) {
    //register_nav_menu('top-menu', 'Menu superior');
    //register_nav_menu('main-menu', 'Menu principal');
    //register_nav_menu('footer-menu', 'Menu inferior');
}


?>
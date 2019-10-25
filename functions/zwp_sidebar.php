<?php
if ( function_exists('register_sidebar') ) {

	register_sidebar(array(
		'name'				=> __( 'Right Sidebar', 'Zurvin Theme' ),
		'id'            	=> 'right-sidebar',
		'before_widget'		=> '<div class="widget %2$s" id="%1$s">',
		'after_widget'		=> '</div>',
		'before_title'		=> '<h4 class="widget_title">',
		'after_title'		=> '</h4>',
	));


	register_sidebar(array(
		'name'				=> __( 'Footer Sidebar', 'Zurvin Theme' ),
		'id'            	=> 'footer-sidebar',
		'before_widget'		=> '<div class="g4"><div class="widget %2$s id="%1$s"">',
		'after_widget'		=> '</div></div>',
		'before_title'		=> '<h4 class="widgettitle">',
		'after_title'		=> '</h4>',
	));

}

?>
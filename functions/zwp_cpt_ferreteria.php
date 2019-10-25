<?php
/*
	1. Content Post Type
	2. Taxonomy
	3. Custom Field
*/

//z_cpt: variable custom post type
define('z_ferreteria', 'Ferreteria');

//Registrando Nuevo Tipo de contenido
add_action('init','create_post_type_2',0);
function create_post_type_2() {
    register_post_type( strtolower(z_ferreteria),
        array(
            'labels' => array(
                'name' => __( z_ferreteria.'s' ),
                'singular_name' => __( z_ferreteria ),
                'add_new'=>'Añadir Nuevo',
                'add_new_item' => __('Añadir un nuevo '.z_ferreteria),
                'edit_item' => __('Editar '.z_ferreteria),
                'new_item' => __('Nuevo'),
                'view_item' => __('Ver'),
                'search_items' => __('Buscar'),
                'not_found' =>  __('No se ha encontrado nada.'),
                'not_found_in_trash' => __('No se ha encontrado nada en la papelera.')
            ),
        'public' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor', 'author', 'thumbnail'),
        'rewrite' => array('slug' => strtolower(z_ferreteria))
        )
    );
}//Fin Tipo de contenido

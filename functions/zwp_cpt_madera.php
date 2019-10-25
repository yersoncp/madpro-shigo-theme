<?php
/*
	1. Content Post Type
	2. Taxonomy
	3. Custom Field
*/

//z_cpt: variable custom post type
define('z_cpt', 'Madera');

//Registrando Nuevo Tipo de contenido
add_action('init','create_post_type',0);
function create_post_type() {
    register_post_type( strtolower(z_cpt),
        array(
            'labels' => array(
                'name' => __( z_cpt.'s' ),
                'singular_name' => __( z_cpt ),
                'add_new'=>'Añadir Nuevo',
                'add_new_item' => __('Añadir un nuevo '.z_cpt),
                'edit_item' => __('Editar '.z_cpt),
                'new_item' => __('Nuevo'),
                'view_item' => __('Ver'),
                'search_items' => __('Buscar'),
                'not_found' =>  __('No se ha encontrado nada.'),
                'not_found_in_trash' => __('No se ha encontrado nada en la papelera.')
            ),
        'public' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor', 'author', 'thumbnail'),
        'rewrite' => array('slug' => strtolower(z_cpt))
        )
    );
}//Fin Tipo de contenido

//Registrando Nuevo taxonomía
add_action('init', 'my_taxonomy', 0);
function my_taxonomy() {
  //register_taxonomy('nombre_taxonomia', 'content_type_asociado'
  register_taxonomy('tipo', strtolower(z_cpt),
    array(
        'hierarchical' => true,
        'public' => true,
        'label' => 'Tipo',
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => array(
                'slug' => 'tipo',
                'with_front' => false,
                'hierarchical' => true
            )
        ));

}
//Fin taxonomias

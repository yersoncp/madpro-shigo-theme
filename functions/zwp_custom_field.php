<?php
$prefix = 'z_';
global $meta_boxes;
$meta_boxes = array();

// new meta box
$meta_boxes[] = array(
  'title' => __( 'Opciones', 'rwmb' ),

  // Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
  'pages' => array( 'post', 'page' ),

  // Where the meta box appear: normal (default), advanced, side. Optional.
  'context' => 'normal',
  
  // Auto save: true, false (default). Optional.
  'autosave' => true,

  'fields' => array(

    // FILE ADVANCED (WP 3.5+)
    array(
      'name' => __( 'Subir Audio', 'rwmb' ),
      'id'   => "{$prefix}file_advanced",
      'type' => 'file_advanced',
      'max_file_uploads' => 4,
      'mime_type' => 'audio,video', // Leave blank for all file types
    ),

    // TAXONOMY
    array(
      'name'    => __( 'Taxonomy', 'rwmb' ),
      'id'      => "{$prefix}taxonomy",
      'type'    => 'taxonomy',
      'options' => array(
        // Taxonomy name
        'taxonomy' => 'category',
        // How to show taxonomy: 'checkbox_list' (default) or 'checkbox_tree', 'select_tree', select_advanced or 'select'. Optional
        'type' => 'select',
        // Additional arguments for get_terms() function. Optional
        'args' => array()
      ),
    ),

  )
);

/********************* META BOX REGISTERING ***********************/

/**
 * Register meta boxes
 *
 * @return void
 */
function YOUR_PREFIX_register_meta_boxes()
{
  // Make sure there's no errors when the plugin is deactivated or during upgrade
  if ( !class_exists( 'RW_Meta_Box' ) )
    return;

  global $meta_boxes;
  foreach ( $meta_boxes as $meta_box )
  {
    new RW_Meta_Box( $meta_box );
  }
}
// Hook to 'admin_init' to make sure the meta box class is loaded before
// (in case using the meta box class in another plugin)
// This is also helpful for some conditionals like checking page template, categories, etc.
add_action( 'admin_init', 'YOUR_PREFIX_register_meta_boxes' );

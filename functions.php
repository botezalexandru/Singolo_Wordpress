<?php

// function to create the DB 

function create_form_database() {
    
    $table_name = form_entries;

    
    $sql = 'CREATE TABLE '.$table_name.'(
        id INTEGER NOT NULL AUTO_INCREMENT,
        name VARCHAR(40),
        email VARCHAR(40),
        subject TEXT,
        projectdescription TEXT,
       PRIMARY KEY (id))';

    require_once(ABSPATH.'wp-admin/includes/upgrade.php');
   dbDelta($sql);

}


add_action("after_switch_theme", "create_form_database");




add_theme_support( 'post-thumbnails' ); 


function singolo_images_size() {
  add_image_size( 'slider', 1020, 600, true ); 
  add_image_size( 'project-thumb', 200, 190, true ); 
  add_image_size( 'medium', 300, 300, true ); 
  add_image_size( 'services', 60, 60, true ); 
}
add_action( 'after_setup_theme', 'singolo_images_size' );



function custom_post_type () {



  $labels = array(
    'name'               => 'Slider',
    'singular_name'      => 'Slider',
    'add_new'            => 'Add slider',
    'all_items'          => 'All slides',
    'add_new_item'       => 'Add slide',
    'edit_item'          => 'Edit slide',
    'new_item'           => 'New slide',
    'view_item'          => 'View slide',
    'search_items'       => 'Search slides',
    'not_found'          => 'No slides found',
    'not_found_in_trash' => 'No slides found in trash'
    );


  $args = array (
    'labels'      => $labels,
    'public'      => true,
    'has_archive' => true,
    'menu_icon'   => 'dashicons-image-flip-horizontal',
    'rewrite'     => array(
      'slug'      => 'slider'
      ),
    'supports' => array(
      'title',
      'thumbnail',
      'page-attributes'
      )
    );


  register_post_type( 'slider', $args );



    
  $labels = array(
    'name'               => 'Services',
    'singular_name'      => 'Services',
    'add_new'            => 'Add service',
    'all_items'          => 'All services',
    'add_new_item'       => 'Add service',
    'edit_item'          => 'Edit service',
    'new_item'           => 'New service',
    'view_item'          => 'View services',
    'search_items'       => 'Search services',
    'not_found'          => 'No services found',
    'not_found_in_trash' => 'No services found in trash'
    );

  $args = array (
    'labels' => $labels,
    'public' => true,
    'has_archive' => true,
    'menu_icon' => 'dashicons-clipboard',
    'rewrite' => array( 'slug' => 'services-list'),       
    'supports' => array(
      'title',
      'editor',
      'thumbnail',
      'page-attributes'
      )
    );

  register_post_type( 'services-list', $args );



  
  $labels = array(
    'name' => 'Portfolio',
    'singular_name' => 'Portfolio',
    'add_new' => 'Add project',
    'all_items' => 'All projects',
    'add_new_item' => 'Add project',
    'edit_item' => 'Edit project',
    'new_item' => 'New project',
    'view_item' => 'View projects',
    'search_items' => 'Search projects',
    'not_found' => 'No projects found',
    'not_found_in_trash' => 'No projects found in trash'
    );


  $args = array (
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'query_var' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'menu_icon' => 'dashicons-portfolio',
    'rewrite' => array( 'slug' => 'projects'),
    'taxonomies' => array('projects_category'),       
    'supports' => array(
      'title',
      'editor',
      'thumbnail',
      'page-attributes'
      )
    );

  register_post_type( 'portfolio_projects', $args );
  
    


  $labels = array(
    'name'               => 'Staff',
    'singular_name'      => 'Staff',
    'add_new'            => 'Add staff',
    'all_items'          => 'All staff',
    'add_new_item'       => 'Add staff',
    'edit_item'          => 'Edit staff',
    'new_item'           => 'New staff',
    'view_item'          => 'View staff',
    'search_items'       => 'Search staff',
    'not_found'          => 'No staff found',
    'not_found_in_trash' => 'No staff found in trash'
    );




  $args = array (
    'labels'      => $labels,
    'public'      => true,
    'has_archive' => true,
    'menu_icon'   => 'dashicons-groups',
    'rewrite'     => array( 'slug' => 'staff'),       
    'supports'    => array(
      'title',
      'editor',
      'thumbnail',
      'page-attributes',
      'custom-fields'

      )
    );
  register_post_type( 'about_staff', $args );


}
add_action( 'init', 'custom_post_type' );




function my_custom_taxonomies() {
  $labels = array(
    'name'                       => 'Portfolio Categories',
    'singular_name'              => 'Category',
    'search_items'               => 'Search Categories',
    'popular_items'              => 'Popular Categories',
    'all_items'                  => 'All Projects Categories',      
    'edit_item'                  => 'Edit Projects Category',
    'update_item'                => 'Update Projects Category',
    'add_new_item'               => 'Add New Projects Category',
    'new_item_name'              => 'New Projects Category Name',     
    'add_or_remove_items'        => 'Add or remove Projects Categories',
    'choose_from_most_used'      => 'Choose from the most used Projects Categories',
    'not_found'                  => 'No Categories found.',
    'menu_name'                  => 'Portfolio Categories',
    );


  $args = array(
    'hierarchical'          => true,
    'labels'                => $labels,
    'show_ui'               => true,
    'show_admin_column'     => true,      
    'query_var'             => true,
    'rewrite'               => array( 'slug' => 'portfolio/category' ),
    );
  register_taxonomy( 'projects_category', 'portfolio_projects', $args );
}

add_action( 'init', 'my_custom_taxonomies' );


?>


<?php

//create post types


function create_my_post_types() {



        //Webinars
    $port_args = array(
      'public' => true,
      'label'  => 'Webinars',
      'taxonomies' => array('category'), 
      'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail' )
    );
    register_post_type( 'webinars', $port_args );
    

}

add_action( 'init', 'create_my_post_types' );




// Creating a Videos Custom Post Type
function crunchify_videos_custom_post_type() {
  $labels = array(
    'name'                => __( 'Videos' ),
    'singular_name'       => __( 'Video'),
    'menu_name'           => __( 'Videos'),
    'parent_item_colon'   => __( 'Parent Video'),
    'all_items'           => __( 'All Videos'),
    'view_item'           => __( 'View Video'),
    'add_new_item'        => __( 'Add New Video'),
    'add_new'             => __( 'Add New'),
    'edit_item'           => __( 'Edit Video'),
    'update_item'         => __( 'Update Video'),
    'search_items'        => __( 'Search Video'),
    'not_found'           => __( 'Not Found'),
    'not_found_in_trash'  => __( 'Not found in Trash')
  );
  $args = array(
    'label'               => __( 'videos'),
    'description'         => __( 'Videos'),
    'labels'              => $labels,
    'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields'),
    'public'              => true,
    'hierarchical'        => false,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'has_archive'         => true,
    'can_export'          => true,
    'exclude_from_search' => false,
          'yarpp_support'       => true,
    'taxonomies'        => array('post_tag'),
    'publicly_queryable'  => true,
    'capability_type'     => 'page'
);
  register_post_type( 'videos', $args );
}
add_action( 'init', 'crunchify_videos_custom_post_type', 0 );


// Let us create Taxonomy for Custom Post Type
add_action( 'init', 'crunchify_create_videos_custom_taxonomy', 0 );
 
//create a custom taxonomy name it "resource types" for your posts
function crunchify_create_videos_custom_taxonomy() {
 
  $labels = array(
    'name' => _x( 'Video Types', 'taxonomy general name' ),
    'singular_name' => _x( 'Videos Type', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Video Types' ),
    'all_items' => __( 'All Video Types' ),
    'parent_item' => __( 'Parent Video Type' ),
    'parent_item_colon' => __( 'Parent Video Type:' ),
    'edit_item' => __( 'Edit Video Type' ), 
    'update_item' => __( 'Update Video Type' ),
    'add_new_item' => __( 'Add New Video Type' ),
    'new_item_name' => __( 'New Video Type Name' ),
    'menu_name' => __( 'Video Types' ),
  );  
 
  register_taxonomy('video_types',array('videos'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'video-types' ),
  ));
}







// Creating a Resources Custom Post Type
function crunchify_resources_custom_post_type() {
  $labels = array(
    'name'                => __( 'Resources' ),
    'singular_name'       => __( 'Resource'),
    'menu_name'           => __( 'Resources'),
    'parent_item_colon'   => __( 'Parent Resource'),
    'all_items'           => __( 'All Resources'),
    'view_item'           => __( 'View Resource'),
    'add_new_item'        => __( 'Add New Resource'),
    'add_new'             => __( 'Add New'),
    'edit_item'           => __( 'Edit Resource'),
    'update_item'         => __( 'Update Resource'),
    'search_items'        => __( 'Search Resource'),
    'not_found'           => __( 'Not Found'),
    'not_found_in_trash'  => __( 'Not found in Trash')
  );
  $args = array(
    'label'               => __( 'resources'),
    'description'         => __( 'Resources'),
    'labels'              => $labels,
    'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields'),
    'public'              => true,
    'hierarchical'        => false,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'has_archive'         => true,
    'can_export'          => true,
    'exclude_from_search' => false,
          'yarpp_support'       => true,
    'taxonomies'        => array('post_tag'),
    'publicly_queryable'  => true,
    'capability_type'     => 'page'
);
  register_post_type( 'resources', $args );
}
add_action( 'init', 'crunchify_resources_custom_post_type', 0 );



// Let us create Taxonomy for Custom Post Type
add_action( 'init', 'crunchify_create_resources_custom_taxonomy', 0 );
 
//create a custom taxonomy name it "resource types" for your posts
function crunchify_create_resources_custom_taxonomy() {
 
  $labels = array(
    'name' => _x( 'Resource Types', 'taxonomy general name' ),
    'singular_name' => _x( 'Resource Type', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Resource Types' ),
    'all_items' => __( 'All Resource Types' ),
    'parent_item' => __( 'Parent Resource Type' ),
    'parent_item_colon' => __( 'Parent Resource Type:' ),
    'edit_item' => __( 'Edit Resource Type' ), 
    'update_item' => __( 'Update Resource Type' ),
    'add_new_item' => __( 'Add New Resource Type' ),
    'new_item_name' => __( 'New Resource Type Name' ),
    'menu_name' => __( 'Resource Types' ),
  );  
 
  register_taxonomy('resource_types',array('resources'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'resource-types' ),
  ));
}


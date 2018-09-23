<?php

//create post types


function create_my_post_types() {

    //add teaser
    $port_args = array(
      'public' => true,
      'label'  => 'Teaser',
      'taxonomies' => array('category', 'people'), 
      'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail' )
    );
    register_post_type( 'teaser', $port_args );

    //add team
    $port_args = array(
      'public' => true,
      'label'  => 'Team',
      'taxonomies' => array('category'), 
      'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail' )
    );
    register_post_type( 'Team', $port_args );

    //practice areas
    $port_args = array(
      'public' => true,
      'label'  => 'Practice areas',
      'taxonomies' => array('category'), 
      'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail' )
    );
    register_post_type( 'practice-areas', $port_args );

        //practice areas
    $port_args = array(
      'public' => true,
      'label'  => 'Resources',
      'taxonomies' => array('category'), 
      'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail' )
    );
    register_post_type( 'resources', $port_args );
    

}

add_action( 'init', 'create_my_post_types' );



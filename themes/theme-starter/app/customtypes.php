<?php


namespace App;

add_action('init', function () {

    $labels = array(
        'name'               => __( 'Services' ),
        'singular_name'      => __( 'Services' ),
        'add_new'            => __( 'Add New' ),
        'add_new_item'       => __( 'Add New Item' ),
        'edit_item'          => __( 'Edit item' ),
        'new_item'           => __( 'Add New Services' ),
        'view_item'          => __( 'View Services' ),
        'search_items'       => __( 'Search Services' ),
        'not_found'          => __( 'No Services found' ),
        'not_found_in_trash' => __( 'No Services' )
    );

    $supports = array(
        'title',
        'editor',
        'thumbnail',
        'excerpt',
        'custom-fields',
    );

    $args = array(
        'labels'               => $labels,
        'supports'             => $supports,
        'taxonomies'           => array('category'),
        'public'               => true,
        'capability_type'      => 'post',
        'rewrite'              => array( 'slug' => 'services' ),
        'has_archive'          => true,
        'menu_position'        => 30,
        'menu_icon'            => 'dashicons-admin-settings',
      
    );

    register_post_type( 'services-list', $args );



});







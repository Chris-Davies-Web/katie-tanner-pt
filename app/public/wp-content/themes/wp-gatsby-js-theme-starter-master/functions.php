<?php
add_theme_support( 'custom-logo' );
add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails', array( 'page', 'post', 'workout', 'nutrition') );

function create_custom_post_types(){
    // Workout Post Type
    register_post_type('workout',
                    array(
                        'labels' => array(
                            'name' => _('Workout'),
                            'singular_name' => _('Workout')
                        ),
                        'taxonomies'  => array( 'category' ),
                        'public' => true,
                        'show_in_admin_bar' => true,
                        'show_in_rest' => true
                    ));
    add_post_type_support('workout', array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields'));

    
    // Nutrition Post Type
    register_post_type('nutrition',
                    array(
                        'labels' => array(
                            'name' => _('Nutrition'),
                            'singular_name' => _('Nutrition')
                        ),
                        'taxonomies'  => array( 'category' ),
                        'public' => true,
                        'show_in_admin_bar' => true,
                        'show_in_rest' => true
                    ));
    add_post_type_support('nutrition', array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields'));

    // Testimonial Post Type
    register_post_type('testimonial',
    array(
        'labels' => array(
            'name' => _('Testimonial'),
            'singular_name' => _('Testimonial')
        ),
        'taxonomies'  => array( 'category' ),
        'public' => true,
        'show_in_admin_bar' => true,
        'show_in_rest' => true
    ));
    add_post_type_support('testimonial', array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields'));

    // Services Post Type
    register_post_type('services',
    array(
        'labels' => array(
            'name' => _('Services'),
            'singular_name' => _('Services')
        ),
        'taxonomies'  => array( 'category' ),
        'public' => true,
        'show_in_admin_bar' => true,
        'show_in_rest' => true
    ));
    add_post_type_support('services', array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields'));

    
}

add_action('init', 'create_custom_post_types');
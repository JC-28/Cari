<?php
function custom_post_types(){
    register_post_type('dictionary-entry',array(
        'supports' => array('title', 'editor','excerpt', 'thumbnail', 'comments' ),
            'rewrite'=> array('slug' => 'dictionary-entry' ),
            'has_archive' => true,
            'public' => true, 
            'labels' => array(
                'name' => "Dictionary Entries",
                'featured_image' => 'Feature Image',
                'add_new_item' => 'Add New Word',
                'edit_item' => 'Edit Word',
                'all_items' => 'All Words',
                'singular_name' => "Dictionary Entries"
            ),
            'menu_icon' => 'dashicons-book'
        ));   
    register_post_type('recipes',array(
        'supports' => array('title', 'editor','excerpt', 'thumbnail',  'comments' ),
            'rewrite'=> array('slug' => 'recipes' ),
            'has_archive' => true,
            'public' => true, 
            'labels' => array(
                'name' => "Recipes",
                'featured_image' => 'Feature Image',
                'add_new_item' => 'Add New Recipe',
                'edit_item' => 'Edit Recipe',
                'all_items' => 'All Recipes',
                'singular_name' => "Recipes"
            ),
            'menu_icon' => 'dashicons-food'
        )); 
}
add_action('init', 'custom_post_types');

add_post_type_support( 'product', array( 'comments' ) );
?>
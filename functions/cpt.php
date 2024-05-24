<?php

/**
 * Adding ACF Options Page to Menu.
 */
if (function_exists('acf_add_options_page')) {
    // Adding
    acf_add_options_page(array(
        'page_title' => 'Settings',
        'menu_title' => 'Gerenciar site',
        'menu_slug' => 'site_options',
        'capability' => 'edit_posts',
        'parent_slug' => '',
        'position' => 28,
        'icon_url' => 'dashicons-admin-generic'
    ));
    // Geral and Logos
    acf_add_options_sub_page(array(
        'page_title' => 'Gerenciar site',
        'menu_title' => 'Geral',
        'parent_slug' => 'site_options'
    ));
    acf_add_options_sub_page(array(
        'page_title' => 'Header',
        'menu_title' => 'Header',
        'parent_slug' => 'site_options'
    ));
    acf_add_options_sub_page(array(
        'page_title' => 'Footer',
        'menu_title' => 'Footer',
        'parent_slug' => 'site_options'
    ));
}

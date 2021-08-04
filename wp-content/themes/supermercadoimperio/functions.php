<?php

function theme_wp_styles()
{
    wp_enqueue_style('style_css', get_stylesheet_uri());
    wp_enqueue_style('main_css', get_stylesheet_directory_uri() . '/assets/css/main.css');
    //wp_enqueue_style('fontawesome', get_stylesheet_directory_uri() . '/assets/css/font-awesome.min.css');
    wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,900,300italic');

    wp_enqueue_script('browser_js', get_template_directory_uri() . '/assets/js/browser.min.js', array('jquery'), '', true);
    wp_enqueue_script('break_js', get_template_directory_uri() . '/assets/js/breakpoints.min.js', array(), '', true);
    wp_enqueue_script('util_js', get_template_directory_uri() . '/assets/js/util.js', array(), '', true);
    wp_enqueue_script('dropotron_js', get_template_directory_uri() . '/assets/js/jquery.dropotron.js', array(), '', true);
    wp_enqueue_script('dropotron_min_js', get_template_directory_uri() . '/assets/js/jquery.dropotron.min.js', array(), '', true);
    wp_enqueue_script('main_js', get_template_directory_uri() . '/assets/js/main.js', array(), '', true);
    wp_enqueue_script('jquery_js', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), '', true);
}

add_action('wp_enqueue_scripts', 'theme_wp_styles');

add_theme_support('title-tag');
add_theme_support('post-thumbnails');


function get_images_from_media_library()
{
    $args = array(
        'post_type' => 'attachment',
        'post_mime_type' => 'image',
        'post_status' => 'inherit',
        'posts_per_page' => 5,
        'orderby' => 'rand'
    );
    $query_images = new WP_Query($args);
    $images = array();
    foreach ($query_images->posts as $image) {
        $images[] = $image->guid;
    }
    return $images;
}

function exibir_imagem($nome_img)
{

    $imgs = get_images_from_media_library();
    $html = '<div>';

    foreach ($imgs as $img) {
        $isImg = stripos($img, $nome_img);

        if ($isImg !== false) {
            $html .= '<img src="' . $img . '" alt="" />';
        }

    }

    $html .= '</div>';

    return $html;

}

function get_image_url($slug)
{
    $args = array(
        'post_type' => 'attachment',
        'name' => sanitize_title($slug),
        'posts_per_page' => 1,
        'post_status' => 'inherit',
    );
    $_header = get_posts($args);
    $header = $_header ? array_pop($_header) : null;
    return $header ? wp_get_attachment_url($header->ID) : '';
}

function get_image_folheto()
{
    $args = array(
        'post_type' => 'attachment',
        'name' => sanitize_title('folheto'),
        'posts_per_page' => 1,
        'post_status' => 'inherit',
    );
    $_header = get_posts($args);
    $header = $_header ? array_pop($_header) : null;
    return $header ? wp_get_attachment_url($header->ID) : '';
}

function nav_menu()
{
    wp_nav_menu(
        array(
            'theme_location' => 'header-menu',
            'menu' => 'li',
            'container' => 'ul',
            'container_class' => 'm',
            'container_id' => 'current',
            'menu_class' => 'current',
            'menu_id' => '',
            'echo' => true,
            'fallback_cb' => 'wp_page_menu',
            'before' => '',
            'after' => '',
            'link_before' => '',
            'link_after' => '',
            'items_wrap' => '<ul>%3$s</ul>',
            'depth' => 0,
            'walker' => ''
        )
    );
}

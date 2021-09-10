<?php
define('DG_TMP_DIR', get_template_directory_uri());
function DG_setup_callback(){
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('menus');
}
add_action('init','DG_setup_callback');
function DG_load_assets(){
    WP_enqueue_style('style1',DG_TMP_DIR.'/assets/fonts/font-awesome/css/font-awesome.min.css');
    WP_enqueue_style('style2',DG_TMP_DIR.'/assets/css/bootstrap.min.css');
    WP_enqueue_style('style3',DG_TMP_DIR.'/assets/css/now-ui-kit.css');
    WP_enqueue_style('style4',DG_TMP_DIR.'/plugins/owl.carousel.css');
    WP_enqueue_style('style5',DG_TMP_DIR.'/plugins/owl.theme.default.min.css');
    WP_enqueue_style('style6',DG_TMP_DIR.'/style.css');
}
add_action('wp_enqueue_scripts','DG_load_assets');
?>
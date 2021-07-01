<?php 
    add_action( 'wp_enqueue_scripts', 'wp_bootstrap_starter_child_enqueue_styles' );
    function wp_bootstrap_starter_child_enqueue_styles() {
        $parenthandle = 'wp-bootstrap-starter-style';
        $theme = wp_get_theme();
        wp_enqueue_style( 
            $parenthandle, 
            get_template_directory_uri() . '/style.css',
            array(),
            $theme->parent()->get('Version') 
        ); 
        wp_enqueue_style(
            'child-theme-styles', 
            get_stylesheet_uri(), 
            $parenthandle,
            1.0
        );
    } 

    function search_results_filter($query) {
        if ($query->is_search) {
            $query->set('post_type', 'post');
        }
        return $query;
    }
    add_filter('pre_get_posts','search_results_filter');

    function remove_footer_admin(){
        echo 'Site realizat de <a href="http://www.YOUR-SITE.com" target="_blank">Nume Prenume</a>';
    }
    add_filter('admin_footer_text', 'remove_footer_admin');


    remove_filter( 'authenticate', 'wp_authenticate_email_password', 20 );


    remove_action('welcome_panel', 'wp_welcome_panel');
    function wp_bootstrap_starter_child_widgets_init() {
        register_sidebar( array(
            'name'          => esc_html__( 'Footer 4', 'wp-bootstrap-starter' ),
            'id'            => 'footer-4',
            'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-starter' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        ) );
    }
    add_action( 'widgets_init', 'wp_bootstrap_starter_child_widgets_init' );

 ?>



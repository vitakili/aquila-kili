<?php
/**
 * Theme Sidebars
 * 
 * @package AquilaKili
 */

 namespace AQUILAKILI_THEME\Inc;

 use AQUILAKILI_THEME\Inc\Traits\Singleton;

 class Sidebars {
     use Singleton;

     
     protected function __construct() {
        // load class.
        $this->setup_hooks();
     }

     protected function setup_hooks() {
         /**
          * Actions.
          */
          add_action( 'widgets_init', [$this, 'register_sidebars']);
     }

     public function register_sidebars() {
        register_sidebar( [
                'name'          => __( 'Sidebar', 'aquilakili' ),
                'id'            => 'sidebar-1',
                'description'   => __( 'Main Sidebar', 'aquilakili'),
                'before_widget' => '<div id="%1$s" class="widget widget-sidebar %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3 class="widget-title">',
                'after_title'   => '</h3>',    
        ] );
     
        register_sidebar( [
            'name'          => __( 'Footer', 'aquilakili' ),
            'id'            => 'sidebar-2',
            'description'   => __( 'Footer Sidebar', 'aquilakili'),
            'before_widget' => '<div id="%1$s" class="widget widget-footer cell column %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',    
    ] );
     }
 }
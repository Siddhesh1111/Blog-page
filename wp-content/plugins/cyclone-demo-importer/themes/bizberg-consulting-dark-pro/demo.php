<?php

add_filter( 'pt-ocdi/import_files', 'cdi_import_files' );
function cdi_import_files() {
    return array(
        array(
            'import_file_name'             => __('Bizberg Consulting Dark Lite Free','cdi'),
            'categories'                   =>  array( 'Homepage' ),
            'local_import_file'            => CDI_PLUGIN_DIR_PATH . '/themes/bizberg-consulting-dark-pro/inc/content.xml',
            'local_import_customizer_file' => CDI_PLUGIN_DIR_PATH . '/themes/bizberg-consulting-dark-pro/inc/options.dat',
            'local_import_widget_file'     => CDI_PLUGIN_DIR_PATH . '/themes/bizberg-consulting-dark-pro/inc/widgets.wie',
            'import_preview_image_url'     => CDI_PLUGIN_DIR_URL . '/assets/images/bizberg-consulting-dark/homepage-1.jpg',
            'preview_url'                  => 'https://bizbergthemes.com/bizberg-consulting-dark-pro/'
        ),
        array(
            'import_file_name'             => __('Bizberg Consulting Dark Homepage 2','cdi'),
            'categories'                   =>  array( 'Homepage' ),
            'local_import_file'            => CDI_PLUGIN_DIR_PATH . '/themes/bizberg-consulting-dark-pro/inc/content.xml',
            'local_import_customizer_file' => CDI_PLUGIN_DIR_PATH . '/themes/bizberg-consulting-dark-pro/inc/options.dat',
            'local_import_widget_file'     => CDI_PLUGIN_DIR_PATH . '/themes/bizberg-consulting-dark-pro/inc/widgets.wie',
            'import_preview_image_url'     => CDI_PLUGIN_DIR_URL . '/assets/images/bizberg-consulting-dark/homepage-2.jpg',
            'preview_url'                  => 'https://bizbergthemes.com/bizberg-consulting-dark-pro/bizberg-consulting-dark-pro-homepage-2/'
        )
    );
}

add_action( 'pt-ocdi/after_import', 'cdi_after_import_setup' );
function cdi_after_import_setup( $selected_import ) {

    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
            'menu-1' => $main_menu->term_id,
        )
    );

    $import_file_name = $selected_import['import_file_name'];

    switch ( $import_file_name ) {

        case 'Bizberg Consulting Dark Lite Free':
            $front_page_id = get_page_by_title( 'Bizberg Consulting Dark Lite Free' );
            break;

        case 'Bizberg Consulting Dark Homepage 2':
            $front_page_id = get_page_by_title( 'Bizberg Consulting Dark Pro Homepage 2' );
            break;
        
        default:
            # code...
            break;
    }

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );

    // Change elementor options
    update_option( 'elementor_disable_color_schemes' , 'yes' );
    update_option( 'elementor_disable_typography_schemes' , 'yes' );
    update_option( 'elementor_page_title_selector' , 'h3.blog-title' );

    cdi_set_elementor_active_kit();

}

function cdi_set_elementor_active_kit(){

    $args = array(
        'post_type' => 'elementor_library',
        'numberposts' => 1,
        'post_status' => 'publish',
        'name' => 'default-kit-cyclone'
    );

    $my_posts = get_posts($args);
    if( $my_posts ) :
        update_option( 'elementor_active_kit',  absint( $my_posts[0]->ID ) );
    endif;

}
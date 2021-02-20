<?php
/**
 * Multipurpose Blog Theme Customizer
 *
 * @package Multipurpose Blog
 */

load_template( trailingslashit( get_template_directory() ) . '/inc/logo-sizer.php' );
/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function multipurpose_blog_customize_register( $wp_customize ) {	

	load_template( trailingslashit( get_template_directory() ) . 'inc/custom-control.php' );
	load_template( trailingslashit( get_template_directory() ) . '/inc/icon-changer.php' );

	$wp_customize->add_setting( 'multipurpose_blog_logo_sizer',array(
		'default' => 50,
		'transport' => 'refresh',
		'sanitize_callback' => 'multipurpose_blog_sanitize_integer'
	));
	$wp_customize->add_control( new Multipurpose_Blog_Custom_Control( $wp_customize, 'multipurpose_blog_logo_sizer',array(
		'label' => esc_html__( 'Logo Sizer','multipurpose-blog' ),
		'section' => 'title_tagline',
		'priority'    => 9,
		'input_attrs' => array(
			'min' => 0,
			'max' => 100,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting('multipurpose_blog_site_title_enable',array(
       'default' => true,
       'sanitize_callback'	=> 'multipurpose_blog_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_blog_site_title_enable',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Site Title','multipurpose-blog'),
       'section' => 'title_tagline'
    ));

    $wp_customize->add_setting('multipurpose_blog_site_title_font_size',array(
		'default'=> 45,
		'transport' => 'refresh',
		'sanitize_callback' => 'multipurpose_blog_sanitize_integer'
	));
	$wp_customize->add_control(new multipurpose_blog_Custom_Control( $wp_customize, 'multipurpose_blog_site_title_font_size',array(
		'label' => esc_html__( 'Site Title Font Size (px)','multipurpose-blog' ),
		'section'=> 'title_tagline',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
	)));

    $wp_customize->add_setting('multipurpose_blog_site_tagline_enable',array(
       'default' => true,
       'sanitize_callback'	=> 'multipurpose_blog_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_blog_site_tagline_enable',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Site Tagline','multipurpose-blog'),
       'section' => 'title_tagline'
    ));

	//add home page setting pannel
	$wp_customize->add_panel( 'multipurpose_blog_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Theme Settings', 'multipurpose-blog' ),
	    'description' => __( 'Description of what this panel does.', 'multipurpose-blog' ),
	) );

	$multipurpose_blog_font_array = array(
		''                       => 'No Fonts',
		'Abril Fatface'          => 'Abril Fatface',
		'Acme'                   => 'Acme',
		'Anton'                  => 'Anton',
		'Architects Daughter'    => 'Architects Daughter',
		'Arimo'                  => 'Arimo',
		'Arsenal'                => 'Arsenal',
		'Arvo'                   => 'Arvo',
		'Alegreya'               => 'Alegreya',
		'Alfa Slab One'          => 'Alfa Slab One',
		'Averia Serif Libre'     => 'Averia Serif Libre',
		'Bangers'                => 'Bangers',
		'Boogaloo'               => 'Boogaloo',
		'Bad Script'             => 'Bad Script',
		'Bitter'                 => 'Bitter',
		'Bree Serif'             => 'Bree Serif',
		'BenchNine'              => 'BenchNine',
		'Cabin'                  => 'Cabin',
		'Cardo'                  => 'Cardo',
		'Courgette'              => 'Courgette',
		'Cherry Swash'           => 'Cherry Swash',
		'Cormorant Garamond'     => 'Cormorant Garamond',
		'Crimson Text'           => 'Crimson Text',
		'Cuprum'                 => 'Cuprum',
		'Cookie'                 => 'Cookie',
		'Chewy'                  => 'Chewy',
		'Days One'               => 'Days One',
		'Dosis'                  => 'Dosis',
		'Droid Sans'             => 'Droid Sans',
		'Economica'              => 'Economica',
		'Fredoka One'            => 'Fredoka One',
		'Fjalla One'             => 'Fjalla One', 
		'Francois One'           => 'Francois One',
		'Frank Ruhl Libre'       => 'Frank Ruhl Libre',
		'Gloria Hallelujah'      => 'Gloria Hallelujah',
		'Great Vibes'            => 'Great Vibes',
		'Handlee'                => 'Handlee',
		'Hammersmith One'        => 'Hammersmith One',
		'Inconsolata'            => 'Inconsolata',
		'Indie Flower'           => 'Indie Flower', 
		'IM Fell English SC'     => 'IM Fell English SC',
		'Julius Sans One'        => 'Julius Sans One',
		'Josefin Slab'           => 'Josefin Slab',
		'Josefin Sans'           => 'Josefin Sans',
		'Kanit'                  => 'Kanit', 
		'Lobster'                => 'Lobster',
		'Lato'                   => 'Lato',
		'Lora'                   => 'Lora',
		'Libre Baskerville'      => 'Libre Baskerville',
		'Lobster Two'            => 'Lobster Two', 
		'Merriweather'           => 'Merriweather',
		'Monda'                  => 'Monda', 
		'Montserrat'             => 'Montserrat',
		'Muli'                   => 'Muli', 
		'Marck Script'           => 'Marck Script', 
		'Noto Serif'             => 'Noto Serif', 
		'Open Sans'              => 'Open Sans', 
		'Overpass'               => 'Overpass',
		'Overpass Mono'          => 'Overpass Mono',
		'Oxygen'                 => 'Oxygen', 
		'Orbitron'               => 'Orbitron',
		'Patua One'              => 'Patua One',
		'Pacifico'               => 'Pacifico',
		'Padauk'                 => 'Padauk',
		'Playball'               => 'Playball',
		'Playfair Display'       => 'Playfair Display', 
		'PT Sans'                => 'PT Sans',
		'Philosopher'            => 'Philosopher',
		'Permanent Marker'       => 'Permanent Marker',
		'Poiret One'             => 'Poiret One',
		'Quicksand'              => 'Quicksand',
		'Quattrocento Sans'      => 'Quattrocento Sans',
		'Raleway'                => 'Raleway',
		'Rubik'                  => 'Rubik', 
		'Rokkitt'                => 'Rokkitt',
		'Russo One'              => 'Russo One',
		'Righteous'              => 'Righteous',
		'Slabo'                  => 'Slabo', 
		'Source Sans Pro'        => 'Source Sans Pro',
		'Shadows Into Light Two' => 'Shadows Into Light Two', 
		'Shadows Into Light'     => 'Shadows Into Light',
		'Sacramento'             => 'Sacramento',
		'Shrikhand'              => 'Shrikhand',
		'Tangerine'              => 'Tangerine',
		'Ubuntu'                 => 'Ubuntu',
		'VT323'                  => 'VT323',
		'Varela Round'           => 'Varela Round',
		'Vampiro One'            => 'Vampiro One',
		'Vollkorn'               => 'Vollkorn', 
		'Volkhov'                => 'Volkhov',
		'Yanone Kaffeesatz'      => 'Yanone Kaffeesatz'
	);

	//Typography
	$wp_customize->add_section('multipurpose_blog_typography', array(
		'title'    => __('Typography', 'multipurpose-blog'),
		'panel'    => 'multipurpose_blog_panel_id',
	));

	// This is Paragraph Color picker setting
	$wp_customize->add_setting('multipurpose_blog_paragraph_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'multipurpose_blog_paragraph_color', array(
		'label'    => __('Paragraph Color', 'multipurpose-blog'),
		'section'  => 'multipurpose_blog_typography',
		'settings' => 'multipurpose_blog_paragraph_color',
	)));

	//This is Paragraph FontFamily picker setting
	$wp_customize->add_setting('multipurpose_blog_paragraph_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'multipurpose_blog_sanitize_choices',
	));
	$wp_customize->add_control(	'multipurpose_blog_paragraph_font_family', array(
		'section' => 'multipurpose_blog_typography',
		'label'   => __('Paragraph Fonts', 'multipurpose-blog'),
		'type'    => 'select',
		'choices' => $multipurpose_blog_font_array,
	));

	$wp_customize->add_setting('multipurpose_blog_paragraph_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('multipurpose_blog_paragraph_font_size', array(
		'label'   => __('Paragraph Font Size', 'multipurpose-blog'),
		'section' => 'multipurpose_blog_typography',
		'setting' => 'multipurpose_blog_paragraph_font_size',
		'type'    => 'text',
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting('multipurpose_blog_atag_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'multipurpose_blog_atag_color', array(
		'label'    => __('"a" Tag Color', 'multipurpose-blog'),
		'section'  => 'multipurpose_blog_typography',
		'settings' => 'multipurpose_blog_atag_color',
	)));

	//This is "a" Tag FontFamily picker setting
	$wp_customize->add_setting('multipurpose_blog_atag_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'multipurpose_blog_sanitize_choices',
	));
	$wp_customize->add_control(	'multipurpose_blog_atag_font_family', array(
		'section' => 'multipurpose_blog_typography',
		'label'   => __('"a" Tag Fonts', 'multipurpose-blog'),
		'type'    => 'select',
		'choices' => $multipurpose_blog_font_array,
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting('multipurpose_blog_li_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'multipurpose_blog_li_color', array(
		'label'    => __('"li" Tag Color', 'multipurpose-blog'),
		'section'  => 'multipurpose_blog_typography',
		'settings' => 'multipurpose_blog_li_color',
	)));

	//This is "li" Tag FontFamily picker setting
	$wp_customize->add_setting('multipurpose_blog_li_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'multipurpose_blog_sanitize_choices',
	));
	$wp_customize->add_control(	'multipurpose_blog_li_font_family', array(
		'section' => 'multipurpose_blog_typography',
		'label'   => __('"li" Tag Fonts', 'multipurpose-blog'),
		'type'    => 'select',
		'choices' => $multipurpose_blog_font_array,
	));

	// This is H1 Color picker setting
	$wp_customize->add_setting('multipurpose_blog_h1_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'multipurpose_blog_h1_color', array(
		'label'    => __('H1 Color', 'multipurpose-blog'),
		'section'  => 'multipurpose_blog_typography',
		'settings' => 'multipurpose_blog_h1_color',
	)));

	//This is H1 FontFamily picker setting
	$wp_customize->add_setting('multipurpose_blog_h1_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'multipurpose_blog_sanitize_choices',
	));
	$wp_customize->add_control('multipurpose_blog_h1_font_family', array(
		'section' => 'multipurpose_blog_typography',
		'label'   => __('H1 Fonts', 'multipurpose-blog'),
		'type'    => 'select',
		'choices' => $multipurpose_blog_font_array,
	));

	//This is H1 FontSize setting
	$wp_customize->add_setting('multipurpose_blog_h1_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('multipurpose_blog_h1_font_size', array(
		'label'   => __('H1 Font Size', 'multipurpose-blog'),
		'section' => 'multipurpose_blog_typography',
		'setting' => 'multipurpose_blog_h1_font_size',
		'type'    => 'text',
	));

	// This is H2 Color picker setting
	$wp_customize->add_setting('multipurpose_blog_h2_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'multipurpose_blog_h2_color', array(
		'label'    => __('h2 Color', 'multipurpose-blog'),
		'section'  => 'multipurpose_blog_typography',
		'settings' => 'multipurpose_blog_h2_color',
	)));

	//This is H2 FontFamily picker setting
	$wp_customize->add_setting('multipurpose_blog_h2_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'multipurpose_blog_sanitize_choices',
	));
	$wp_customize->add_control(
	'multipurpose_blog_h2_font_family', array(
		'section' => 'multipurpose_blog_typography',
		'label'   => __('h2 Fonts', 'multipurpose-blog'),
		'type'    => 'select',
		'choices' => $multipurpose_blog_font_array,
	));

	//This is H2 FontSize setting
	$wp_customize->add_setting('multipurpose_blog_h2_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('multipurpose_blog_h2_font_size', array(
		'label'   => __('H2 Font Size', 'multipurpose-blog'),
		'section' => 'multipurpose_blog_typography',
		'setting' => 'multipurpose_blog_h2_font_size',
		'type'    => 'text',
	));

	// This is H3 Color picker setting
	$wp_customize->add_setting('multipurpose_blog_h3_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'multipurpose_blog_h3_color', array(
		'label'    => __('H3 Color', 'multipurpose-blog'),
		'section'  => 'multipurpose_blog_typography',
		'settings' => 'multipurpose_blog_h3_color',
	)));

	//This is H3 FontFamily picker setting
	$wp_customize->add_setting('multipurpose_blog_h3_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'multipurpose_blog_sanitize_choices',
	));
	$wp_customize->add_control(
	'multipurpose_blog_h3_font_family', array(
		'section' => 'multipurpose_blog_typography',
		'label'   => __('H3 Fonts', 'multipurpose-blog'),
		'type'    => 'select',
		'choices' => $multipurpose_blog_font_array,
	));

	//This is H3 FontSize setting
	$wp_customize->add_setting('multipurpose_blog_h3_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('multipurpose_blog_h3_font_size', array(
		'label'   => __('H3 Font Size', 'multipurpose-blog'),
		'section' => 'multipurpose_blog_typography',
		'setting' => 'multipurpose_blog_h3_font_size',
		'type'    => 'text',
	));

	// This is H4 Color picker setting
	$wp_customize->add_setting('multipurpose_blog_h4_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'multipurpose_blog_h4_color', array(
		'label'    => __('H4 Color', 'multipurpose-blog'),
		'section'  => 'multipurpose_blog_typography',
		'settings' => 'multipurpose_blog_h4_color',
	)));

	//This is H4 FontFamily picker setting
	$wp_customize->add_setting('multipurpose_blog_h4_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'multipurpose_blog_sanitize_choices',
	));
	$wp_customize->add_control('multipurpose_blog_h4_font_family', array(
		'section' => 'multipurpose_blog_typography',
		'label'   => __('H4 Fonts', 'multipurpose-blog'),
		'type'    => 'select',
		'choices' => $multipurpose_blog_font_array,
	));

	//This is H4 FontSize setting
	$wp_customize->add_setting('multipurpose_blog_h4_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('multipurpose_blog_h4_font_size', array(
		'label'   => __('H4 Font Size', 'multipurpose-blog'),
		'section' => 'multipurpose_blog_typography',
		'setting' => 'multipurpose_blog_h4_font_size',
		'type'    => 'text',
	));

	// This is H5 Color picker setting
	$wp_customize->add_setting('multipurpose_blog_h5_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'multipurpose_blog_h5_color', array(
		'label'    => __('H5 Color', 'multipurpose-blog'),
		'section'  => 'multipurpose_blog_typography',
		'settings' => 'multipurpose_blog_h5_color',
	)));

	//This is H5 FontFamily picker setting
	$wp_customize->add_setting('multipurpose_blog_h5_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'multipurpose_blog_sanitize_choices',
	));
	$wp_customize->add_control('multipurpose_blog_h5_font_family', array(
		'section' => 'multipurpose_blog_typography',
		'label'   => __('H5 Fonts', 'multipurpose-blog'),
		'type'    => 'select',
		'choices' => $multipurpose_blog_font_array,
	));

	//This is H5 FontSize setting
	$wp_customize->add_setting('multipurpose_blog_h5_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('multipurpose_blog_h5_font_size', array(
		'label'   => __('H5 Font Size', 'multipurpose-blog'),
		'section' => 'multipurpose_blog_typography',
		'setting' => 'multipurpose_blog_h5_font_size',
		'type'    => 'text',
	));

	// This is H6 Color picker setting
	$wp_customize->add_setting('multipurpose_blog_h6_color', array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_hex_color',
		));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'multipurpose_blog_h6_color', array(
		'label'    => __('H6 Color', 'multipurpose-blog'),
		'section'  => 'multipurpose_blog_typography',
		'settings' => 'multipurpose_blog_h6_color',
	)));

	//This is H6 FontFamily picker setting
	$wp_customize->add_setting('multipurpose_blog_h6_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'multipurpose_blog_sanitize_choices',
	));
	$wp_customize->add_control('multipurpose_blog_h6_font_family', array(
		'section' => 'multipurpose_blog_typography',
		'label'   => __('H6 Fonts', 'multipurpose-blog'),
		'type'    => 'select',
		'choices' => $multipurpose_blog_font_array,
	));

	//This is H6 FontSize setting
	$wp_customize->add_setting('multipurpose_blog_h6_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('multipurpose_blog_h6_font_size', array(
		'label'   => __('H6 Font Size', 'multipurpose-blog'),
		'section' => 'multipurpose_blog_typography',
		'setting' => 'multipurpose_blog_h6_font_size',
		'type'    => 'text',
	));

	//layout setting
	$wp_customize->add_section( 'multipurpose_blog_left_right', array(
    	'title'      => __( 'Layout Settings', 'multipurpose-blog' ),
		'panel' => 'multipurpose_blog_panel_id'
	) );

	$wp_customize->add_setting('multipurpose_blog_preloader',array(
       'default' => true,
       'sanitize_callback'	=> 'multipurpose_blog_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_blog_preloader',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Preloader','multipurpose-blog'),
       'section' => 'multipurpose_blog_left_right'
    ));

    $wp_customize->add_setting('multipurpose_blog_preloader_type',array(
        'default' => 'First Preloader Type',
        'sanitize_callback' => 'multipurpose_blog_sanitize_choices'
	));
	$wp_customize->add_control('multipurpose_blog_preloader_type',array(
        'type' => 'radio',
        'label' => __('Preloader Types','multipurpose-blog'),
        'section' => 'multipurpose_blog_left_right',
        'choices' => array(
            'First Preloader Type' => __('First Preloader Type','multipurpose-blog'),
            'Second Preloader Type' => __('Second Preloader Type','multipurpose-blog'),
        ),
	) );

	$wp_customize->add_setting('multipurpose_blog_preloader_bg_color_option', array(
		'default'           => '#000',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'multipurpose_blog_preloader_bg_color_option', array(
		'label'    => __('Preloader Background Color', 'multipurpose-blog'),
		'section'  => 'multipurpose_blog_left_right',
	)));

	$wp_customize->add_setting('multipurpose_blog_preloader_icon_color_option', array(
		'default'           => '#fff',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'multipurpose_blog_preloader_icon_color_option', array(
		'label'    => __('Preloader Icon Color', 'multipurpose-blog'),
		'section'  => 'multipurpose_blog_left_right',
	)));

	//Sticky Header
	$wp_customize->add_setting( 'multipurpose_blog_sticky_header',array(
		'default' => false,
      	'sanitize_callback'	=> 'multipurpose_blog_sanitize_checkbox'
    ) );
    $wp_customize->add_control('multipurpose_blog_sticky_header',array(
    	'type' => 'checkbox',
        'label' => __( 'Enable / Disable Sticky Header','multipurpose-blog' ),
        'section' => 'multipurpose_blog_left_right'
    ));

	$wp_customize->add_setting('multipurpose_blog_menu_font_size_option',array(
		'default'=> 12,
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new multipurpose_blog_Custom_Control( $wp_customize,'multipurpose_blog_menu_font_size_option',array(
		'label'	=> __('Menu Font Size ','multipurpose-blog'),
		'section'=> 'multipurpose_blog_left_right',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
	)));

	$wp_customize->add_setting('multipurpose_blog_width_layout_options',array(
        'default' => 'Default',
        'sanitize_callback' => 'multipurpose_blog_sanitize_choices'
	));
	$wp_customize->add_control('multipurpose_blog_width_layout_options',array(
        'type' => 'radio',
        'label' => __('Container Box','multipurpose-blog'),
        'description' => __('Here you can change the Width layout. ','multipurpose-blog'),
        'section' => 'multipurpose_blog_left_right',
        'choices' => array(
            'Default' => __('Default','multipurpose-blog'),
            'Container Layout' => __('Container Layout','multipurpose-blog'),
            'Box Layout' => __('Box Layout','multipurpose-blog'),
        ),
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('multipurpose_blog_theme_options',array(
        'default' => 'Right Sidebar',
        'sanitize_callback' => 'multipurpose_blog_sanitize_choices'	        
    ) );
	$wp_customize->add_control('multipurpose_blog_theme_options',array(
        'type' => 'radio',
        'label' => __('Do you want this section','multipurpose-blog'),
        'section' => 'multipurpose_blog_left_right',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','multipurpose-blog'),
            'Right Sidebar' => __('Right Sidebar','multipurpose-blog'),
            'One Column' => __('One Column','multipurpose-blog'),
            'Three Columns' => __('Three Columns','multipurpose-blog'),
            'Four Columns' => __('Four Columns','multipurpose-blog'),
            'Grid Layout' => __('Grid Layout','multipurpose-blog')
        ),
	) );

	//Global Color
	$wp_customize->add_section('multipurpose_blog_global_color', array(
		'title'    => __('Theme Color Option', 'multipurpose-blog'),
		'panel'    => 'multipurpose_blog_panel_id',
	));

	$wp_customize->add_setting('multipurpose_blog_hi_first_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'multipurpose_blog_hi_first_color', array(
		'label'    => __('Highlight Color', 'multipurpose-blog'),
		'section'  => 'multipurpose_blog_global_color',
		'settings' => 'multipurpose_blog_hi_first_color',
	)));

	//Blog Post Settings
	$wp_customize->add_section('multipurpose_blog_post_settings', array(
		'title'    => __('Post General Settings', 'multipurpose-blog'),
		'panel'    => 'multipurpose_blog_panel_id',
	));

	$wp_customize->add_setting('multipurpose_blog_post_layouts',array(
        'default' => 'Layout 1',
        'sanitize_callback' => 'multipurpose_blog_sanitize_choices'
	));
	$wp_customize->add_control(new Multipurpose_Blog_Image_Radio_Control($wp_customize, 'multipurpose_blog_post_layouts', array(
        'type' => 'select',
        'label' => __('Post Layouts','multipurpose-blog'),
        'description' => __('Here you can change the 3 different layouts of post.','multipurpose-blog'),
        'section' => 'multipurpose_blog_post_settings',
        'choices' => array(
            'Layout 1' => get_theme_file_uri().'/images/layout1.png',
            'Layout 2' => get_theme_file_uri().'/images/layout2.png',
            'Layout 3' => get_theme_file_uri().'/images/layout3.png',
    ))));

	$wp_customize->add_setting('multipurpose_blog_metafields_date',array(
       'default' => true,
       'sanitize_callback'	=> 'multipurpose_blog_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_blog_metafields_date',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Date ','multipurpose-blog'),
       'section' => 'multipurpose_blog_post_settings'
    ));

    $wp_customize->add_setting('multipurpose_blog_post_date_icon',array(
		'default'	=> 'far fa-calendar-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Multipurpose_Blog_Icon_Changer(
        $wp_customize,'multipurpose_blog_post_date_icon',array(
		'label'	=> __('Post Date Icon','multipurpose-blog'),
		'transport' => 'refresh',
		'section'	=> 'multipurpose_blog_post_settings',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('multipurpose_blog_metafields_author',array(
       'default' => true,
       'sanitize_callback'	=> 'multipurpose_blog_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_blog_metafields_author',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Author','multipurpose-blog'),
       'section' => 'multipurpose_blog_post_settings'
    ));

    $wp_customize->add_setting('multipurpose_blog_post_author_icon',array(
		'default'	=> 'fas fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Multipurpose_Blog_Icon_Changer(
        $wp_customize,'multipurpose_blog_post_author_icon',array(
		'label'	=> __('Post Author Icon','multipurpose-blog'),
		'transport' => 'refresh',
		'section'	=> 'multipurpose_blog_post_settings',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('multipurpose_blog_metafields_comment',array(
       'default' => true,
       'sanitize_callback'	=> 'multipurpose_blog_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_blog_metafields_comment',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Comments','multipurpose-blog'),
       'section' => 'multipurpose_blog_post_settings'
    ));

    $wp_customize->add_setting('multipurpose_blog_post_comment_icon',array(
		'default'	=> 'fas fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Multipurpose_Blog_Icon_Changer(
        $wp_customize,'multipurpose_blog_post_comment_icon',array(
		'label'	=> __('Post Comment Icon','multipurpose-blog'),
		'transport' => 'refresh',
		'section'	=> 'multipurpose_blog_post_settings',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('multipurpose_blog_category_icon',array(
		'default'	=> 'fas fa-folder-open',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Multipurpose_Blog_Icon_Changer(
        $wp_customize,'multipurpose_blog_category_icon',array(
		'label'	=> __('Category Icon','multipurpose-blog'),
		'transport' => 'refresh',
		'section'	=> 'multipurpose_blog_post_settings',
		'type'		=> 'icon'
	)));

    //Post excerpt
	$wp_customize->add_setting( 'multipurpose_blog_post_excerpt_number', array(
		'default'              => 30,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'absint',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'multipurpose_blog_post_excerpt_number', array(
		'label'       => esc_html__( 'Blog Post Content Limit','multipurpose-blog' ),
		'section'     => 'multipurpose_blog_post_settings',
		'type'        => 'number',
		'settings'    => 'multipurpose_blog_post_excerpt_number',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'multipurpose_blog_post_discription_suffix', array(
		'default'   => __('[...]','multipurpose-blog'),
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'multipurpose_blog_post_discription_suffix', array(
		'label'       => esc_html__( 'Post Excerpt Suffix','multipurpose-blog' ),
		'section'     => 'multipurpose_blog_post_settings',
		'type'        => 'text',
		'settings'    => 'multipurpose_blog_post_discription_suffix',
	) );

	//Single Post Settings
	$wp_customize->add_section('multipurpose_blog_single_post_settings', array(
		'title'    => __('Single Post Settings', 'multipurpose-blog'),
		'panel'    => 'multipurpose_blog_panel_id',
	));

    $wp_customize->add_setting('multipurpose_blog_single_post_featured_image',array(
       'default' => true,
       'sanitize_callback'	=> 'multipurpose_blog_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_blog_single_post_featured_image',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Featured image','multipurpose-blog'),
       'section' => 'multipurpose_blog_single_post_settings',
    ));

	$wp_customize->add_setting('multipurpose_blog_single_post_tags',array(
       'default' => true,
       'sanitize_callback'	=> 'multipurpose_blog_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_blog_single_post_tags',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Tags','multipurpose-blog'),
       'section' => 'multipurpose_blog_single_post_settings'
    ));

    $wp_customize->add_setting( 'multipurpose_blog_single_post_meta_seperator', array(
		'default'   => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'multipurpose_blog_single_post_meta_seperator', array(
		'label'       => esc_html__( 'Single Post Meta Box Seperator','multipurpose-blog' ),
		'section'     => 'multipurpose_blog_single_post_settings',
		'description' => __('Here you can add the seperator for meta box. e.g. "|",  ",", "/", etc. ','multipurpose-blog'),
		'type'        => 'text',
		'settings'    => 'multipurpose_blog_single_post_meta_seperator',
	) );

	$wp_customize->add_setting( 'multipurpose_blog_comment_form_width',array(
		'default' => 100,
		'transport' => 'refresh',
		'sanitize_callback' => 'multipurpose_blog_sanitize_integer'
	));
	$wp_customize->add_control( new multipurpose_blog_Custom_Control( $wp_customize, 'multipurpose_blog_comment_form_width',	array(
		'label' => esc_html__( 'Comment Form Width','multipurpose-blog' ),
		'section' => 'multipurpose_blog_single_post_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 100,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting('multipurpose_blog_title_comment_form',array(
       'default' => __('Leave a Reply','multipurpose-blog'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('multipurpose_blog_title_comment_form',array(
       'type' => 'text',
       'label' => __('Comment Form Heading Text','multipurpose-blog'),
       'section' => 'multipurpose_blog_single_post_settings'
    ));

    $wp_customize->add_setting('multipurpose_blog_comment_form_button_content',array(
       'default' => __('Post Comment','multipurpose-blog'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('multipurpose_blog_comment_form_button_content',array(
       'type' => 'text',
       'label' => __('Comment Form Button Text','multipurpose-blog'),
       'section' => 'multipurpose_blog_single_post_settings'
    ));

	$wp_customize->add_setting('multipurpose_blog_enable_single_post_pagination',array(
       'default' => true,
       'sanitize_callback'	=> 'multipurpose_blog_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_blog_enable_single_post_pagination',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post Pagination','multipurpose-blog'),
       'section' => 'multipurpose_blog_single_post_settings'
    ));

    //Topbar section
	$wp_customize->add_section('multipurpose_blog_topbar',array(
		'title'	=> __('Topbar Section','multipurpose-blog'),
		'description'	=> __('Add Header Content here','multipurpose-blog'),
		'panel' => 'multipurpose_blog_panel_id',
	));

	$wp_customize->add_setting('multipurpose_blog_phone_icon',array(
		'default'	=> 'fa fa-phone',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Multipurpose_Blog_Icon_Changer(
        $wp_customize,'multipurpose_blog_phone_icon',array(
		'label'	=> __('Phone Icon','multipurpose-blog'),
		'transport' => 'refresh',
		'section'	=> 'multipurpose_blog_topbar',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('multipurpose_blog_contact',array(
		'default'	=> '',
		'sanitize_callback'	=> 'multipurpose_blog_sanitize_phone_number'
	));	
	$wp_customize->add_control('multipurpose_blog_contact',array(
		'label'	=> __('Add Phone Number','multipurpose-blog'),
		'section'	=> 'multipurpose_blog_topbar',
		'setting'	=> 'multipurpose_blog_contact',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('multipurpose_blog_email_icon',array(
		'default'	=> 'fa fa-envelope',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Multipurpose_Blog_Icon_Changer(
        $wp_customize,'multipurpose_blog_email_icon',array(
		'label'	=> __('Email Icon','multipurpose-blog'),
		'transport' => 'refresh',
		'section'	=> 'multipurpose_blog_topbar',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('multipurpose_blog_email',array(
		'default'	=> '',
		'sanitize_callback'	=> 'multipurpose_blog_sanitize_email'
	));	
	$wp_customize->add_control('multipurpose_blog_email',array(
		'label'	=> __('Add Email','multipurpose-blog'),
		'section'	=> 'multipurpose_blog_topbar',
		'setting'	=> 'multipurpose_blog_email',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('multipurpose_blog_responsive_menu_open_icon',array(
		'default'	=> 'fas fa-bars',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Multipurpose_Blog_Icon_Changer(
        $wp_customize,'multipurpose_blog_responsive_menu_open_icon',array(
		'label'	=> __('Responsive Open Menu Icon','multipurpose-blog'),
		'transport' => 'refresh',
		'section'	=> 'multipurpose_blog_topbar',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('multipurpose_blog_responsive_menu_close_icon',array(
		'default'	=> 'fas fa-times',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Multipurpose_Blog_Icon_Changer(
        $wp_customize,'multipurpose_blog_responsive_menu_close_icon',array(
		'label'	=> __('Responsive Close Menu Icon','multipurpose-blog'),
		'transport' => 'refresh',
		'section'	=> 'multipurpose_blog_topbar',
		'type'		=> 'icon'
	)));

	//Social Icons(topbar)
	$wp_customize->add_section('multipurpose_blog_topbar_header',array(
		'title'	=> __('Social Icon Section','multipurpose-blog'),
		'description'	=> __('Add Social Link here','multipurpose-blog'),
		'panel' => 'multipurpose_blog_panel_id',
	));

	$wp_customize->add_setting('multipurpose_blog_facebook_icon',array(
		'default'	=> 'fab fa-facebook-f',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Multipurpose_Blog_Icon_Changer(
        $wp_customize,'multipurpose_blog_facebook_icon',array(
		'label'	=> __('Facebook Icon','multipurpose-blog'),
		'transport' => 'refresh',
		'section'	=> 'multipurpose_blog_topbar_header',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('multipurpose_blog_cont_facebook',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('multipurpose_blog_cont_facebook',array(
		'label'	=> __('Add Facebook link','multipurpose-blog'),
		'section'	=> 'multipurpose_blog_topbar_header',
		'setting'	=> 'multipurpose_blog_cont_facebook',
		'type'		=> 'url'
	));

	$wp_customize->add_setting('multipurpose_blog_twitter_icon',array(
		'default'	=> 'fab fa-twitter',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Multipurpose_Blog_Icon_Changer(
        $wp_customize,'multipurpose_blog_twitter_icon',array(
		'label'	=> __('Twitter Icon','multipurpose-blog'),
		'transport' => 'refresh',
		'section'	=> 'multipurpose_blog_topbar_header',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('multipurpose_blog_cont_twitter',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('multipurpose_blog_cont_twitter',array(
		'label'	=> __('Add Twitter link','multipurpose-blog'),
		'section'	=> 'multipurpose_blog_topbar_header',
		'setting'	=> 'multipurpose_blog_cont_twitter',
		'type'		=> 'url'
	));

	$wp_customize->add_setting('multipurpose_blog_pinterest_icon',array(
		'default'	=> 'fab fa-pinterest',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Multipurpose_Blog_Icon_Changer(
        $wp_customize,'multipurpose_blog_pinterest_icon',array(
		'label'	=> __('Pinterest Icon','multipurpose-blog'),
		'transport' => 'refresh',
		'section'	=> 'multipurpose_blog_topbar_header',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('multipurpose_blog_pinterest',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('multipurpose_blog_pinterest',array(
		'label'	=> __('Add Pintrest link','multipurpose-blog'),
		'section'	=> 'multipurpose_blog_topbar_header',
		'setting'	=> 'multipurpose_blog_pinterest',
		'type'		=> 'url'
	));

	$wp_customize->add_setting('multipurpose_blog_tumblr_icon',array(
		'default'	=> 'fab fa-tumblr',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Multipurpose_Blog_Icon_Changer(
        $wp_customize,'multipurpose_blog_tumblr_icon',array(
		'label'	=> __('Tumblr Icon','multipurpose-blog'),
		'transport' => 'refresh',
		'section'	=> 'multipurpose_blog_topbar_header',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('multipurpose_blog_tumblr',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('multipurpose_blog_tumblr',array(
		'label'	=> __('Add Tumblr link','multipurpose-blog'),
		'section'	=> 'multipurpose_blog_topbar_header',
		'setting'	=> 'multipurpose_blog_tumblr',
		'type'		=> 'url'
	));

	//home page slider
	$wp_customize->add_section( 'multipurpose_blog_slidersettings' , array(
    	'title'      => __( 'Slider Settings', 'multipurpose-blog' ),
		'priority'   => null,
		'panel' => 'multipurpose_blog_panel_id'
	) );

	$wp_customize->add_setting('multipurpose_blog_slider_hide',array(
       'default' => false,
       'sanitize_callback'	=> 'multipurpose_blog_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_blog_slider_hide',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide slider','multipurpose-blog'),
       'section' => 'multipurpose_blog_slidersettings',
    ));

    $wp_customize->add_setting('multipurpose_blog_show_slider_button',array(
       'default' => true,
       'sanitize_callback'	=> 'multipurpose_blog_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_blog_show_slider_button',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Slider Button','multipurpose-blog'),
       'section' => 'multipurpose_blog_slidersettings'
    ));

	for ( $count = 1; $count <= 4; $count++ ) {

		// Add color scheme setting and control.
		$wp_customize->add_setting( 'multipurpose_blog_slidersettings_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'multipurpose_blog_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'multipurpose_blog_slidersettings_page' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'multipurpose-blog' ),
			'section'  => 'multipurpose_blog_slidersettings',
			'type'     => 'dropdown-pages'
		) );
	}

	$wp_customize->add_setting('multipurpose_blog_slider_previous_icon',array(
		'default'	=> 'fas fa-angle-left',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Multipurpose_Blog_Icon_Changer($wp_customize,'multipurpose_blog_slider_previous_icon',array(
		'label'	=> __('Slider Previous Icon','multipurpose-blog'),
		'transport' => 'refresh',
		'section'	=> 'multipurpose_blog_slidersettings',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('multipurpose_blog_slider_next_icon',array(
		'default'	=> 'fas fa-angle-right',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Multipurpose_Blog_Icon_Changer($wp_customize,'multipurpose_blog_slider_next_icon',array(
		'label'	=> __('Slider Next Icon','multipurpose-blog'),
		'transport' => 'refresh',
		'section'	=> 'multipurpose_blog_slidersettings',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('multipurpose_blog_slider_button_text',array(
		'default'	=> __('CONTINUE READING','multipurpose-blog'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('multipurpose_blog_slider_button_text',array(
		'label'	=> __('Add Button Text','multipurpose-blog'),
		'section'	=> 'multipurpose_blog_slidersettings',
		'type'		=> 'text'
	));

	//content layout
    $wp_customize->add_setting('multipurpose_blog_slider_content_layout',array(
    'default' => 'Center',
        'sanitize_callback' => 'multipurpose_blog_sanitize_choices'
	));
	$wp_customize->add_control('multipurpose_blog_slider_content_layout',array(
        'type' => 'radio',
        'label' => __('Slider Content Layout','multipurpose-blog'),
        'section' => 'multipurpose_blog_slidersettings',
        'choices' => array(
            'Center' => __('Center','multipurpose-blog'),
            'Left' => __('Left','multipurpose-blog'),
            'Right' => __('Right','multipurpose-blog'),
        ),
	) );

	$wp_customize->add_setting('multipurpose_blog_option_slider_height',array(
		'default'=> __('550','multipurpose-blog'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('multipurpose_blog_option_slider_height',array(
		'label'	=> __('Slider Height','multipurpose-blog'),
		'section'=> 'multipurpose_blog_slidersettings',
		'type'=> 'text'
	));

	//Slider excerpt
	$wp_customize->add_setting( 'multipurpose_blog_slider_excerpt_number', array(
		'default'              => 30,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'absint',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'multipurpose_blog_slider_excerpt_number', array(
		'label'       => esc_html__( 'Slider Content Limit','multipurpose-blog' ),
		'section'     => 'multipurpose_blog_slidersettings',
		'type'        => 'number',
		'settings'    => 'multipurpose_blog_slider_excerpt_number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	//Opacity
	$wp_customize->add_setting('multipurpose_blog_slider_opacity',array(
      'default'              => 0.7,
      'sanitize_callback' => 'multipurpose_blog_sanitize_choices'
	));
	$wp_customize->add_control( 'multipurpose_blog_slider_opacity', array(
	'label'       => esc_html__( 'Slider Image Opacity','multipurpose-blog' ),
	'section'     => 'multipurpose_blog_slidersettings',
	'type'        => 'select',
	'settings'    => 'multipurpose_blog_slider_opacity',
	'choices' => array(
		'0' =>  esc_attr('0','multipurpose-blog'),
		'0.1' =>  esc_attr('0.1','multipurpose-blog'),
		'0.2' =>  esc_attr('0.2','multipurpose-blog'),
		'0.3' =>  esc_attr('0.3','multipurpose-blog'),
		'0.4' =>  esc_attr('0.4','multipurpose-blog'),
		'0.5' =>  esc_attr('0.5','multipurpose-blog'),
		'0.6' =>  esc_attr('0.6','multipurpose-blog'),
		'0.7' =>  esc_attr('0.7','multipurpose-blog'),
		'0.8' =>  esc_attr('0.8','multipurpose-blog'),
		'0.9' =>  esc_attr('0.9','multipurpose-blog')
	),
	));

	//photography section
  	$wp_customize->add_section('multipurpose_blog_photo_section',array(
	    'title' => __('Photography Section','multipurpose-blog'),
	    'description' => '',
	    'priority'  => null,
	    'panel' => 'multipurpose_blog_panel_id',
	));  
 
	$categories = get_categories();
	$cats = array();
	$i = 0;
	$cat_post[]= 'select';
	foreach($categories as $category){
	if($i==0){
	$default = $category->slug;
	$i++;
	}
	$cat_post[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('multipurpose_blog_photo_setting',array(
	    'default' => 'select',
	    'sanitize_callback' => 'multipurpose_blog_sanitize_choices',
  	));
  	$wp_customize->add_control('multipurpose_blog_photo_setting',array(
	    'type'    => 'select',
	    'choices' => $cat_post,
	    'label' => __('Select Category to display Latest Post','multipurpose-blog'),
	    'section' => 'multipurpose_blog_photo_section',
	));

	//Footer section
  	$wp_customize->add_section('multipurpose_blog_footer',array(
	    'title' => __('Footer Section','multipurpose-blog'),
	    'priority'  => null,
	    'panel' => 'multipurpose_blog_panel_id',
	));  

	$wp_customize->add_setting('multipurpose_blog_footer_bg_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'multipurpose_blog_footer_bg_color', array(
		'label'    => __('Footer Background Color', 'multipurpose-blog'),
		'section'  => 'multipurpose_blog_footer',
	)));

	$wp_customize->add_setting('multipurpose_blog_footer_bg_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'multipurpose_blog_footer_bg_image',array(
        'label' => __('Footer Background Image','multipurpose-blog'),
        'section' => 'multipurpose_blog_footer'
	)));

	$wp_customize->add_setting('footer_widget_areas',array(
        'default'           => 4,
        'sanitize_callback' => 'multipurpose_blog_sanitize_choices',
    ));
    $wp_customize->add_control('footer_widget_areas',array(
        'type'        => 'radio',
        'label'       => __('Footer widget area', 'multipurpose-blog'),
        'section'     => 'multipurpose_blog_footer',
        'description' => __('Select the number of widget areas you want in the footer. After that, go to Appearance > Widgets and add your widgets.', 'multipurpose-blog'),
        'choices' => array(
            '1'     => __('One', 'multipurpose-blog'),
            '2'     => __('Two', 'multipurpose-blog'),
            '3'     => __('Three', 'multipurpose-blog'),
            '4'     => __('Four', 'multipurpose-blog')
        ),
    ));

    $wp_customize->add_setting('multipurpose_blog_hide_show_scroll',array(
        'default' => true,
        'sanitize_callback'	=> 'multipurpose_blog_sanitize_checkbox'
	));
	$wp_customize->add_control('multipurpose_blog_hide_show_scroll',array(
     	'type' => 'checkbox',
      	'label' => __('Enable / Disable Back To Top','multipurpose-blog'),
      	'section' => 'multipurpose_blog_footer',
	));

	$wp_customize->add_setting('multipurpose_blog_back_to_top_icon',array(
		'default'	=> 'fas fa-long-arrow-alt-up',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Multipurpose_Blog_Icon_Changer(
        $wp_customize,'multipurpose_blog_back_to_top_icon',array(
		'label'	=> __('Back to Top Icon','multipurpose-blog'),
		'transport' => 'refresh',
		'section'	=> 'multipurpose_blog_footer',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('multipurpose_blog_scroll_icon_font_size',array(
		'default'=> 22,
		'transport' => 'refresh',
		'sanitize_callback' => 'multipurpose_blog_sanitize_integer'
	));
	$wp_customize->add_control(new multipurpose_blog_Custom_Control( $wp_customize, 'multipurpose_blog_scroll_icon_font_size',array(
		'label'	=> __('Back To Top Icon Font Size','multipurpose-blog'),
		'section'=> 'multipurpose_blog_footer',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
	)));

	$wp_customize->add_setting('multipurpose_blog_footer_options',array(
        'default' => 'Right align',
        'sanitize_callback' => 'multipurpose_blog_sanitize_choices'
	));
	$wp_customize->add_control('multipurpose_blog_footer_options',array(
        'type' => 'radio',
        'label' => __('Back To Top','multipurpose-blog'),
        'section' => 'multipurpose_blog_footer',
        'choices' => array(
            'Left align' => __('Left align','multipurpose-blog'),
            'Right align' => __('Right align','multipurpose-blog'),
            'Center align' => __('Center align','multipurpose-blog'),
        ),
	) );

	$wp_customize->add_setting( 'multipurpose_blog_top_bottom_scroll_padding',array(
		'default' => 12,
		'transport' => 'refresh',
		'sanitize_callback' => 'multipurpose_blog_sanitize_integer'
	));
	$wp_customize->add_control( new multipurpose_blog_Custom_Control( $wp_customize, 'multipurpose_blog_top_bottom_scroll_padding',	array(
		'label' => esc_html__( 'Top Bottom Scroll Padding (px)','multipurpose-blog' ),
		'section' => 'multipurpose_blog_footer',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting( 'multipurpose_blog_left_right_scroll_padding',array(
		'default' => 17,
		'transport' => 'refresh',
		'sanitize_callback' => 'multipurpose_blog_sanitize_integer'
	));
	$wp_customize->add_control( new multipurpose_blog_Custom_Control( $wp_customize, 'multipurpose_blog_left_right_scroll_padding',	array(
		'label' => esc_html__( 'Left Right Scroll Padding (px)','multipurpose-blog' ),
		'section' => 'multipurpose_blog_footer',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting( 'multipurpose_blog_back_to_top_border_radius',array(
		'default' => 50,
		'transport' => 'postMessage',
		'sanitize_callback' => 'multipurpose_blog_sanitize_integer'
	));
	$wp_customize->add_control( new multipurpose_blog_Custom_Control( $wp_customize, 'multipurpose_blog_back_to_top_border_radius', array(
		'label' => esc_html__( 'Back to Top Border Radius (px)','multipurpose-blog' ),
		'section' => 'multipurpose_blog_footer',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

  	$wp_customize->add_setting('multipurpose_blog_footer_copy',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('multipurpose_blog_footer_copy',array(
		'label'	=> __('Footer Text','multipurpose-blog'),
		'section'	=> 'multipurpose_blog_footer',
		'setting'	=> 'multipurpose_blog_footer_copy',
		'description' =>  __('Add some text for footer like copyright etc.','multipurpose-blog'),
		'type'		=> 'text'
	));

	//Responsive Media Settings
	$wp_customize->add_section('multipurpose_blog_responsive_media',array(
		'title'	=> __('Responsive Media','multipurpose-blog'),
		'panel' => 'multipurpose_blog_panel_id',
	));

    $wp_customize->add_setting('multipurpose_blog_display_slider',array(
       'default' => false,
       'sanitize_callback'	=> 'multipurpose_blog_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_blog_display_slider',array(
       'type' => 'checkbox',
       'label' => __('Display Slider','multipurpose-blog'),
       'section' => 'multipurpose_blog_responsive_media'
    ));

    $wp_customize->add_setting('multipurpose_blog_display_slider_button',array(
       'default' => true,
       'sanitize_callback'	=> 'multipurpose_blog_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_blog_display_slider_button',array(
       'type' => 'checkbox',
       'label' => __('Display Slider Button','multipurpose-blog'),
       'section' => 'multipurpose_blog_responsive_media'
    ));

	$wp_customize->add_setting('multipurpose_blog_display_sidebar',array(
       'default' => true,
       'sanitize_callback'	=> 'multipurpose_blog_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_blog_display_sidebar',array(
       'type' => 'checkbox',
       'label' => __('Display Sidebar','multipurpose-blog'),
       'section' => 'multipurpose_blog_responsive_media'
    ));

    $wp_customize->add_setting('multipurpose_blog_display_scrolltop',array(
       'default' => true,
       'sanitize_callback'	=> 'multipurpose_blog_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_blog_display_scrolltop',array(
       'type' => 'checkbox',
       'label' => __('Display Back To Top','multipurpose-blog'),
       'section' => 'multipurpose_blog_responsive_media'
    ));

    $wp_customize->add_setting('multipurpose_blog_display_fixed_header',array(
       'default' => false,
       'sanitize_callback'	=> 'multipurpose_blog_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_blog_display_fixed_header',array(
       'type' => 'checkbox',
       'label' => __('Display Sticky Header','multipurpose-blog'),
       'section' => 'multipurpose_blog_responsive_media'
    ));

    $wp_customize->add_setting('multipurpose_blog_display_preloader',array(
       'default' => true,
       'sanitize_callback'	=> 'multipurpose_blog_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_blog_display_preloader',array(
       'type' => 'checkbox',
       'label' => __('Display Preloader','multipurpose-blog'),
       'section' => 'multipurpose_blog_responsive_media'
    ));

	//404 Page Setting
	$wp_customize->add_section('multipurpose_blog_page_not_found',array(
		'title'	=> __('404 Page Not Found / No Result','multipurpose-blog'),
		'panel' => 'multipurpose_blog_panel_id',
	));	

	$wp_customize->add_setting('multipurpose_blog_page_not_found_heading',array(
		'default'=> __('404 Not Found','multipurpose-blog'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('multipurpose_blog_page_not_found_heading',array(
		'label'	=> __('404 Heading','multipurpose-blog'),
		'section'=> 'multipurpose_blog_page_not_found',
		'type'=> 'text'
	));

	$wp_customize->add_setting('multipurpose_blog_page_not_found_text',array(
		'default'=> __('Looks like you have taken a wrong turn. Dont worry it happens to the best of us.','multipurpose-blog'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('multipurpose_blog_page_not_found_text',array(
		'label'	=> __('404 Content','multipurpose-blog'),
		'section'=> 'multipurpose_blog_page_not_found',
		'type'=> 'text'
	));

	$wp_customize->add_setting('multipurpose_blog_page_not_found_button',array(
		'default'=>  __('Back to Home Page','multipurpose-blog'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('multipurpose_blog_page_not_found_button',array(
		'label'	=> __('404 Button','multipurpose-blog'),
		'section'=> 'multipurpose_blog_page_not_found',
		'type'=> 'text'
	));

	$wp_customize->add_setting('multipurpose_blog_no_search_result_heading',array(
		'default'=> __('Nothing Found','multipurpose-blog'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('multipurpose_blog_no_search_result_heading',array(
		'label'	=> __('No Search Results Heading','multipurpose-blog'),
		'description'=>__('The search page heading display when no results are found.','multipurpose-blog'),
		'section'=> 'multipurpose_blog_page_not_found',
		'type'=> 'text'
	));

	$wp_customize->add_setting('multipurpose_blog_no_search_result_text',array(
		'default'=> __('Sorry, but nothing matched your search terms. Please try again with some different keywords.','multipurpose-blog'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('multipurpose_blog_no_search_result_text',array(
		'label'	=> __('No Search Results Text','multipurpose-blog'),
		'description'=>__('The search page text display when no results are found.','multipurpose-blog'),
		'section'=> 'multipurpose_blog_page_not_found',
		'type'=> 'text'
	));

	//Woocommerce Section
	$wp_customize->add_section( 'multipurpose_blog_woocommerce_section' , array(
    	'title'      => __( 'Woocommerce Settings', 'multipurpose-blog' ),
    	'description'=>__('The below settings are apply on woocommerce pages.','multipurpose-blog'),
		'priority'   => null,
		'panel' => 'multipurpose_blog_panel_id'
	) );

	$wp_customize->add_setting( 'multipurpose_blog_per_columns' , array(
		'default'           => 3,
		'transport'         => 'refresh',
		'sanitize_callback' => 'multipurpose_blog_sanitize_choices',
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'multipurpose_blog_per_columns', array(
		'label'    => __( 'Product per columns', 'multipurpose-blog' ),
		'section'  => 'multipurpose_blog_woocommerce_section',
		'type'     => 'select',
		'choices'  => array(
			'2' => '2',
			'3' => '3',
			'4' => '4',
			'5' => '5',
		),
	) ) );

	$wp_customize->add_setting('multipurpose_blog_shop_per_page',array(
		'default'	=> 9,
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('multipurpose_blog_shop_per_page',array(
		'label'	=> __('Product per page','multipurpose-blog'),
		'section'	=> 'multipurpose_blog_woocommerce_section',
		'type'		=> 'number'
	));

	$wp_customize->add_setting('multipurpose_blog_shop_sidebar_enable',array(
       'default' => true,
       'sanitize_callback'	=> 'multipurpose_blog_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_blog_shop_sidebar_enable',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable shop page sidebar','multipurpose-blog'),
       'section' => 'multipurpose_blog_woocommerce_section',
    ));

    $wp_customize->add_setting('multipurpose_blog_product_page_sidebar_enable',array(
       'default' => true,
       'sanitize_callback'	=> 'multipurpose_blog_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_blog_product_page_sidebar_enable',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable product page sidebar','multipurpose-blog'),
       'section' => 'multipurpose_blog_woocommerce_section',
    ));

    $wp_customize->add_setting('multipurpose_blog_related_product_enable',array(
       'default' => true,
       'sanitize_callback'	=> 'multipurpose_blog_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_blog_related_product_enable',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Related product','multipurpose-blog'),
       'section' => 'multipurpose_blog_woocommerce_section',
    ));

    $wp_customize->add_setting( 'multipurpose_blog_woo_product_sale_border_radius',array(
		'default' => 100,
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control(new multipurpose_blog_Custom_Control( $wp_customize, 'multipurpose_blog_woo_product_sale_border_radius', array(
        'label'  => __('Woocommerce Product Sale Border Radius','multipurpose-blog'),
        'section'  => 'multipurpose_blog_woocommerce_section',
        'type'        => 'number',
        'input_attrs' => array(
        	'step'=> 1,
            'min' => 0,
            'max' => 50,
        )
    )));

    $wp_customize->add_setting('multipurpose_blog_woo_product_sale_top_bottom_padding',array(
		'default'=> 0,
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new multipurpose_blog_Custom_Control( $wp_customize, 'multipurpose_blog_woo_product_sale_top_bottom_padding',array(
		'label'	=> __('Woocommerce Product Sale Top Bottom Padding ','multipurpose-blog'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'multipurpose_blog_woocommerce_section',
		'type'=> 'number'
	)));

	$wp_customize->add_setting('multipurpose_blog_woo_product_sale_left_right_padding',array(
		'default'=> 0,
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new multipurpose_blog_Custom_Control( $wp_customize, 'multipurpose_blog_woo_product_sale_left_right_padding',array(
		'label'	=> __('Woocommerce Product Sale Left Right Padding','multipurpose-blog'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'multipurpose_blog_woocommerce_section',
		'type'=> 'number'
	)));

	$wp_customize->add_setting('multipurpose_blog_woo_product_sale_position',array(
        'default' =>'Right',
        'sanitize_callback' => 'multipurpose_blog_sanitize_choices'
	));
	$wp_customize->add_control('multipurpose_blog_woo_product_sale_position',array(
        'type' => 'select',
        'label' => __('Woocommerce Product Sale Position','multipurpose-blog'),
        'section' => 'multipurpose_blog_woocommerce_section',
        'choices' => array(
            'Right' => __('Right','multipurpose-blog'),
            'Left' => __('Left','multipurpose-blog'),
        ),
	));

	$wp_customize->add_setting( 'multipurpose_blog_woocommerce_button_padding_top',array(
		'default' => 15,
		'transport' => 'refresh',
		'sanitize_callback' => 'multipurpose_blog_sanitize_integer'
	));
	$wp_customize->add_control( new Multipurpose_Blog_Custom_Control( $wp_customize, 'multipurpose_blog_woocommerce_button_padding_top',	array(
		'label' => esc_html__( 'Button Top Bottom Padding (px)','multipurpose-blog' ),
		'section' => 'multipurpose_blog_woocommerce_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting( 'multipurpose_blog_woocommerce_button_padding_right',array(
		'default' => 15,
		'transport' => 'refresh',
		'sanitize_callback' => 'multipurpose_blog_sanitize_integer'
	));
	$wp_customize->add_control( new Multipurpose_Blog_Custom_Control( $wp_customize, 'multipurpose_blog_woocommerce_button_padding_right',	array(
		'label' => esc_html__( 'Button Right Left Padding (px)','multipurpose-blog' ),
		'section' => 'multipurpose_blog_woocommerce_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting( 'multipurpose_blog_woocommerce_button_border_radius',array(
		'default' => 30,
		'transport' => 'refresh',
		'sanitize_callback' => 'multipurpose_blog_sanitize_integer'
	));
	$wp_customize->add_control( new Multipurpose_Blog_Custom_Control( $wp_customize, 'multipurpose_blog_woocommerce_button_border_radius',array(
		'label' => esc_html__( 'Button Border Radius (px)','multipurpose-blog' ),
		'section' => 'multipurpose_blog_woocommerce_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

    $wp_customize->add_setting('multipurpose_blog_woocommerce_product_border_enable',array(
       'default' => true,
       'sanitize_callback'	=> 'multipurpose_blog_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_blog_woocommerce_product_border_enable',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable product border','multipurpose-blog'),
       'section' => 'multipurpose_blog_woocommerce_section',
    ));

	$wp_customize->add_setting( 'multipurpose_blog_woocommerce_product_padding_top',array(
		'default' => 10,
		'transport' => 'refresh',
		'sanitize_callback' => 'multipurpose_blog_sanitize_integer'
	));
	$wp_customize->add_control( new Multipurpose_Blog_Custom_Control( $wp_customize, 'multipurpose_blog_woocommerce_product_padding_top',	array(
		'label' => esc_html__( 'Product Top Bottom Padding (px)','multipurpose-blog' ),
		'section' => 'multipurpose_blog_woocommerce_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting( 'multipurpose_blog_woocommerce_product_padding_right',array(
		'default' => 10,
		'transport' => 'refresh',
		'sanitize_callback' => 'multipurpose_blog_sanitize_integer'
	));
	$wp_customize->add_control( new Multipurpose_Blog_Custom_Control( $wp_customize, 'multipurpose_blog_woocommerce_product_padding_right',	array(
		'label' => esc_html__( 'Product Right Left Padding (px)','multipurpose-blog' ),
		'section' => 'multipurpose_blog_woocommerce_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting( 'multipurpose_blog_woocommerce_product_border_radius',array(
		'default' => 3,
		'transport' => 'refresh',
		'sanitize_callback' => 'multipurpose_blog_sanitize_integer'
	));
	$wp_customize->add_control( new Multipurpose_Blog_Custom_Control( $wp_customize, 'multipurpose_blog_woocommerce_product_border_radius',array(
		'label' => esc_html__( 'Product Border Radius (px)','multipurpose-blog' ),
		'section' => 'multipurpose_blog_woocommerce_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting( 'multipurpose_blog_woocommerce_product_box_shadow',array(
		'default' => 5,
		'transport' => 'refresh',
		'sanitize_callback' => 'multipurpose_blog_sanitize_integer'
	));
	$wp_customize->add_control( new Multipurpose_Blog_Custom_Control( $wp_customize, 'multipurpose_blog_woocommerce_product_box_shadow',array(
		'label' => esc_html__( 'Product Box Shadow (px)','multipurpose-blog' ),
		'section' => 'multipurpose_blog_woocommerce_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));
}

add_action( 'customize_register', 'multipurpose_blog_customize_register' );

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
if ( ! class_exists ( 'multipurpose_blog_customize' ) ) {
	final class Multipurpose_Blog_Customize {

		/**
		 * Returns the instance.
		 *
		 * @since  1.0.0
		 * @access public
		 * @return object
		 */
		public static function get_instance() {

			static $instance = null;

			if ( is_null( $instance ) ) {
				$instance = new self;
				$instance->setup_actions();
			}

			return $instance;
		}

		/**
		 * Constructor method.
		 *
		 * @since  1.0.0
		 * @access private
		 * @return void
		 */
		private function __construct() {}

		/**
		 * Sets up initial actions.
		 *
		 * @since  1.0.0
		 * @access private
		 * @return void
		 */
		private function setup_actions() {

			// Register panels, sections, settings, controls, and partials.
			add_action( 'customize_register', array( $this, 'sections' ) );

			// Register scripts and styles for the controls.
			add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
		}

		/**
		 * Sets up the customizer sections.
		 *
		 * @since  1.0.0
		 * @access public
		 * @param  object  $manager
		 * @return void
		 */
		public function sections( $manager ) {

			// Load custom sections.
			load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

			// Register custom section types.
			$manager->register_section_type( 'Multipurpose_Blog_Customize_Section_Pro' );

			// Register sections.
			$manager->add_section(new Multipurpose_Blog_Customize_Section_Pro($manager,
				'multipurpose_blog_example_1',
				array(
				'priority'   => 1,
				'title'    => esc_html__( 'Multipurpose Blog Pro', 'multipurpose-blog' ),
				'pro_text' => esc_html__( 'Go Pro', 'multipurpose-blog' ),
				'pro_url'  => esc_url('https://www.buywptemplates.com/themes/multipurpose-blog-wordpress-theme/'),
			)));
		}

		/**
		 * Loads theme customizer CSS.
		 *
		 * @since  1.0.0
		 * @access public
		 * @return void
		 */
		public function enqueue_control_scripts() {

			wp_enqueue_script( 'multipurpose-blog-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/js/customize-controls.js', array( 'customize-controls' ) );

			wp_enqueue_style( 'multipurpose-blog-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/css/customize-controls.css' );
			
		}

		//Footer widget areas
		function multipurpose_blog_sanitize_choices( $input ) {
		    $valid = array(
		        '1'     => __('One', 'multipurpose-blog'),
		        '2'     => __('Two', 'multipurpose-blog'),
		        '3'     => __('Three', 'multipurpose-blog'),
		        '4'     => __('Four', 'multipurpose-blog')
		    );
		    if ( array_key_exists( $input, $valid ) ) {
		        return $input;
		    } else {
		        return '';
		    }
		}
	}

	// Doing this customizer thang!
	Multipurpose_Blog_Customize::get_instance();
}
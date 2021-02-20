<?php

add_action( 'customize_register', 'next_level_blog_customize_register', 999 );
function next_level_blog_customize_register( $wp_customize ){
    $wp_customize->get_section('homepage')->title = esc_html__( 'Homepage Blog Settings', 'next-level-blog' );
    $wp_customize->get_section('homepage')->priority = 1;
}

add_action( 'wp_enqueue_scripts', 'next_level_blog_chld_thm_parent_css' );
function next_level_blog_chld_thm_parent_css() {

    $my_theme = wp_get_theme();
    $theme_version = $my_theme->get( 'Version' );

    wp_enqueue_style( 
    	'next_level_blog_chld_css', 
    	trailingslashit( get_template_directory_uri() ) . 'style.css', 
    	array( 
    		'bootstrap',
    		'font-awesome-5',
    		'bizberg-main',
    		'bizberg-component',
    		'bizberg-style2',
    		'bizberg-responsive' 
    	)
    );

    wp_enqueue_script( 'next_level_blog_scripts', get_stylesheet_directory_uri() . '/script.js', array('jquery'), $theme_version );
    
}

add_filter( 'bizberg_progress_bar_status', function(){
    return 'block';
});

add_filter( 'bizberg_progress_bar_color', function(){
    return '#e91e63';
});

add_filter( 'bizberg_theme_container_width', function(){
    return '1240';
});

add_filter( 'bizberg_body_typo_heading_1_status', function(){
    return true;
});

add_filter( 'bizberg_typography_h1', function(){
    return [
        'font-family'    => 'Playfair Display',
        'variant'        => '700',
        'font-size'      => '40px',
        'line-height'    => '1.1',
        'letter-spacing' => '0',
        'text-transform' => 'inherit'
    ];
});

add_filter( 'bizberg_body_typo_heading_2_status', function(){
    return true;
});

add_filter( 'bizberg_typography_h2', function(){
    return [
        'font-family'    => 'Playfair Display',
        'variant'        => '500',
        'font-size'      => '25px',
        'line-height'    => '1',
        'letter-spacing' => '0',
        'text-transform' => 'inherit'
    ];
});

add_filter( 'bizberg_body_typo_heading_3_status', function(){
    return true;
});

add_filter( 'bizberg_typography_h3', function(){
    return [
        'font-family'    => 'Playfair Display',
        'variant'        => '500',
        'font-size'      => '24px',
        'line-height'    => '1.5',
        'letter-spacing' => '0',
        'text-transform' => 'inherit'
    ];
});

add_filter( 'bizberg_body_typo_heading_4_status', function(){
    return true;
});

add_filter( 'bizberg_typography_h4', function(){
    return [
        'font-family'    => 'Playfair Display',
        'variant'        => '500',
        'font-size'      => '25px',
        'line-height'    => '1.3',
        'letter-spacing' => '0',
        'text-transform' => 'inherit'
    ];
});

add_filter( 'bizberg_body_content_typo_status', function(){
    return true;
});

add_filter( 'bizberg_typography_body_content', function(){
    return [
        'font-family'    => 'Quicksand',
        'variant'        => 'regular',
        'font-size'      => '16px',
        'line-height'    => '1.8'
    ];
});

/** 
* Enable Slick for this child theme
*/
add_filter( 'bizberg_slick_slider_status', function(){
    return true;
});

add_action( 'init', 'next_level_blog_colors' );
function next_level_blog_colors(){

    $options = array(
        'bizberg_slider_title_box_highlight_color',
        'bizberg_slider_arrow_background_color',
        'bizberg_slider_dot_active_color',
        'bizberg_read_more_background_color',
        'bizberg_theme_color',
        'bizberg_header_menu_color_hover',
        'bizberg_header_button_color',
        'bizberg_header_button_color_sticky_menu',
        'bizberg_header_button_color_hover_sticky_menu',
        'bizberg_header_button_color_hover',
        'bizberg_link_color',
        'bizberg_background_color_2',
        'bizberg_link_color_hover',
        'bizberg_sidebar_widget_title_color',
        'bizberg_blog_listing_pagination_active_hover_color',
        'bizberg_heading_color',
        'bizberg_sidebar_widget_link_color_hover',
        'bizberg_footer_social_icon_color',
        'bizberg_footer_copyright_background',
        'bizberg_header_menu_color_hover_sticky_menu'
    );

    foreach ( $options as $value ) {
        
        add_filter( $value , function(){
            return '#e91e63';
        });

    }

}

add_filter( 'bizberg_site_tagline_font', function(){
    return [
        'font-family'    => 'inherit',
        'variant'        => '500',
        'font-size'      => '14px',
        'line-height'    => '1.8',
        'letter-spacing' => '2px',
        'text-transform' => 'uppercase',
        'text-align'     => 'center'
    ];
});

add_filter( 'bizberg_site_title_font', function(){
    return [
        'font-family'    => 'Playfair Display',
        'variant'        => '900',
        'font-size'      => '70px',
        'line-height'    => '1.5',
        'letter-spacing' => '0',
        'text-transform' => 'none',
        'text-align'     => 'center'
    ];
});

add_filter( 'bizberg_primary_header_layout', function(){
    return 'center';
});

add_filter( 'bizberg_slider_banner_settings', function(){
    return 'none';
});

add_filter( 'bizberg_slider_gradient_primary_color', function(){
    return '#3a4cb4';
});

add_filter( 'bizberg_header_btn_border_radius', function(){
    return array(
        'top-left-radius'  => '0px',
        'top-right-radius'  => '0px',
        'bottom-left-radius' => '0px',
        'bottom-right-radius' => '0px'
    );
});

add_filter( 'bizberg_header_button_border_color', function(){
    return '#cc1451';
});

add_filter( 'bizberg_header_button_border_color_sticky_menu', function(){
    return '#cc1451';
});

add_filter( 'bizberg_header_button_border_dimensions', function(){
    return array(
        'top-width'  => '0px',
        'bottom-width'  => '5px',
        'left-width' => '0px',
        'right-width' => '0px',
    );
});

add_filter( 'bizberg_slider_btn_border_radius', function(){
    return array(
        'border-top-left-radius'  => '0px',
        'border-top-right-radius'  => '0px',
        'border-bottom-right-radius' => '0px',
        'border-bottom-left-radius' => '0px'
    );
});

add_filter( 'bizberg_read_more_border_color', function(){
    return '#cc1451';
});

add_filter( 'bizberg_read_more_border_dimensions', function(){
    return array(
        'top-width'  => '0px',
        'bottom-width'  => '5px',
        'left-width' => '0px',
        'right-width' => '0px',
    );
});

add_filter( 'bizberg_header_2_spacing', function(){
    return [
        'padding-top'     => '20px',
        'padding-bottom'  => '40px'
    ];
});

add_filter( 'bizberg_header_columns_middle_style', function(){
    return 'col-sm-2|col-sm-8|col-sm-2';
});

add_filter( 'bizberg_site_title_font_sticky_menu', function(){
    return 26;
});

add_filter( 'bizberg_site_tagline_font_sticky_menu', function(){
    return 10;
});

add_action( 'bizberg_before_homepage_blog', 'next_level_blog_slider' );
function next_level_blog_slider(){ 

    $slider_status = bizberg_get_theme_mod( 'next_level_blog_slider_status' );

    if( !$slider_status ){
        return;
    }

    $args = array(
        'post_type'           => 'post',
        'post_status'         => 'publish',
        'posts_per_page'      => bizberg_get_theme_mod( 'next_level_blog_slider_limit' ),
        'cat'                 => bizberg_get_theme_mod( 'next_level_blog_slider_category' ),
        'orderby'             => bizberg_get_theme_mod( 'next_level_blog_slider_orderby' ),
        'ignore_sticky_posts' => bizberg_get_theme_mod( 'next_level_blog_slider_sticky_posts_status' )
    ); 

    $slider_query = new WP_Query( $args );

    $total_posts = absint( $slider_query->post_count );

    if( $slider_query->have_posts() ): ?>

        <!--<section class="banner-style">

            <div class="container-fluid">

                <div class="row banner-slider eye_catching_blog_slider">

                    <?php 
                    while( $slider_query->have_posts() ): $slider_query->the_post();

                        global $post;

                        $category_detail = get_the_category( $post->ID );

                        $cat_name = !empty( $category_detail[0]->name ) ? $category_detail[0]->name : '';

                        $image_url = has_post_thumbnail() ? get_the_post_thumbnail_url( $post, 'large' ) : get_template_directory_uri() . '/assets/images/placeholder.jpg'; ?>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="popular-item-wp">
                                <img src="<?php echo esc_url( $image_url ); ?>" class="ecb_slider_image">
                                <div class="pp-item-detail <?php echo ( $total_posts <= 3 ? 'show' : '' ); ?>">

                                    <div class="lower-item-dt">
                                        <a class="ecb_title" href="<?php the_permalink(); ?>">
                                            <?php the_title(); ?>
                                        </a>
                                    </div>
                                    <div class="date_cat_wrapper">
                                        <div class="ecb_date">
                                            <?php echo esc_html( get_the_date() ); ?>
                                        </div>

                                        <?php                                           
                                        if( !empty( $cat_name ) ){ ?>
                                            <div class="slider_cat_name">
                                                <a href="<?php echo esc_url( get_category_link( $category_detail[0]->term_id ) ); ?>" class="ecb_category">
                                                    <?php echo esc_html( $cat_name ); ?>
                                                </a>
                                            </div>
                                            <?php 
                                        } ?>
                                    </div>
                                </div>                        
                            </div>
                        </div>

                        <?php

                    endwhile;?>

                </div>

            </div>

        </section>-->

        <?php

    endif;

    wp_reset_postdata();
}

add_action( 'bizberg_before_homepage_blog', 'next_level_blog_featured', 20 );
function next_level_blog_featured(){ 

    // Display from category / pages
    $post_type = bizberg_get_theme_mod( 'blog_featured_3_col_post_type' ); 

    $pages = bizberg_get_theme_mod('featured_post_3_column');

    if( $post_type == 'none' ){
        return;
    } 

    $page_ids = array();
    foreach ( $pages as $key => $value ) {
        $page_ids[] = $value['page_id'];
    }

    $args = array(
        'posts_per_page'      => bizberg_get_theme_mod( 'next_level_blog_featured_limit' ),
        'post_status'         => 'publish',
        'ignore_sticky_posts' => bizberg_get_theme_mod( 'next_level_blog_featured_sticky_posts_status' )
    );

    // Include pages
    if( $post_type == 'page' ){
        $args['post__in']  = empty( $page_ids ) ? array( 'none' ) : $page_ids;
        $args['post_type'] = 'page';
        $args['orderby']   = 'post__in';
        $args['posts_per_page']   = -1;
    } else {
        // Includes category
        $args['cat']       = bizberg_get_theme_mod( 'featured_post_3_column_category' );
        $args['post_type'] = 'post';
    }

    $featured_post = new WP_Query( $args );

    if( $featured_post->have_posts() ): ?>

        <div class="content-box-main">

            <div class="container">

                <div class="row contentbox-slider">

                    <?php 

                    while( $featured_post->have_posts() ): $featured_post->the_post();

                        global $post;

                        $featured_img_url = '';
                        if( has_post_thumbnail() ){
                            $featured_img_url = get_the_post_thumbnail_url( $post->ID,'medium_large' ); 
                        }
                        
                        ?>
                        
                        <div class="col-lg-4 col-md-4 featured_col">
                            <a href="<?php the_permalink(); ?>">
                                <div class="content-box-item">
                                    <div class="content-box-inner">
                                        <div class="content-box-image" style="background-image:url(<?php echo esc_url( $featured_img_url ); ?>);">
                                            <div class="content-box-title">
                                                <h4><?php the_title(); ?></h4>
                                            </div>
                                        </div>
                                        <div class="content-service">
                                            <div class="content-service-inner">
                                                <h4><?php the_title(); ?></h4>
                                                <?php 

                                                $post_content = sanitize_text_field( $post->post_content );
                                                $word_limit = bizberg_get_theme_mod( 'next_level_blog_word_limit' );

                                                if( $word_limit > 0 && !empty( $post_content ) ){ ?>
                                                    <p class="white">
                                                        <?php echo esc_html( wp_trim_words( $post_content , $word_limit , ' ...' ) ); ?>
                                                    </p>
                                                    <?php 
                                                } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        
                        <?php 

                    endwhile; ?>

                </div>

            </div>

        </div>

        <?php

    endif;

    wp_reset_postdata();

}

function next_level_blog_featured_posts(){

    Kirki::add_section( 'next_level_blog_featured_posts_section', array(
        'title'          => esc_html__( 'Featured Posts', 'next-level-blog' ),
        'section'          => 'homepage'
    ) );

    Kirki::add_field( 'bizberg', [
        'type'        => 'radio',
        'settings'    => 'blog_featured_3_col_post_type',
        'label'       => esc_html__( 'Display From', 'next-level-blog' ),
        'section'     => 'next_level_blog_featured_posts_section',
        'default'     => 'category',
        'choices'     => [
            'category'   => esc_html__( 'Category', 'next-level-blog' ),
            'page' => esc_html__( 'Pages', 'next-level-blog' ),
            'none' => esc_html__( 'None', 'next-level-blog' )
        ]
    ] );

    Kirki::add_field( 'bizberg', [
        'type'        => 'repeater',
        'label'       => esc_attr__( 'Select Pages', 'next-level-blog' ),
        'section'     => 'next_level_blog_featured_posts_section',
        'row_label' => [
            'type'  => 'field',
            'value' => esc_html__( 'Page', 'next-level-blog' )
        ],
        'settings'    => 'featured_post_3_column',
        'fields' => [
            'page_id'  => [
                'type'        => 'select',
                'label'       => esc_html__( 'Page', 'next-level-blog' ),
                'choices'     => function_exists( 'bizberg_get_all_pages' ) ? bizberg_get_all_pages() : array()
            ],
        ],
        'default' => [],
        'active_callback'    => array(
            array(
                'setting'  => 'blog_featured_3_col_post_type',
                'operator' => '==',
                'value'    => 'page',
            ),
        ),
    ] );

    Kirki::add_field( 'bizberg', array(
        'type'        => 'select',
        'settings'    => 'featured_post_3_column_category',
        'label'       => esc_html__( 'Select Post Category', 'next-level-blog' ),
        'section'     => 'next_level_blog_featured_posts_section',
        'multiple'    => 1,
        'choices'     => bizberg_get_post_categories(),
        'active_callback'    => array(
            array(
                'setting'  => 'blog_featured_3_col_post_type',
                'operator' => '==',
                'value'    => 'category',
            ),
        ),
    ) );

    Kirki::add_field( 'bizberg', [
        'type'        => 'checkbox',
        'settings'    => 'next_level_blog_featured_sticky_posts_status',
        'label'       => esc_html__( 'Exclude Sticky Posts ?', 'next-level-blog' ),
        'section'     => 'next_level_blog_featured_posts_section',
        'default'     => false,
        'active_callback'    => array(
            array(
                'setting'  => 'blog_featured_3_col_post_type',
                'operator' => '==',
                'value'    => 'category'
            ),
            array(
                'setting'  => 'featured_post_3_column_category',
                'operator' => '==',
                'value'    => 0
            )
        )
    ] );

    Kirki::add_field( 'bizberg', [
        'type'        => 'slider',
        'settings'    => 'next_level_blog_featured_limit',
        'label'       => esc_html__( 'Limit', 'next-level-blog' ),
        'section'     => 'next_level_blog_featured_posts_section',
        'default'     => 3,
        'choices'     => [
            'min'  => 1,
            'max'  => 12,
            'step' => 1
        ],
        'active_callback'    => array(
            array(
                'setting'  => 'blog_featured_3_col_post_type',
                'operator' => '==',
                'value'    => 'category'
            )
        )
    ] );

    Kirki::add_field( 'bizberg', [
        'type'        => 'slider',
        'settings'    => 'next_level_blog_word_limit',
        'label'       => esc_html__( 'Word Limit', 'next-level-blog' ),
        'section'     => 'next_level_blog_featured_posts_section',
        'default'     => 30,
        'choices'     => [
            'min'  => 0,
            'max'  => 50,
            'step' => 1
        ],
        'active_callback'    => array(
            array(
                'setting'  => 'blog_featured_3_col_post_type',
                'operator' => '==',
                'value'    => 'category'
            )
        )
    ] );

    Kirki::add_field( 'bizberg', [
        'type'        => 'color',
        'settings'    => 'featured_post_section_background_color',
        'label'       => __( 'Section Background Color', 'next-level-blog' ),
        'section'     => 'next_level_blog_featured_posts_section',
        'default'     => '#f7f8f9',
        'choices'     => [
            'alpha' => true,
        ],
        'transport' => 'auto',
        'output' => array(
            array(
                'element'  => '.content-box-main',
                'property' => 'background-color',
            )
        ),
        'active_callback'    => array(
            array(
                'setting'  => 'blog_featured_3_col_post_type',
                'operator' => '!=',
                'value'    => 'none'
            )
        )
    ] );

    Kirki::add_field( 'bizberg', [
        'type'        => 'color',
        'settings'    => 'featured_post_background_color',
        'label'       => __( 'Column Background Color', 'next-level-blog' ),
        'description' => esc_html__( 'This background color will only display if there is no image.', 'next-level-blog' ),
        'section'     => 'next_level_blog_featured_posts_section',
        'default'     => '#cc1451',
        'choices'     => [
            'alpha' => true,
        ],
        'transport' => 'auto',
        'output' => array(
            array(
                'element'  => '.contentbox-slider .content-box-image',
                'property' => 'background-color',
            )
        ),
        'active_callback'    => array(
            array(
                'setting'  => 'blog_featured_3_col_post_type',
                'operator' => '!=',
                'value'    => 'none'
            )
        )
    ] );

    Kirki::add_field( 'bizberg', [
        'type'        => 'color',
        'settings'    => 'featured_post_background_color_content',
        'label'       => __( 'Content Background Color', 'next-level-blog' ),
        'section'     => 'next_level_blog_featured_posts_section',
        'default'     => '#e91e63',
        'choices'     => [
            'alpha' => true,
        ],
        'transport' => 'auto',
        'output' => array(
            array(
                'element'  => '.contentbox-slider .content-service-inner',
                'property' => 'background-color',
            )
        ),
        'active_callback'    => array(
            array(
                'setting'  => 'blog_featured_3_col_post_type',
                'operator' => '!=',
                'value'    => 'none'
            )
        )
    ] );

    Kirki::add_field( 'bizberg', [
        'type'        => 'color',
        'settings'    => 'featured_post_title_color',
        'label'       => __( 'Title Color', 'next-level-blog' ),
        'section'     => 'next_level_blog_featured_posts_section',
        'default'     => '#e91e63',
        'transport' => 'auto',
        'output' => array(
            array(
                'element'  => '.contentbox-slider .content-box-title h4',
                'property' => 'color',
            )
        ),
        'active_callback'    => array(
            array(
                'setting'  => 'blog_featured_3_col_post_type',
                'operator' => '!=',
                'value'    => 'none'
            )
        )
    ] );

    Kirki::add_field( 'bizberg', [
        'type'        => 'typography',
        'settings'    => 'featured_post_title_font_family',
        'label'       => esc_html__( 'Title Font', 'next-level-blog' ),
        'section'     => 'next_level_blog_featured_posts_section',
        'default'     => [
            'font-family'    => 'Playfair Display',
            'variant'        => '500',
            'font-size'      => '24px',
            'line-height'    => '1.5',
            'letter-spacing' => '0',
            'text-transform' => 'none'
        ],
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => '.contentbox-slider h4',
            ],
        ],
        'active_callback'    => array(
            array(
                'setting'  => 'blog_featured_3_col_post_type',
                'operator' => '!=',
                'value'    => 'none'
            )
        )
    ] );
    
}

function next_level_blog_kirki_slider_options(){

    Kirki::add_section( 'next_level_blog_slider', array(
        'title'          => esc_html__( 'Slider', 'next-level-blog' ),
        'section'          => 'homepage'
    ) );

    Kirki::add_field( 'bizberg', [
        'type'        => 'checkbox',
        'settings'    => 'next_level_blog_slider_status',
        'label'       => esc_html__( 'Enable Slider ?', 'next-level-blog' ),
        'section'     => 'next_level_blog_slider',
        'default'     => true,
    ] );

    Kirki::add_field( 'bizberg', array(
        'type'        => 'select',
        'settings'    => 'next_level_blog_slider_category',
        'label'       => esc_html__( 'Select Post Category', 'next-level-blog' ),
        'section'     => 'next_level_blog_slider',
        'multiple'    => 99,
        'choices'     => bizberg_get_post_categories(),
        'active_callback'    => array(
            array(
                'setting'  => 'next_level_blog_slider_status',
                'operator' => '==',
                'value'    => true
            ),
        ),
    ) );

    Kirki::add_field( 'bizberg', [
        'type'        => 'checkbox',
        'settings'    => 'next_level_blog_slider_sticky_posts_status',
        'label'       => esc_html__( 'Exclude Sticky Posts ?', 'next-level-blog' ),
        'section'     => 'next_level_blog_slider',
        'default'     => false,
        'active_callback'    => array(
            array(
                'setting'  => 'next_level_blog_slider_status',
                'operator' => '==',
                'value'    => true
            ),
            array(
                'setting'  => 'next_level_blog_slider_category',
                'operator' => '==',
                'value'    => ''
            ),
        )
    ] );

    Kirki::add_field( 'bizberg', array(
        'type'        => 'select',
        'settings'    => 'next_level_blog_slider_orderby',
        'label'       => esc_html__( 'Order By', 'next-level-blog' ),
        'section'     => 'next_level_blog_slider',
        'multiple'    => 1,
        'default'     => 'date',
        'choices'     => array(
            'title' => esc_html__( 'Title', 'next-level-blog' ),
            'date'  => esc_html__( 'Date', 'next-level-blog' ),
            'rand'  => esc_html__( 'Rand', 'next-level-blog' )
        ),
        'active_callback'    => array(
            array(
                'setting'  => 'next_level_blog_slider_status',
                'operator' => '==',
                'value'    => true
            ),
        ),
    ) );

    Kirki::add_field( 'bizberg', [
        'type'        => 'slider',
        'settings'    => 'next_level_blog_slider_limit',
        'label'       => esc_html__( 'Limit', 'next-level-blog' ),
        'section'     => 'next_level_blog_slider',
        'default'     => 6,
        'choices'     => [
            'min'  => 1,
            'max'  => 10,
            'step' => 1,
        ],
        'active_callback'    => array(
            array(
                'setting'  => 'next_level_blog_slider_status',
                'operator' => '==',
                'value'    => true
            ),
        ),
    ] );

    Kirki::add_field( 'bizberg', [
        'type'        => 'custom',
        'settings'    => 'next_level_blog_slider_image_options',
        'section'     => 'next_level_blog_slider',
        'default'     => '<div class="bizberg_customizer_custom_heading">' . esc_html__( 'Image Options', 'next-level-blog' ) . '</div>',
        'active_callback'    => array(
            array(
                'setting'  => 'next_level_blog_slider_status',
                'operator' => '==',
                'value'    => true
            ),
        ),
    ] );

    if( function_exists( 'bizberg_kirki_dtm_options' ) ){
        bizberg_kirki_dtm_options( 
            array(
                'display' => array(
                    'desktop' => 'desktop',
                    'tablet' => 'tablet',
                    'mobile' => 'mobile'
                ),
                'field_id' => 'bizberg',
                'section' => 'next_level_blog_slider',
                'settings' => 'next_level_blog_slider_image_height',
                'global_active_callback'    => array(
                    array(
                        'setting'  => 'next_level_blog_slider_status',
                        'operator' => '==',
                        'value'    => true
                    )
                ),
                'fields' => array(
                    'slider' => array(
                        'desktop' => array(
                            'label' => esc_html__( 'Image Height ( Desktop )', 'next-level-blog' ),
                            'settings' => 'next_level_blog_slider_image_height',
                            'default'     => 500,
                            'choices'     => [
                                'min'  => 100,
                                'max'  => 500,
                                'step' => 25,
                            ],
                            'transport' => 'auto',
                            'output' => array(
                                array(
                                    'element'  => '.banner-style .popular-item-wp img',
                                    'property' => 'height',
                                    'value_pattern' => '$px'
                                ),
                            ),
                        ),
                        'tablet' => array(
                            'label' => esc_html__( 'Image Height ( Tablet )', 'next-level-blog' ),
                            'settings' => 'next_level_blog_slider_image_height',
                            'default'     => 400,
                            'choices'     => [
                                'min'  => 100,
                                'max'  => 500,
                                'step' => 25,
                            ],
                            'transport' => 'auto',
                            'output' => array(
                                array(
                                    'element'  => '.banner-style .popular-item-wp img',
                                    'property' => 'height',
                                    'value_pattern' => '$px',
                                    'media_query'   => '@media (min-width: 481px) and (max-width: 1024px)'
                                )
                            ),
                        ),
                        'mobile' => array(
                            'label' => esc_html__( 'Image Height ( Mobile )', 'next-level-blog' ),
                            'settings' => 'next_level_blog_slider_image_height',
                            'default'     => 400,
                            'choices'     => [
                                'min'  => 100,
                                'max'  => 500,
                                'step' => 25,
                            ],
                            'transport' => 'auto',
                            'output' => array(
                                array(
                                    'element'  => '.banner-style .popular-item-wp img',
                                    'property' => 'height',
                                    'value_pattern' => '$px',
                                    'media_query'   => '@media (min-width: 320px) and (max-width: 480px)'
                                )
                            ),
                        )
                    ),
                )
                
            ) 
        );
    }

    Kirki::add_field( 'bizberg', [
        'type'        => 'custom',
        'settings'    => 'next_level_blog_slider_arrow_options',
        'section'     => 'next_level_blog_slider',
        'default'     => '<div class="bizberg_customizer_custom_heading">' . esc_html__( 'Arrow Options', 'next-level-blog' ) . '</div>',
        'active_callback'    => array(
            array(
                'setting'  => 'next_level_blog_slider_status',
                'operator' => '==',
                'value'    => true
            ),
        ),
    ] );

    Kirki::add_field( 'bizberg', [
        'type'        => 'color',
        'settings'    => 'next_level_blog_slider_arrow_background',
        'label'       => __( 'Background Color', 'next-level-blog' ),
        'section'     => 'next_level_blog_slider',
        'default'     => '#fff',
        'transport' => 'auto',
        'active_callback'    => array(
            array(
                'setting'  => 'next_level_blog_slider_status',
                'operator' => '==',
                'value'    => true
            ),
        ),
        'output' => array(
            array(
                'element'  => '.eye_catching_blog_slider .slick-prev, .eye_catching_blog_slider .slick-next',
                'property' => 'background'
            ),
        ),
    ] );

    Kirki::add_field( 'bizberg', [
        'type'        => 'color',
        'settings'    => 'next_level_blog_slider_arrow_background_hover',
        'label'       => __( 'Background Color Hover', 'next-level-blog' ),
        'section'     => 'next_level_blog_slider',
        'default'     => '#e91e63',
        'transport' => 'auto',
        'active_callback'    => array(
            array(
                'setting'  => 'next_level_blog_slider_status',
                'operator' => '==',
                'value'    => true
            ),
        ),
        'output' => array(
            array(
                'element'  => '.eye_catching_blog_slider .slick-prev:hover, .eye_catching_blog_slider .slick-next:hover',
                'property' => 'background'
            ),
        ),
    ] );

    Kirki::add_field( 'bizberg', [
        'type'        => 'color',
        'settings'    => 'next_level_blog_slider_arrow_color',
        'label'       => __( 'Arrow Color', 'next-level-blog' ),
        'section'     => 'next_level_blog_slider',
        'default'     => '#333',
        'transport' => 'auto',
        'active_callback'    => array(
            array(
                'setting'  => 'next_level_blog_slider_status',
                'operator' => '==',
                'value'    => true
            ),
        ),
        'output' => array(
            array(
                'element'  => '.eye_catching_blog_slider .slick-prev:before, .eye_catching_blog_slider .slick-next:before',
                'property' => 'color'
            ),
        ),
    ] );

    Kirki::add_field( 'bizberg', [
        'type'        => 'color',
        'settings'    => 'next_level_blog_slider_arrow_color_hover',
        'label'       => __( 'Arrow Color Hover', 'next-level-blog' ),
        'section'     => 'next_level_blog_slider',
        'default'     => '#fff',
        'transport' => 'auto',
        'active_callback'    => array(
            array(
                'setting'  => 'next_level_blog_slider_status',
                'operator' => '==',
                'value'    => true
            ),
        ),
        'output' => array(
            array(
                'element'  => '.eye_catching_blog_slider .slick-prev:hover:before, .eye_catching_blog_slider .slick-next:hover:before',
                'property' => 'color'
            ),
        ),
    ] );

    Kirki::add_field( 'bizberg', [
        'type'        => 'custom',
        'settings'    => 'next_level_blog_slider_font_options',
        'section'     => 'next_level_blog_slider',
        'default'     => '<div class="bizberg_customizer_custom_heading">' . esc_html__( 'Font Options', 'next-level-blog' ) . '</div>',
        'active_callback'    => array(
            array(
                'setting'  => 'next_level_blog_slider_status',
                'operator' => '==',
                'value'    => true
            ),
        ),
    ] );

    Kirki::add_field( 'bizberg', [
        'type'        => 'typography',
        'settings'    => 'next_level_blog_slider_font_options_category',
        'label'       => esc_html__( 'Category Font', 'next-level-blog' ),
        'section'     => 'next_level_blog_slider',
        'default'     => [
            'font-family'    => 'Poppins',
            'variant'        => '500',
            'line-height'    => '1.5',
            'letter-spacing' => '1px',
            'color'          => '#333333',
            'text-transform' => 'uppercase',
        ],
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => '.ecb_category',
            ],
        ],
        'active_callback'    => array(
            array(
                'setting'  => 'next_level_blog_slider_status',
                'operator' => '==',
                'value'    => true
            ),
        ),
    ] );

    if( function_exists( 'bizberg_kirki_dtm_options' ) ){

        bizberg_kirki_dtm_options( 
            array(
                'display' => array(
                    'desktop' => 'desktop',
                    'tablet' => 'tablet',
                    'mobile' => 'mobile'
                ),
                'field_id' => 'bizberg',
                'section' => 'next_level_blog_slider',
                'settings' => 'next_level_blog_slider_category_font_size',
                'global_active_callback'    => array(
                    array(
                        'setting'  => 'next_level_blog_slider_status',
                        'operator' => '==',
                        'value'    => true
                    )
                ),
                'fields' => array(
                    'slider' => array(
                        'desktop' => array(
                            'label' => esc_html__( 'Category Font Size ( Desktop )', 'next-level-blog' ),
                            'settings' => 'next_level_blog_slider_category_font',
                            'default'     => 13,  
                            'choices'     => [
                                'min'  => 10,
                                'max'  => 50,
                                'step' => 1,
                            ],
                            'transport' => 'auto',
                            'output' => array(
                                array(
                                    'element'       => '.ecb_category',
                                    'property'      => 'font-size',
                                    'value_pattern' => '$px'
                                )
                            ),
                        ),
                        'tablet' => array(
                            'label' => esc_html__( 'Category Font Size ( Tablet )', 'next-level-blog' ),
                            'settings' => 'next_level_blog_slider_category_font',
                            'default'     => 13,  
                            'choices'     => [
                                'min'  => 10,
                                'max'  => 50,
                                'step' => 1,
                            ],
                            'transport' => 'auto',
                            'output' => array(
                                array(
                                    'element'       => '.ecb_category',
                                    'property'      => 'font-size',
                                    'value_pattern' => '$px',
                                    'media_query'   => '@media (min-width: 481px) and (max-width: 1024px)'
                                )
                            ),
                        ),
                        'mobile' => array(
                            'label' => esc_html__( 'Category Font Size ( Mobile )', 'next-level-blog' ),
                            'settings' => 'next_level_blog_slider_category_font',
                            'default'     => 13, 
                            'choices'     => [
                                'min'  => 10,
                                'max'  => 50,
                                'step' => 1,
                            ],
                            'transport' => 'auto',
                            'output' => array(
                                array(
                                    'element'       => '.ecb_category',
                                    'property'      => 'font-size',
                                    'value_pattern' => '$px',
                                    'media_query'   => '@media (min-width: 320px) and (max-width: 480px)'
                                )
                            ),
                        )
                    ),
                )
                
            ) 
        );

    }

    if( function_exists( 'bizberg_kirki_dtm_options' ) ){

        bizberg_kirki_dtm_options( 
            array(
                'display' => array(
                    'desktop' => 'desktop',
                    'tablet' => 'tablet',
                    'mobile' => 'mobile'
                ),
                'field_id' => 'bizberg',
                'section' => 'next_level_blog_slider',
                'settings' => 'next_level_blog_slider_category_spacing_bottom',
                'global_active_callback'    => array(
                    array(
                        'setting'  => 'next_level_blog_slider_status',
                        'operator' => '==',
                        'value'    => true
                    )
                ),
                'fields' => array(
                    'slider' => array(
                        'desktop' => array(
                            'label' => esc_html__( 'Category Spacing Bottom ( Desktop )', 'next-level-blog' ),
                            'settings' => 'next_level_blog_slider_category_spacing_bottom',
                            'default'     => 0,  
                            'choices'     => [
                                'min'  => 0,
                                'max'  => 50,
                                'step' => 1,
                            ],
                            'transport' => 'auto',
                            'output' => array(
                                array(
                                    'element'       => '.ecb_category',
                                    'property'      => 'padding-bottom',
                                    'value_pattern' => '$px'
                                )
                            ),
                        ),
                        'tablet' => array(
                            'label' => esc_html__( 'Category Spacing Bottom ( Tablet )', 'next-level-blog' ),
                            'settings' => 'next_level_blog_slider_category_spacing_bottom',
                            'default'     => 0,  
                            'choices'     => [
                                'min'  => 0,
                                'max'  => 50,
                                'step' => 1,
                            ],
                            'transport' => 'auto',
                            'output' => array(
                                array(
                                    'element'       => '.ecb_category',
                                    'property'      => 'padding-bottom',
                                    'value_pattern' => '$px',
                                    'media_query'   => '@media (min-width: 481px) and (max-width: 1024px)'
                                )
                            ),
                        ),
                        'mobile' => array(
                            'label' => esc_html__( 'Category Spacing Bottom ( Mobile )', 'next-level-blog' ),
                            'settings' => 'next_level_blog_slider_category_spacing_bottom',
                            'default'     => 0, 
                            'choices'     => [
                                'min'  => 0,
                                'max'  => 50,
                                'step' => 1,
                            ],
                            'transport' => 'auto',
                            'output' => array(
                                array(
                                    'element'       => '.ecb_category',
                                    'property'      => 'padding-bottom',
                                    'value_pattern' => '$px',
                                    'media_query'   => '@media (min-width: 320px) and (max-width: 480px)'
                                )
                            ),
                        )
                    ),
                )
                
            ) 
        );

    }

    Kirki::add_field( 'bizberg', [
        'type'        => 'typography',
        'settings'    => 'next_level_blog_slider_font_options_title',
        'label'       => esc_html__( 'Title Font', 'next-level-blog' ),
        'section'     => 'next_level_blog_slider',
        'default'     => [
            'font-family'    => 'Playfair Display',
            'variant'        => 'regular',
            'line-height'    => '1.5',
            'letter-spacing' => '0px',
            'color'          => '#333333',
            'text-transform' => 'capitalize',
        ],
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => '.ecb_title',
            ],
        ],
        'active_callback'    => array(
            array(
                'setting'  => 'next_level_blog_slider_status',
                'operator' => '==',
                'value'    => true
            ),
        ),
    ] );

    if( function_exists( 'bizberg_kirki_dtm_options' ) ){

        bizberg_kirki_dtm_options( 
            array(
                'display' => array(
                    'desktop' => 'desktop',
                    'tablet' => 'tablet',
                    'mobile' => 'mobile'
                ),
                'field_id' => 'bizberg',
                'section' => 'next_level_blog_slider',
                'settings' => 'next_level_blog_slider_title_font_size',
                'global_active_callback'    => array(
                    array(
                        'setting'  => 'next_level_blog_slider_status',
                        'operator' => '==',
                        'value'    => true
                    )
                ),
                'fields' => array(
                    'slider' => array(
                        'desktop' => array(
                            'label' => esc_html__( 'Title Font Size ( Desktop )', 'next-level-blog' ),
                            'settings' => 'next_level_blog_slider_title_font_size',
                            'default'     => 28,  
                            'choices'     => [
                                'min'  => 0,
                                'max'  => 50,
                                'step' => 1,
                            ],
                            'transport' => 'auto',
                            'output' => array(
                                array(
                                    'element'       => '.ecb_title',
                                    'property'      => 'font-size',
                                    'value_pattern' => '$px'
                                )
                            ),
                        ),
                        'tablet' => array(
                            'label' => esc_html__( 'Title Font Size ( Tablet )', 'next-level-blog' ),
                            'settings' => 'next_level_blog_slider_title_font_size',
                            'default'     => 20,  
                            'choices'     => [
                                'min'  => 0,
                                'max'  => 50,
                                'step' => 1,
                            ],
                            'transport' => 'auto',
                            'output' => array(
                                array(
                                    'element'       => '.ecb_title',
                                    'property'      => 'font-size',
                                    'value_pattern' => '$px',
                                    'media_query'   => '@media (min-width: 481px) and (max-width: 1024px)'
                                )
                            ),
                        ),
                        'mobile' => array(
                            'label' => esc_html__( 'Title Font Size ( Mobile )', 'next-level-blog' ),
                            'settings' => 'next_level_blog_slider_title_font_size',
                            'default'     => 20, 
                            'choices'     => [
                                'min'  => 0,
                                'max'  => 50,
                                'step' => 1,
                            ],
                            'transport' => 'auto',
                            'output' => array(
                                array(
                                    'element'       => '.ecb_title',
                                    'property'      => 'font-size',
                                    'value_pattern' => '$px',
                                    'media_query'   => '@media (min-width: 320px) and (max-width: 480px)'
                                )
                            ),
                        )
                    ),
                )
                
            ) 
        );

    }

    if( function_exists( 'bizberg_kirki_dtm_options' ) ){

        bizberg_kirki_dtm_options( 
            array(
                'display' => array(
                    'desktop' => 'desktop',
                    'tablet' => 'tablet',
                    'mobile' => 'mobile'
                ),
                'field_id' => 'bizberg',
                'section' => 'next_level_blog_slider',
                'settings' => 'next_level_blog_slider_title_spacing_bottom',
                'global_active_callback'    => array(
                    array(
                        'setting'  => 'next_level_blog_slider_status',
                        'operator' => '==',
                        'value'    => true
                    )
                ),
                'fields' => array(
                    'slider' => array(
                        'desktop' => array(
                            'label' => esc_html__( 'Title Spacing Bottom ( Desktop )', 'next-level-blog' ),
                            'settings' => 'next_level_blog_slider_title_spacing_bottom',
                            'default'     => 10,  
                            'choices'     => [
                                'min'  => 0,
                                'max'  => 50,
                                'step' => 1,
                            ],
                            'transport' => 'auto',
                            'output' => array(
                                array(
                                    'element'       => '.ecb_title',
                                    'property'      => 'padding-bottom',
                                    'value_pattern' => '$px'
                                )
                            ),
                        ),
                        'tablet' => array(
                            'label' => esc_html__( 'Title Spacing Bottom ( Tablet )', 'next-level-blog' ),
                            'settings' => 'next_level_blog_slider_title_spacing_bottom',
                            'default'     => 10,  
                            'choices'     => [
                                'min'  => 0,
                                'max'  => 50,
                                'step' => 1,
                            ],
                            'transport' => 'auto',
                            'output' => array(
                                array(
                                    'element'       => '.ecb_title',
                                    'property'      => 'padding-bottom',
                                    'value_pattern' => '$px',
                                    'media_query'   => '@media (min-width: 481px) and (max-width: 1024px)'
                                )
                            ),
                        ),
                        'mobile' => array(
                            'label' => esc_html__( 'Title Spacing Bottom ( Mobile )', 'next-level-blog' ),
                            'settings' => 'next_level_blog_slider_title_spacing_bottom',
                            'default'     => 10, 
                            'choices'     => [
                                'min'  => 0,
                                'max'  => 50,
                                'step' => 1,
                            ],
                            'transport' => 'auto',
                            'output' => array(
                                array(
                                    'element'       => '.ecb_title',
                                    'property'      => 'padding-bottom',
                                    'value_pattern' => '$px',
                                    'media_query'   => '@media (min-width: 320px) and (max-width: 480px)'
                                )
                            ),
                        )
                    ),
                )
                
            ) 
        );

    }

    Kirki::add_field( 'bizberg', [
        'type'        => 'typography',
        'settings'    => 'next_level_blog_slider_font_options_date',
        'label'       => esc_html__( 'Date Font', 'next-level-blog' ),
        'section'     => 'next_level_blog_slider',
        'default'     => [
            'font-family'    => 'Poppins',
            'variant'        => '500',
            'font-size'      => '13px',
            'line-height'    => '1.5',
            'letter-spacing' => '1px',
            'color'          => '#959595',
            'text-transform' => 'uppercase',
        ],
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => '.ecb_date',
            ],
        ],
        'active_callback'    => array(
            array(
                'setting'  => 'next_level_blog_slider_status',
                'operator' => '==',
                'value'    => true
            ),
        ),
    ] );

    Kirki::add_field( 'bizberg', [
        'type'        => 'custom',
        'settings'    => 'next_level_blog_slider_options',
        'section'     => 'next_level_blog_slider',
        'default'     => '<div class="bizberg_customizer_custom_heading">' . esc_html__( 'Other Options', 'next-level-blog' ) . '</div>',
        'active_callback'    => array(
            array(
                'setting'  => 'next_level_blog_slider_status',
                'operator' => '==',
                'value'    => true
            ),
        ),
    ] );

    if( function_exists( 'bizberg_kirki_dtm_options' ) ){

        bizberg_kirki_dtm_options( 
            array(
                'display' => array(
                    'desktop' => 'desktop',
                    'tablet' => 'tablet',
                    'mobile' => 'mobile'
                ),
                'field_id' => 'bizberg',
                'section' => 'next_level_blog_slider',
                'settings' => 'next_level_blog_slider_outer_spacing',
                'global_active_callback'    => array(
                    array(
                        'setting'  => 'next_level_blog_slider_status',
                        'operator' => '==',
                        'value'    => true
                    )
                ),
                'fields' => array(
                    'dimensions' => array(
                        'desktop' => array(
                            'label' => esc_html__( 'Spacing ( Desktop )', 'next-level-blog' ),
                            'settings' => 'next_level_blog_slider_outer_spacing',
                            'default'     => [
                                'margin-top'    => '0px',
                                'margin-bottom' => '0px',
                                'margin-left'   => '0px',
                                'margin-right'  => '0px'
                            ],
                            'choices'     => [
                                'labels' => [
                                    'margin-top'    => esc_html__( 'Top', 'next-level-blog' ),
                                    'margin-bottom' => esc_html__( 'Bottom', 'next-level-blog' ),
                                    'margin-left'   => esc_html__( 'Left', 'next-level-blog' ),
                                    'margin-right'  => esc_html__( 'Right', 'next-level-blog' )
                                ],
                            ],
                            'output' => array(
                                array(
                                    'element'       => '.banner-slider.eye_catching_blog_slider'
                                )
                            ),
                        ),
                        'tablet' => array(
                            'label' => esc_html__( 'Spacing ( Tablet )', 'next-level-blog' ),
                            'settings' => 'next_level_blog_slider_outer_spacing',
                            'default'     => [
                                'margin-top'  => '0px',
                                'margin-bottom'  => '0px',
                                'margin-left' => '0px',
                                'margin-right' => '0px'
                            ],
                            'choices'     => [
                                'labels' => [
                                    'margin-top'  => esc_html__( 'Top', 'next-level-blog' ),
                                    'margin-bottom'  => esc_html__( 'Bottom', 'next-level-blog' ),
                                    'margin-left' => esc_html__( 'Left', 'next-level-blog' ),
                                    'margin-right' => esc_html__( 'Right', 'next-level-blog' )
                                ],
                            ],
                            'output' => array(
                                array(
                                    'element'       => '.banner-slider.eye_catching_blog_slider',
                                    'media_query'   => '@media (min-width: 481px) and (max-width: 1024px)'
                                )
                            ),
                        ),
                        'mobile' => array(
                            'label' => esc_html__( 'Spacing ( Mobile )', 'next-level-blog' ),
                            'settings' => 'next_level_blog_slider_outer_spacing',
                            'default'     => [
                                'margin-top'  => '0px',
                                'margin-bottom'  => '0px',
                                'margin-left' => '0px',
                                'margin-right' => '0px'
                            ],
                            'choices'     => [
                                'labels' => [
                                    'margin-top'  => esc_html__( 'Top', 'next-level-blog' ),
                                    'margin-bottom'  => esc_html__( 'Bottom', 'next-level-blog' ),
                                    'margin-left' => esc_html__( 'Left', 'next-level-blog' ),
                                    'margin-right' => esc_html__( 'Right', 'next-level-blog' )
                                ],
                            ],
                            'output' => array(
                                array(
                                    'element'       => '.banner-slider.eye_catching_blog_slider',
                                    'media_query'   => '@media (min-width: 320px) and (max-width: 480px)'
                                )
                            ),
                        )
                    ),
                )
                
            ) 
        );
    
    }

    Kirki::add_field( 'bizberg', [
        'type'        => 'checkbox',
        'settings'    => 'next_level_blog_slider_drag',
        'label'       => esc_html__( 'Draggable ?', 'next-level-blog' ),
        'section'     => 'next_level_blog_slider',
        'default'     => true,
        'active_callback'    => array(
            array(
                'setting'  => 'next_level_blog_slider_status',
                'operator' => '==',
                'value'    => true
            ),
        ),
    ] );

    Kirki::add_field( 'bizberg', [
        'type'        => 'slider',
        'settings'    => 'next_level_blog_slider_autoplaySpeed',
        'label'       => esc_html__( 'Auto Play Speed', 'next-level-blog' ),
        'section'     => 'next_level_blog_slider',
        'default'     => 3,
        'choices'     => [
            'min'  => 1,
            'max'  => 10,
            'step' => 1,
        ],
        'active_callback'    => array(
            array(
                'setting'  => 'next_level_blog_slider_status',
                'operator' => '==',
                'value'    => true
            ),
        ),
    ] );

    Kirki::add_field( 'bizberg', [
        'type'        => 'slider',
        'settings'    => 'next_level_blog_slider_speed',
        'label'       => esc_html__( 'Speed', 'next-level-blog' ),
        'section'     => 'next_level_blog_slider',
        'default'     => 1000,
        'choices'     => [
            'min'  => 300,
            'max'  => 10000,
            'step' => 100,
        ],
        'active_callback'    => array(
            array(
                'setting'  => 'next_level_blog_slider_status',
                'operator' => '==',
                'value'    => true
            ),
        ),
    ] );

}

add_action( 'init' , 'next_level_blog_kirki_fields' );
function next_level_blog_kirki_fields(){

    if( !class_exists( 'Kirki' ) ){
        return;
    }

    /**
    * Slider Options
    */

    next_level_blog_kirki_slider_options();

    /**
    * Featured posts/pages
    */

    next_level_blog_featured_posts();

}

add_filter( 'bizberg_localize_scripts', function( $data ){

    $data['autoplaySpeed'] = bizberg_get_theme_mod( 'next_level_blog_slider_autoplaySpeed' );
    $data['speed'] = bizberg_get_theme_mod( 'next_level_blog_slider_speed' );
    $data['draggable'] = bizberg_get_theme_mod( 'next_level_blog_slider_drag' );

    return $data;

});
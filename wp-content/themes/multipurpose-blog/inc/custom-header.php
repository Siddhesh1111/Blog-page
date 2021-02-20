<?php
/**
 * @package Multipurpose Blog
 * @subpackage multipurpose-blog
 * @since multipurpose-blog 1.0
 * Setup the WordPress core custom header feature.
 *
 * @uses multipurpose_blog_header_style()
*/

function multipurpose_blog_custom_header_setup() {

	add_theme_support( 'custom-header', apply_filters( 'multipurpose_blog_custom_header_args', array(

		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1600,
		'height'                 => 105,
		'flex-width'         	=> true,
        'flex-height'        	=> true,
		'wp-head-callback'       => 'multipurpose_blog_header_style',
	) ) );

}

add_action( 'after_setup_theme', 'multipurpose_blog_custom_header_setup' );

if ( ! function_exists( 'multipurpose_blog_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see multipurpose_blog_custom_header_setup().
 */
add_action( 'wp_enqueue_scripts', 'multipurpose_blog_header_style' );
function multipurpose_blog_header_style() {
	//Check if user has defined any header image.
	if ( get_header_image() ) :
	$multipurpose_blog_custom_css = "
        .logo_bar{
			background-image:url('".esc_url(get_header_image())."');
			background-position: center top;
		}";
	   	wp_add_inline_style( 'multipurpose-blog-basic-style', $multipurpose_blog_custom_css );
	endif;
}
endif; // multipurpose_blog_header_style
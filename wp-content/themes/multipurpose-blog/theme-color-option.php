<?php

	$multipurpose_blog_hi_first_color = get_theme_mod('multipurpose_blog_hi_first_color');

	$multipurpose_blog_custom_css ='';

	/*---------------- Global First Color -----------*/
	$multipurpose_blog_custom_css .='.slide-button a, #sidebar button, #comments input[type="submit"].submit, #sidebar .tagcloud a:hover, .read-moresec a, .footer-wp .tagcloud a:hover, .pagination a:hover, .woocommerce span.onsale, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, nav.woocommerce-MyAccount-navigation ul li, #navbar-header .socialbox, input[type="submit"], #comments a.comment-reply-link, .primary-navigation ul ul a:hover, .primary-navigation ul ul a:focus, #scrollbutton i{';
			$multipurpose_blog_custom_css .='background-color: '.esc_attr($multipurpose_blog_hi_first_color).';';
	$multipurpose_blog_custom_css .='}';

	$multipurpose_blog_custom_css .='.menubar .social-media a:hover, #header .socialbox i:hover , primary-navigation ul ul a:hover, .primary-navigation ul ul a:focus, .entry-date a:hover, .entry-author a:hover,  .cat-box ul.post-categories a:hover, .date-box a:hover, .footer-wp li a:hover, .woocommerce-message::before, .woocommerce-info a, .star-rating{';
			$multipurpose_blog_custom_css .='color: '.esc_attr($multipurpose_blog_hi_first_color).';';
	$multipurpose_blog_custom_css .='}';

	$multipurpose_blog_custom_css .='.slide-button a, #comments input[type="submit"].submit, .read-moresec a, #scrollbutton i{';
			$multipurpose_blog_custom_css .='border-color: '.esc_attr($multipurpose_blog_hi_first_color).';';
	$multipurpose_blog_custom_css .='}';

	$multipurpose_blog_custom_css .='.woocommerce-message{';
			$multipurpose_blog_custom_css .='border-top-color: '.esc_attr($multipurpose_blog_hi_first_color).';';
	$multipurpose_blog_custom_css .='}';

	/*---------------------------Width Layout -------------------*/
	$multipurpose_blog_theme_lay = get_theme_mod( 'multipurpose_blog_width_layout_options','Default');
    if($multipurpose_blog_theme_lay == 'Default'){
		$multipurpose_blog_custom_css .='body{';
			$multipurpose_blog_custom_css .='max-width: 100%;';
		$multipurpose_blog_custom_css .='}';
	}else if($multipurpose_blog_theme_lay == 'Container Layout'){
		$multipurpose_blog_custom_css .='body{';
			$multipurpose_blog_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$multipurpose_blog_custom_css .='}';
	}else if($multipurpose_blog_theme_lay == 'Box Layout'){
		$multipurpose_blog_custom_css .='body{';
			$multipurpose_blog_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$multipurpose_blog_custom_css .='}';
	}

	/*-------------Slider Content Layout -------------------*/
	$multipurpose_blog_theme_lay = get_theme_mod( 'multipurpose_blog_slider_content_layout','Center');
    if($multipurpose_blog_theme_lay == 'Left'){
		$multipurpose_blog_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .slide-button {';
			$multipurpose_blog_custom_css .='text-align:left; left:15%; right:30%;';
		$multipurpose_blog_custom_css .='}';
	}else if($multipurpose_blog_theme_lay == 'Center'){
		$multipurpose_blog_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .slide-button {';
			$multipurpose_blog_custom_css .='text-align:left; left:25%; right:20%;';
		$multipurpose_blog_custom_css .='}';
	}else if($multipurpose_blog_theme_lay == 'Right'){
		$multipurpose_blog_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .slide-button {';
			$multipurpose_blog_custom_css .='text-align:right; left:30%; right:15%;';
		$multipurpose_blog_custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/
	$multipurpose_blog_theme_lay = get_theme_mod( 'multipurpose_blog_slider_opacity','0.7');
	if($multipurpose_blog_theme_lay == '0'){
		$multipurpose_blog_custom_css .='#slider img{';
			$multipurpose_blog_custom_css .='opacity:0';
		$multipurpose_blog_custom_css .='}';
		}else if($multipurpose_blog_theme_lay == '0.1'){
		$multipurpose_blog_custom_css .='#slider img{';
			$multipurpose_blog_custom_css .='opacity:0.1';
		$multipurpose_blog_custom_css .='}';
		}else if($multipurpose_blog_theme_lay == '0.2'){
		$multipurpose_blog_custom_css .='#slider img{';
			$multipurpose_blog_custom_css .='opacity:0.2';
		$multipurpose_blog_custom_css .='}';
		}else if($multipurpose_blog_theme_lay == '0.3'){
		$multipurpose_blog_custom_css .='#slider img{';
			$multipurpose_blog_custom_css .='opacity:0.3';
		$multipurpose_blog_custom_css .='}';
		}else if($multipurpose_blog_theme_lay == '0.4'){
		$multipurpose_blog_custom_css .='#slider img{';
			$multipurpose_blog_custom_css .='opacity:0.4';
		$multipurpose_blog_custom_css .='}';
		}else if($multipurpose_blog_theme_lay == '0.5'){
		$multipurpose_blog_custom_css .='#slider img{';
			$multipurpose_blog_custom_css .='opacity:0.5';
		$multipurpose_blog_custom_css .='}';
		}else if($multipurpose_blog_theme_lay == '0.6'){
		$multipurpose_blog_custom_css .='#slider img{';
			$multipurpose_blog_custom_css .='opacity:0.6';
		$multipurpose_blog_custom_css .='}';
		}else if($multipurpose_blog_theme_lay == '0.7'){
		$multipurpose_blog_custom_css .='#slider img{';
			$multipurpose_blog_custom_css .='opacity:0.7';
		$multipurpose_blog_custom_css .='}';
		}else if($multipurpose_blog_theme_lay == '0.8'){
		$multipurpose_blog_custom_css .='#slider img{';
			$multipurpose_blog_custom_css .='opacity:0.8';
		$multipurpose_blog_custom_css .='}';
		}else if($multipurpose_blog_theme_lay == '0.9'){
		$multipurpose_blog_custom_css .='#slider img{';
			$multipurpose_blog_custom_css .='opacity:0.9';
		$multipurpose_blog_custom_css .='}';
	}

	/*------------ Woocommerce Settings  -------------*/
	$multipurpose_blog_woocommerce_button_padding_top = get_theme_mod('multipurpose_blog_woocommerce_button_padding_top',15);
	$multipurpose_blog_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{';
		$multipurpose_blog_custom_css .='padding-top: '.esc_attr($multipurpose_blog_woocommerce_button_padding_top).'px; padding-bottom: '.esc_attr($multipurpose_blog_woocommerce_button_padding_top).'px;';
	$multipurpose_blog_custom_css .='}';

	$multipurpose_blog_woocommerce_button_padding_right = get_theme_mod('multipurpose_blog_woocommerce_button_padding_right',15);
	$multipurpose_blog_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{';
		$multipurpose_blog_custom_css .='padding-left: '.esc_attr($multipurpose_blog_woocommerce_button_padding_right).'px; padding-right: '.esc_attr($multipurpose_blog_woocommerce_button_padding_right).'px;';
	$multipurpose_blog_custom_css .='}';

	$multipurpose_blog_woocommerce_button_border_radius = get_theme_mod('multipurpose_blog_woocommerce_button_border_radius');
	$multipurpose_blog_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{';
		$multipurpose_blog_custom_css .='border-radius: '.esc_attr($multipurpose_blog_woocommerce_button_border_radius).'px;';
	$multipurpose_blog_custom_css .='}';

	$multipurpose_blog_related_product_enable = get_theme_mod('multipurpose_blog_related_product_enable',true);
	if($multipurpose_blog_related_product_enable == false){
		$multipurpose_blog_custom_css .='.related.products{';
			$multipurpose_blog_custom_css .='display: none;';
		$multipurpose_blog_custom_css .='}';
	}

	$multipurpose_blog_woocommerce_product_border_enable = get_theme_mod('multipurpose_blog_woocommerce_product_border_enable',true);
	if($multipurpose_blog_woocommerce_product_border_enable == false){
		$multipurpose_blog_custom_css .='.products li{';
			$multipurpose_blog_custom_css .='border: none;';
		$multipurpose_blog_custom_css .='}';
	}

	$multipurpose_blog_woocommerce_product_padding_top = get_theme_mod('multipurpose_blog_woocommerce_product_padding_top',10);
	$multipurpose_blog_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$multipurpose_blog_custom_css .='padding-top: '.esc_attr($multipurpose_blog_woocommerce_product_padding_top).'px !important; padding-bottom: '.esc_attr($multipurpose_blog_woocommerce_product_padding_top).'px !important;';
	$multipurpose_blog_custom_css .='}';

	$multipurpose_blog_woocommerce_product_padding_right = get_theme_mod('multipurpose_blog_woocommerce_product_padding_right',10);
	$multipurpose_blog_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$multipurpose_blog_custom_css .='padding-left: '.esc_attr($multipurpose_blog_woocommerce_product_padding_right).'px !important; padding-right: '.esc_attr($multipurpose_blog_woocommerce_product_padding_right).'px !important;';
	$multipurpose_blog_custom_css .='}';

	$multipurpose_blog_woocommerce_product_border_radius = get_theme_mod('multipurpose_blog_woocommerce_product_border_radius');
	$multipurpose_blog_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$multipurpose_blog_custom_css .='border-radius: '.esc_attr($multipurpose_blog_woocommerce_product_border_radius).'px;';
	$multipurpose_blog_custom_css .='}';

	$multipurpose_blog_woocommerce_product_box_shadow = get_theme_mod('multipurpose_blog_woocommerce_product_box_shadow');
	$multipurpose_blog_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$multipurpose_blog_custom_css .='box-shadow: '.esc_attr($multipurpose_blog_woocommerce_product_box_shadow).'px '.esc_attr($multipurpose_blog_woocommerce_product_box_shadow).'px '.esc_attr($multipurpose_blog_woocommerce_product_box_shadow).'px #eee;';
	$multipurpose_blog_custom_css .='}';

	$multipurpose_blog_woo_product_sale_top_bottom_padding = get_theme_mod('multipurpose_blog_woo_product_sale_top_bottom_padding', 0);
	$multipurpose_blog_woo_product_sale_left_right_padding = get_theme_mod('multipurpose_blog_woo_product_sale_left_right_padding', 0);
	$multipurpose_blog_custom_css .='.woocommerce span.onsale{';
		$multipurpose_blog_custom_css .='padding-top: '.esc_attr($multipurpose_blog_woo_product_sale_top_bottom_padding).'px; padding-bottom: '.esc_attr($multipurpose_blog_woo_product_sale_top_bottom_padding).'px; padding-left: '.esc_attr($multipurpose_blog_woo_product_sale_left_right_padding).'px; padding-right: '.esc_attr($multipurpose_blog_woo_product_sale_left_right_padding).'px; display:inline-block;';
	$multipurpose_blog_custom_css .='}';

	$multipurpose_blog_woo_product_sale_border_radius = get_theme_mod('multipurpose_blog_woo_product_sale_border_radius',100);
	$multipurpose_blog_custom_css .='.woocommerce span.onsale {';
		$multipurpose_blog_custom_css .='border-radius: '.esc_attr($multipurpose_blog_woo_product_sale_border_radius).'%;';
	$multipurpose_blog_custom_css .='}';

	$multipurpose_blog_woo_product_sale_position = get_theme_mod('multipurpose_blog_woo_product_sale_position', 'Right');
	if($multipurpose_blog_woo_product_sale_position == 'Right' ){
		$multipurpose_blog_custom_css .='.woocommerce ul.products li.product .onsale{';
			$multipurpose_blog_custom_css .=' left:auto; right:0;';
		$multipurpose_blog_custom_css .='}';
	}elseif($multipurpose_blog_woo_product_sale_position == 'Left' ){
		$multipurpose_blog_custom_css .='.woocommerce ul.products li.product .onsale{';
			$multipurpose_blog_custom_css .=' left:-6px; right:auto;';
		$multipurpose_blog_custom_css .='}';
	}

	// footer setting
	$multipurpose_blog_footer_bg_color = get_theme_mod('multipurpose_blog_footer_bg_color');
	$multipurpose_blog_custom_css .='.footer-wp{';
		$multipurpose_blog_custom_css .='background-color: '.esc_attr($multipurpose_blog_footer_bg_color).';';
	$multipurpose_blog_custom_css .='}';

	$multipurpose_blog_footer_bg_image = get_theme_mod('multipurpose_blog_footer_bg_image');
	if($multipurpose_blog_footer_bg_image != false){
		$multipurpose_blog_custom_css .='.footer-wp{';
			$multipurpose_blog_custom_css .='background: url('.esc_attr($multipurpose_blog_footer_bg_image).');';
		$multipurpose_blog_custom_css .='}';
	}

	/*------------- Back to Top  -------------------*/
	$multipurpose_blog_back_to_top_border_radius = get_theme_mod('multipurpose_blog_back_to_top_border_radius');
	$multipurpose_blog_custom_css .='#scrollbutton i{';
		$multipurpose_blog_custom_css .='border-radius: '.esc_attr($multipurpose_blog_back_to_top_border_radius).'px;';
	$multipurpose_blog_custom_css .='}';

	$multipurpose_blog_scroll_icon_font_size = get_theme_mod('multipurpose_blog_scroll_icon_font_size', 22);
	$multipurpose_blog_custom_css .='#scrollbutton i{';
		$multipurpose_blog_custom_css .='font-size: '.esc_attr($multipurpose_blog_scroll_icon_font_size).'px;';
	$multipurpose_blog_custom_css .='}';

	$multipurpose_blog_top_bottom_scroll_padding = get_theme_mod('multipurpose_blog_top_bottom_scroll_padding', 12);
	$multipurpose_blog_custom_css .='#scrollbutton i{';
		$multipurpose_blog_custom_css .='padding-top: '.esc_attr($multipurpose_blog_top_bottom_scroll_padding).'px; padding-bottom: '.esc_attr($multipurpose_blog_top_bottom_scroll_padding).'px;';
	$multipurpose_blog_custom_css .='}';

	$multipurpose_blog_left_right_scroll_padding = get_theme_mod('multipurpose_blog_left_right_scroll_padding', 17);
	$multipurpose_blog_custom_css .='#scrollbutton i{';
		$multipurpose_blog_custom_css .='padding-left: '.esc_attr($multipurpose_blog_left_right_scroll_padding).'px; padding-right: '.esc_attr($multipurpose_blog_left_right_scroll_padding).'px;';
	$multipurpose_blog_custom_css .='}';

	/*----------- Preloader Color Option  ----------------*/
	$multipurpose_blog_preloader_bg_color_option = get_theme_mod('multipurpose_blog_preloader_bg_color_option');
	$multipurpose_blog_preloader_icon_color_option = get_theme_mod('multipurpose_blog_preloader_icon_color_option');
	$multipurpose_blog_custom_css .='.frame{';
		$multipurpose_blog_custom_css .='background-color: '.esc_attr($multipurpose_blog_preloader_bg_color_option).';';
	$multipurpose_blog_custom_css .='}';

	$multipurpose_blog_custom_css .='.dot-1,.dot-2,.dot-3{';
		$multipurpose_blog_custom_css .='background-color: '.esc_attr($multipurpose_blog_preloader_icon_color_option).';';
	$multipurpose_blog_custom_css .='}';

	// preloader type
	$multipurpose_blog_theme_lay = get_theme_mod( 'multipurpose_blog_preloader_type','First Preloader Type');
    if($multipurpose_blog_theme_lay == 'First Preloader Type'){
		$multipurpose_blog_custom_css .='.dot-1, .dot-2, .dot-3{';
			$multipurpose_blog_custom_css .='';
		$multipurpose_blog_custom_css .='}';
	}else if($multipurpose_blog_theme_lay == 'Second Preloader Type'){
		$multipurpose_blog_custom_css .='.dot-1, .dot-2, .dot-3{';
			$multipurpose_blog_custom_css .='border-radius:0 !important;';
		$multipurpose_blog_custom_css .='}';
	}

	// menu settings
	$multipurpose_blog_menu_font_size_option = get_theme_mod('multipurpose_blog_menu_font_size_option', 12);
	$multipurpose_blog_custom_css .='.primary-navigation a{';
		$multipurpose_blog_custom_css .='font-size: '.esc_attr($multipurpose_blog_menu_font_size_option).'px;';
	$multipurpose_blog_custom_css .='}';

	// Responsive Media
	$multipurpose_blog_slider = get_theme_mod( 'multipurpose_blog_display_slider',false);
	if($multipurpose_blog_slider == true && get_theme_mod( 'multipurpose_blog_slider_hide', false) == false){
    	$multipurpose_blog_custom_css .='#slider{';
			$multipurpose_blog_custom_css .='display:none;';
		$multipurpose_blog_custom_css .='} ';
	}
    if($multipurpose_blog_slider == true){
    	$multipurpose_blog_custom_css .='@media screen and (max-width:575px) {';
		$multipurpose_blog_custom_css .='#slider{';
			$multipurpose_blog_custom_css .='display:block;';
		$multipurpose_blog_custom_css .='} }';
	}else if($multipurpose_blog_slider == false){
		$multipurpose_blog_custom_css .='@media screen and (max-width:575px){';
		$multipurpose_blog_custom_css .='#slider{';
			$multipurpose_blog_custom_css .='display:none;';
		$multipurpose_blog_custom_css .='} }';
	}

	$multipurpose_blog_sliderbutton = get_theme_mod( 'multipurpose_blog_display_slider_button',true);
	if($multipurpose_blog_sliderbutton == true && get_theme_mod( 'multipurpose_blog_show_slider_button',true) != true){
    	$multipurpose_blog_custom_css .='.slide-button{';
			$multipurpose_blog_custom_css .='display:none;';
		$multipurpose_blog_custom_css .='} ';
	}
    if($multipurpose_blog_sliderbutton == true){
    	$multipurpose_blog_custom_css .='@media screen and (max-width:575px) {';
		$multipurpose_blog_custom_css .='.slide-button{';
			$multipurpose_blog_custom_css .='display:block;';
		$multipurpose_blog_custom_css .='} }';
	}else if($multipurpose_blog_sliderbutton == false){
		$multipurpose_blog_custom_css .='@media screen and (max-width:575px){';
		$multipurpose_blog_custom_css .='.slide-button{';
			$multipurpose_blog_custom_css .='display:none;';
		$multipurpose_blog_custom_css .='} }';
	}

	$multipurpose_blog_sidebar = get_theme_mod( 'multipurpose_blog_display_sidebar',true);
    if($multipurpose_blog_sidebar == true){
    	$multipurpose_blog_custom_css .='@media screen and (max-width:575px) {';
		$multipurpose_blog_custom_css .='#sidebar{';
			$multipurpose_blog_custom_css .='display:block;';
		$multipurpose_blog_custom_css .='} }';
	}else if($multipurpose_blog_sidebar == false){
		$multipurpose_blog_custom_css .='@media screen and (max-width:575px) {';
		$multipurpose_blog_custom_css .='#sidebar{';
			$multipurpose_blog_custom_css .='display:none;';
		$multipurpose_blog_custom_css .='} }';
	}

	$multipurpose_blog_scroll = get_theme_mod( 'multipurpose_blog_display_scrolltop', true);
	if($multipurpose_blog_scroll == true && get_theme_mod( 'multipurpose_blog_hide_show_scroll',true) != true){
    	$multipurpose_blog_custom_css .='#scrollbutton i{';
			$multipurpose_blog_custom_css .='display:none;';
		$multipurpose_blog_custom_css .='} ';
	}
    if($multipurpose_blog_scroll == true){
    	$multipurpose_blog_custom_css .='@media screen and (max-width:575px) {';
		$multipurpose_blog_custom_css .='#scrollbutton i{';
			$multipurpose_blog_custom_css .='display:block;';
		$multipurpose_blog_custom_css .='} }';
	}else if($multipurpose_blog_scroll == false){
		$multipurpose_blog_custom_css .='@media screen and (max-width:575px){';
		$multipurpose_blog_custom_css .='#scrollbutton i{';
			$multipurpose_blog_custom_css .='display:none;';
		$multipurpose_blog_custom_css .='} }';
	}

	$multipurpose_blog_preloader = get_theme_mod( 'multipurpose_blog_display_preloader',true);
	if($multipurpose_blog_preloader == true && get_theme_mod( 'multipurpose_blog_preloader',true) != true){
    	$multipurpose_blog_custom_css .='.frame{';
			$multipurpose_blog_custom_css .='display:none;';
		$multipurpose_blog_custom_css .='} ';
	}
    if($multipurpose_blog_preloader == true){
    	$multipurpose_blog_custom_css .='@media screen and (max-width:575px) {';
		$multipurpose_blog_custom_css .='.frame{';
			$multipurpose_blog_custom_css .='display:block;';
		$multipurpose_blog_custom_css .='} }';
	}else if($multipurpose_blog_preloader == false){
		$multipurpose_blog_custom_css .='@media screen and (max-width:575px){';
		$multipurpose_blog_custom_css .='.frame{';
			$multipurpose_blog_custom_css .='display:none;';
		$multipurpose_blog_custom_css .='} }';
	}

	$multipurpose_blog_fixed_header = get_theme_mod( 'multipurpose_blog_display_fixed_header',true);
    if($multipurpose_blog_fixed_header == true){
    	$multipurpose_blog_custom_css .='@media screen and (max-width:575px) {';
		$multipurpose_blog_custom_css .='.fixed-header{';
			$multipurpose_blog_custom_css .='display:block;';
		$multipurpose_blog_custom_css .='} }';
	}else if($multipurpose_blog_fixed_header == false){
		$multipurpose_blog_custom_css .='@media screen and (max-width:575px) {';
		$multipurpose_blog_custom_css .='.fixed-header{';
			$multipurpose_blog_custom_css .='display:none;';
		$multipurpose_blog_custom_css .='} }';
	}

	//  comment form width
	$multipurpose_blog_comment_form_width = get_theme_mod( 'multipurpose_blog_comment_form_width');
	$multipurpose_blog_custom_css .='#comments textarea{';
		$multipurpose_blog_custom_css .='width: '.esc_attr($multipurpose_blog_comment_form_width).'%;';
	$multipurpose_blog_custom_css .='}';

	$multipurpose_blog_title_comment_form = get_theme_mod('multipurpose_blog_title_comment_form', 'Leave a Reply');
	if($multipurpose_blog_title_comment_form == ''){
		$multipurpose_blog_custom_css .='#comments h2#reply-title {';
			$multipurpose_blog_custom_css .='display: none;';
		$multipurpose_blog_custom_css .='}';
	}

	$multipurpose_blog_comment_form_button_content = get_theme_mod('multipurpose_blog_comment_form_button_content', 'Post Comment');
	if($multipurpose_blog_comment_form_button_content == ''){
		$multipurpose_blog_custom_css .='#comments p.form-submit {';
			$multipurpose_blog_custom_css .='display: none;';
		$multipurpose_blog_custom_css .='}';
	}

	// slider height
	$multipurpose_blog_option_slider_height = get_theme_mod('multipurpose_blog_option_slider_height');
	$multipurpose_blog_custom_css .='#slider img{';
		$multipurpose_blog_custom_css .='height: '.esc_attr($multipurpose_blog_option_slider_height).'px;';
	$multipurpose_blog_custom_css .='}';

	// site title font size
	$multipurpose_blog_site_title_font_size = get_theme_mod('multipurpose_blog_site_title_font_size', 45);
	$multipurpose_blog_custom_css .='#header .logo a{';
	$multipurpose_blog_custom_css .='font-size: '.esc_attr($multipurpose_blog_site_title_font_size).'px;';
	$multipurpose_blog_custom_css .='}';





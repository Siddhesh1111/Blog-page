<?php

add_action( 'admin_menu', 'multipurpose_blog_gettingstarted' );
function multipurpose_blog_gettingstarted() {    	
	add_theme_page( esc_html__('About Theme', 'multipurpose-blog'), esc_html__('About Theme', 'multipurpose-blog'), 'edit_theme_options', 'multipurpose-blog-guide-page', 'multipurpose_blog_guide');   
}

function multipurpose_blog_admin_theme_style() {
   wp_enqueue_style('multipurpose-blog-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/dashboard/get_started_info.css');
}
add_action('admin_enqueue_scripts', 'multipurpose_blog_admin_theme_style');

function multipurpose_blog_notice(){
    global $pagenow;
    if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {?>
    <div class="notice notice-success is-dismissible getting_started">
		<div class="notice-content">
			<h2><?php esc_html_e( 'Thanks for installing Multipurpose Blog Lite, you rock!', 'multipurpose-blog' ) ?> </h2>
			<p><?php esc_html_e( 'Take benefit of a variety of features, functionalities, elements, and an exclusive set of customization options to build your own professional automobile website. Please Click on the link below to know the theme setup information.', 'multipurpose-blog' ) ?></p>
			<p><a href="<?php echo esc_url( admin_url( 'themes.php?page=multipurpose-blog-guide-page' ) ); ?>" class="button button-primary"><?php esc_html_e( 'Getting Started', 'multipurpose-blog' ); ?></a></p>
		</div>
	</div>
	<?php }
}
add_action('admin_notices', 'multipurpose_blog_notice');

/**
 * Theme Info Page
 */
function multipurpose_blog_guide() {

	// Theme info
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'multipurpose-blog' ); ?>

	<div class="wrap getting-started">
		<div class="getting-started__header">
			<div class="row">
				<div class="col-md-5 intro">
					<div class="pad-box">
						<h2><?php esc_html_e( 'Welcome to Multipurpose Blog', 'multipurpose-blog' ); ?></h2>
						<p>Version: <?php echo esc_html($theme['Version']);?></p>
						<span class="intro__version"><?php esc_html_e( 'Congratulations! You are about to use the most easy to use and flexible WordPress theme.', 'multipurpose-blog' ); ?>	
						</span>
						<div class="powered-by">
							<p><strong><?php esc_html_e( 'Theme created by Buy WP Templates', 'multipurpose-blog' ); ?></strong></p>
							<p>
								<img class="logo" src="<?php echo esc_url(get_template_directory_uri() . '/inc/dashboard/media/theme-logo.png'); ?>"/>
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-7">
					<div class="pro-links">
				    	<a href="<?php echo esc_url( MULTIPURPOSE_BLOG_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'multipurpose-blog'); ?></a>
						<a href="<?php echo esc_url( MULTIPURPOSE_BLOG_BUY_PRO ); ?>"><?php esc_html_e('Buy Pro', 'multipurpose-blog'); ?></a>
						<a href="<?php echo esc_url( MULTIPURPOSE_BLOG_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'multipurpose-blog'); ?></a>
					</div>
					<div class="install-plugins">
						<img src="<?php echo esc_url(get_template_directory_uri() . '/inc/dashboard/media/responsive1.png'); ?>" alt="" />
					</div>
				</div>
			</div>
			<h2 class="tg-docs-section intruction-title" id="section-4"><?php esc_html_e( '1). Setup Multipurpose Blog Theme', 'multipurpose-blog' ); ?></h2>
			<div class="row">
				<div class="theme-instruction-block col-md-7">
					<div class="pad-box">
	                    <p><?php esc_html_e( 'The Multipurpose blog is a beautiful and minimal blog theme designed specifically for bloggers to make blogs for photography, food, fashion, lifestyle, magazines, travel, sports, technology, as well as modern newspaper websites. It is a powerful blog theme with plenty of features, user-friendly customization and personalization options. It includes features such as quick page speed, mobile friendly design, cross browser compatibility, SEO friendly, translation ready, etc. It shows a large slider with a banner that has a Call to Action Button (CTA) to attract the visitors. It is compatible with WooCommerce and features layouts for products, posts, and pages. It has secure and clean codes that do not allow you to write even a single line of code. It offers a bunch of shortcodes that helps in incorporating functional features. This minimal blog theme is based on Bootstrap framework which enhances the speed of development. Also, it has an interactive demo for easy understanding. It supports different languages such as ARABIC, GERMAN, SPANISH, FRENCH, ITALIAN, RUSSIAN, CHINESE, and TURKISH.', 'multipurpose-blog' ); ?><p><br>
						<ol>
							<li><?php esc_html_e( 'Start','multipurpose-blog'); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizing','multipurpose-blog'); ?></a> <?php esc_html_e( 'your website.','multipurpose-blog'); ?> </li>
							<li><?php esc_html_e( 'Multipurpose Blog','multipurpose-blog'); ?> <a target="_blank" href="<?php echo esc_url( MULTIPURPOSE_BLOG_FREE_DOC ); ?>"><?php esc_html_e( 'Documentation','multipurpose-blog'); ?></a> </li>
						</ol>
                    </div>
              	</div>
				<div class="col-md-5">
					<div class="pad-box">
              			<img class="logo" src="<?php echo esc_url(get_template_directory_uri() . '/inc/dashboard/media/screenshot.png'); ?>"/>
              		 </div> 
              	</div>
            </div>
			<div class="col-md-12 text-block">
					<h2 class="dashboard-install-title"><?php esc_html_e( '2.) Premium Theme Information.','multipurpose-blog'); ?></h2>
					<div class="row">
						<div class="col-md-7">
							<img src="<?php echo esc_url(get_template_directory_uri() . '/inc/dashboard/media/responsive.png'); ?>" alt="">
							<div class="pad-box">
								<h3><?php esc_html_e( 'Pro Theme Description','multipurpose-blog'); ?></h3>
	                    		<p class="pad-box-p"><?php esc_html_e( 'The Multipurpose Blog WordPress Theme is designed specifically for bloggers. This Multipurpose Blog WordPress Theme to make blogs about photography, food, fashion, lifestyle, magazines, travel, sports, technology, personal blog, craft blog, creative blog, video blogs, tech review blogs, Food review blogs, gaming blog, sports blog, e-sport blog, business blog, Media blogs, entertainment blog, Podcasts, animals, pets, Wiki websites and as well as modern newspaper websites. It is one of the most popular blog WordPress theme that come with plenty of features & user-friendly customization options. It includes features such as quick page speed, responsive design, mobile-friendly, user-friendly, SEO & cross-browser compatibility translation ready and etc. Running and maintaining the blog can be a difficult task. Your knowledge, creativity and presentation method can decide how well the blog will perform. Since you are only going to be concerned with writing and posting quality content, you would want to have the best premium WP Blog theme that works swiftly. A glitchy and faulty theme is only going to force your attention elsewhere, this would never happen with our themes.', 'multipurpose-blog' ); ?><p>
	                    	</div>
						</div>
						<div class="col-md-5 install-plugin-right">
							<div class="pad-box">								
								<h3><?php esc_html_e( 'Pro Theme Features','multipurpose-blog'); ?></h3>
								<div class="dashboard-install-benefit">
									<ul>
										<li><?php esc_html_e( 'Car listing Shortcode with category','multipurpose-blog'); ?></li>
										<li><?php esc_html_e( 'Car listing Shortcode','multipurpose-blog'); ?></li>
										<li><?php esc_html_e( 'Multiple image feature for each property with slider.','multipurpose-blog'); ?></li>
										<li><?php esc_html_e( 'Brand Listing Section','multipurpose-blog'); ?></li>
										<li><?php esc_html_e( 'Car Brand(categories) Option','multipurpose-blog'); ?></li>
										<li><?php esc_html_e( 'Car Tags(categories) Option','multipurpose-blog'); ?></li>
										<li><?php esc_html_e( 'Testimonial listing.','multipurpose-blog'); ?></li>
										<li><?php esc_html_e( 'Testimonial shortcode.','multipurpose-blog'); ?></li>
										<li><?php esc_html_e( 'Social icons widget.','multipurpose-blog'); ?></li>
										<li><?php esc_html_e( 'Latest post with the image widget.','multipurpose-blog'); ?></li>
										<li><?php esc_html_e( 'Live customize editor for the About US section.','multipurpose-blog'); ?></li>
										<li><?php esc_html_e( 'Font Awesome integrated.','multipurpose-blog'); ?></li>
										<li><?php esc_html_e( 'Advanced Color options and color pallets.','multipurpose-blog'); ?></li>
										<li><?php esc_html_e( '100+ Font Family Options.','multipurpose-blog'); ?></li>
										<li><?php esc_html_e( 'Enable-Disable options on All sections.','multipurpose-blog'); ?></li>
										<li><?php esc_html_e( 'Well sanitized as per WordPress standards.','multipurpose-blog'); ?></li>
										<li><?php esc_html_e( 'Allow to set site title, tagline, logo.','multipurpose-blog'); ?></li>
										<li><?php esc_html_e( 'Sticky post & Comment threads.','multipurpose-blog'); ?></li>
										<li><?php esc_html_e( 'Left and Right Sidebar.','multipurpose-blog'); ?></li>
										<li><?php esc_html_e( 'Customizable Home Page.','multipurpose-blog'); ?></li>
										<li><?php esc_html_e( 'Footer Widgets & Editor style','multipurpose-blog'); ?></li>
										<li><?php esc_html_e( 'Gallery & Banner functionality','multipurpose-blog'); ?></li>
										<li><?php esc_html_e( 'Multiple inner page templates','multipurpose-blog'); ?></li>
										<li><?php esc_html_e( 'Full-width Template','multipurpose-blog'); ?></li>
										<li><?php esc_html_e( 'Custom Menu, Colors Editor','multipurpose-blog'); ?></li>
									</ul>
								</div>
							</div>
						</div>
				</div>
			</div>
		</div>
		<div class="dashboard__blocks">
			<div class="row">
				<div class="col-md-3">
					<h3><?php esc_html_e( 'Get Support','multipurpose-blog'); ?></h3>
					<ol>
						<li><a target="_blank" href="<?php echo esc_url( MULTIPURPOSE_BLOG_FREE_SUPPORT ); ?>"><?php esc_html_e( 'Free Theme Support','multipurpose-blog'); ?></a></li>
						<li><a target="_blank" href="<?php echo esc_url( MULTIPURPOSE_BLOG_PRO_SUPPORT ); ?>"><?php esc_html_e( 'Premium Theme Support','multipurpose-blog'); ?></a></li>
					</ol>
				</div>

				<div class="col-md-3">
					<h3><?php esc_html_e( 'Getting Started','multipurpose-blog'); ?></h3>
					<ol>
						<li><?php esc_html_e( 'Start','multipurpose-blog'); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizing','multipurpose-blog'); ?></a> <?php esc_html_e( 'your website.','multipurpose-blog'); ?> </li>
					</ol>
				</div>
				<div class="col-md-3">
					<h3><?php esc_html_e( 'Help Docs','multipurpose-blog'); ?></h3>
					<ol>
						<li><a target="_blank" href="<?php echo esc_url( MULTIPURPOSE_BLOG_FREE_DOC ); ?>"><?php esc_html_e( 'Free Theme Documentation','multipurpose-blog'); ?></a></li>
						<li><a target="_blank" href="<?php echo esc_url( MULTIPURPOSE_BLOG_PRO_DOC ); ?>"><?php esc_html_e( 'Premium Theme Documentation','multipurpose-blog'); ?></a></li>
					</ol>
				</div>
				<div class="col-md-3">
					<h3><?php esc_html_e( 'Buy Premium','multipurpose-blog'); ?></h3>
					<ol>
						<a href="<?php echo esc_url( MULTIPURPOSE_BLOG_BUY_PRO ); ?>"><?php esc_html_e('Buy Pro', 'multipurpose-blog'); ?></a>
					</ol>
				</div>
			</div>
		</div>
	</div>

<?php }?>
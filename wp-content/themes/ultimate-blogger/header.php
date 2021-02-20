<?php
/**
 * The Header for our theme.
 *
 * @package Ultimate Blogger
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open(); 
  } else { 
    do_action( 'wp_body_open' ); 
  } ?>
  <?php if(get_theme_mod('multipurpose_blog_preloader',true) || get_theme_mod( 'multipurpose_blog_display_preloader',true) != ''){ ?>
    <div class="frame">
      <div class="loader">
        <div class="dot-1"></div>
        <div class="dot-2"></div>
        <div class="dot-3"></div>
      </div>
    </div>
  <?php }?>
  <div class="<?php if( get_theme_mod( 'multipurpose_blog_sticky_header', false) != '') { ?> sticky-header"<?php } else { ?>close-sticky <?php } ?>">
    <div id="header">
      <div class="top_headbar py-2 text-lg-center">
        <div class="container">
          <div class="row">
            <div class="logo_bar col-lg-3 col-md-4 col-9">
              <div class="logo p-0">
                <?php if ( has_custom_logo() ) : ?>
                  <div class="site-logo"><?php the_custom_logo(); ?></div>
                <?php else: ?>
                  <?php $blog_info = get_bloginfo( 'name' ); ?>
                  <?php if ( ! empty( $blog_info ) ) : ?>
                    <?php if( get_theme_mod('multipurpose_blog_site_title_enable',true) != ''){ ?>
                      <?php if ( is_front_page() && is_home() ) : ?>
                        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                      <?php else : ?>
                        <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                      <?php endif; ?>
                    <?php }?>
                  <?php endif; ?>
                  <?php
                  $description = get_bloginfo( 'description', 'display' );
                  if ( $description || is_customize_preview() ) :
                    ?>
                    <?php if( get_theme_mod('multipurpose_blog_site_tagline_enable',true) != ''){ ?>
                      <p class="site-description">
                        <?php echo esc_html($description); ?>
                      </p>
                    <?php }?>
                  <?php endif; ?> 
                <?php endif; ?> 
              </div>
            </div>
            <div class=" col-lg-7 col-md-8 col-3 menus">
              <div class="menubox header">
                <?php 
                  if(has_nav_menu('primary')){ ?>
                  <div class="toggle-menu responsive-menu m-0 text-right <?php if( get_theme_mod( 'multipurpose_blog_display_fixed_header', false) != '') { ?> sticky-header"<?php } else { ?>close-sticky <?php } ?>">
                    <button role="tab" class="mobiletoggle" onclick="multipurpose_blog_responsive_menu_open()"><i class="fas fa-bars"></i><span class="screen-reader-text"><?php esc_html_e('Open Menu','ultimate-blogger'); ?></span>
                    </button>
                  </div>
                <?php }?>
                <div id="navbar-header" class="menu-brand">
                  <div id="search">
                    <?php get_search_form(); ?>
                  </div>
                  <nav id="site-navigation" class="primary-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'ultimate-blogger' ); ?>">
                    <?php 
                      if(has_nav_menu('primary')){ 
                        wp_nav_menu( array( 
                          'theme_location' => 'primary',
                          'container_class' => 'main-menu-navigation clearfix' ,
                          'menu_class' => 'clearfix',
                          'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav text-lg-left">%3$s</ul>',
                          'fallback_cb' => 'wp_page_menu',
                        ) );
                      } 
                    ?>                  
                  </nav>
                  <div class="socialbox text-center">
                    <?php if( get_theme_mod( 'multipurpose_blog_cont_facebook','' ) != '') { ?>
                      <a href="<?php echo esc_url( get_theme_mod( 'multipurpose_blog_cont_facebook','https://www.facebook.com/' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('multipurpose_blog_facebook_icon','fab fa-facebook-f')); ?> mx-2" aria-hidden="true"></i><span class="screen-reader-text"><?php esc_html_e( 'Facebook','ultimate-blogger' );?></span></a>
                    <?php } ?>
                    <?php if( get_theme_mod( 'multipurpose_blog_cont_twitter','' ) != '') { ?>
                      <a href="<?php echo esc_url( get_theme_mod( 'multipurpose_blog_cont_twitter','https://twitter.com/' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('multipurpose_blog_twitter_icon','fab fa-twitter')); ?> mx-2" aria-hidden="true"></i><span class="screen-reader-text"><?php esc_html_e( 'Twitter','ultimate-blogger' );?></span></a>
                    <?php } ?>
                    <?php if( get_theme_mod( 'multipurpose_blog_pinterest','' ) != '') { ?>
                      <a href="<?php echo esc_url( get_theme_mod( 'multipurpose_blog_pinterest','https://www.pinterest.com/' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('multipurpose_blog_pinterest_icon','fab fa-pinterest')); ?> mx-2" aria-hidden="true"></i><span class="screen-reader-text"><?php esc_html_e( 'Pinterest','ultimate-blogger' );?></span></a>
                    <?php } ?>
                    <?php if( get_theme_mod( 'multipurpose_blog_tumblr','' ) != '') { ?>
                      <a href="<?php echo esc_url( get_theme_mod( 'multipurpose_blog_tumblr','https://www.tumblr.com/' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('multipurpose_blog_tumblr_icon','fab fa-tumblr')); ?> mx-2" aria-hidden="true"></i><span class="screen-reader-text"><?php esc_html_e( 'Tumblr','ultimate-blogger' );?></span></a>
                    <?php } ?>       
                  </div>
                  <a href="javascript:void(0)" class="closebtn responsive-menu" onclick="multipurpose_blog_responsive_menu_close()"><i class="fas fa-times"></i><span class="screen-reader-text"><?php esc_html_e('Close Menu','ultimate-blogger'); ?></span></a>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-md-3 socialbox">
              <?php if( get_theme_mod( 'multipurpose_blog_cont_facebook','' ) != '') { ?>
                <a href="<?php echo esc_url( get_theme_mod( 'multipurpose_blog_cont_facebook','https://www.facebook.com/' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('multipurpose_blog_facebook_icon','fab fa-facebook-f')); ?> mx-2" aria-hidden="true"></i><span class="screen-reader-text"><?php esc_html_e( 'Facebook','ultimate-blogger' );?></span></a>
              <?php } ?>
              <?php if( get_theme_mod( 'multipurpose_blog_cont_twitter','' ) != '') { ?>
                <a href="<?php echo esc_url( get_theme_mod( 'multipurpose_blog_cont_twitter','https://twitter.com/' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('multipurpose_blog_twitter_icon','fab fa-twitter')); ?> mx-2" aria-hidden="true"></i><span class="screen-reader-text"><?php esc_html_e( 'Twitter','ultimate-blogger' );?></span></a>
              <?php } ?>
              <?php if( get_theme_mod( 'multipurpose_blog_pinterest','' ) != '') { ?>
                <a href="<?php echo esc_url( get_theme_mod( 'multipurpose_blog_pinterest','https://www.pinterest.com/' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('multipurpose_blog_pinterest_icon','fab fa-pinterest')); ?> mx-2" aria-hidden="true"></i><span class="screen-reader-text"><?php esc_html_e( 'Pinterest','ultimate-blogger' );?></span></a>
              <?php } ?>
              <?php if( get_theme_mod( 'multipurpose_blog_tumblr','' ) != '') { ?>
                <a href="<?php echo esc_url( get_theme_mod( 'multipurpose_blog_tumblr','https://www.tumblr.com/' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('multipurpose_blog_tumblr_icon','fab fa-tumblr')); ?> mx-2" aria-hidden="true"></i><span class="screen-reader-text"><?php esc_html_e( 'Tumblr','ultimate-blogger' );?></span></a>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
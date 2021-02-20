<?php
/**
 * The Header for our theme.
 *
 * @package multipurpose blog
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
  <?php if(get_theme_mod('multipurpose_blog_preloader',true) != '' || get_theme_mod( 'multipurpose_blog_display_preloader',true) != ''){ ?>
    <div class="frame w-100 h-100">
      <div class="loader">
        <div class="dot-1 rounded-circle "></div>
        <div class="dot-2 rounded-circle "></div>
        <div class="dot-3 rounded-circle "></div>
      </div>
    </div>
  <?php }?>
  <header role="banner">
    <a class="screen-reader-text skip-link" href="#skip_content"><?php esc_html_e( 'Skip to content', 'multipurpose-blog' ); ?></a>
    <div id="header">
      <?php if( get_theme_mod( 'multipurpose_blog_contact','' ) != '' || get_theme_mod( 'multipurpose_blog_email','' ) != '' || get_theme_mod( 'multipurpose_blog_cont_facebook','' ) != '' || get_theme_mod( 'multipurpose_blog_cont_twitter','' ) != '' || get_theme_mod( 'multipurpose_blog_pinterest','' ) != '' || get_theme_mod( 'multipurpose_blog_tumblr','' ) != '') { ?>
        <div class="top_headbar py-2">
          <div class="container">
            <div class="row">
              <div class="top-contact col-lg-2 col-md-2">
                <?php if( get_theme_mod( 'multipurpose_blog_contact','' ) != '') { ?>
                  <a class="call" href="tel:<?php echo esc_attr( get_theme_mod('multipurpose_blog_contact','' )); ?>"><i class="<?php echo esc_attr(get_theme_mod('multipurpose_blog_phone_icon','fa fa-phone')); ?> mr-1" aria-hidden="true"></i><?php echo esc_html( get_theme_mod('multipurpose_blog_contact','' )); ?><span class="screen-reader-text"><i class="<?php echo esc_attr(get_theme_mod('multipurpose_blog_phone_icon','fa fa-phone')); ?> mr-1" aria-hidden="true"></i><?php echo esc_html( get_theme_mod('multipurpose_blog_contact','' )); ?></span></a>
                 <?php } ?>
              </div>   
              <div class="top-contact col-lg-3 col-md-3">
                <?php if( get_theme_mod( 'multipurpose_blog_email','' ) != '') { ?>
                  <a class="email" href="mailto:<?php echo esc_attr( get_theme_mod('multipurpose_blog_email','') ); ?>"><i class="<?php echo esc_attr(get_theme_mod('multipurpose_blog_email_icon','fa fa-envelope')); ?> mr-1" aria-hidden="true"></i><?php echo esc_html( get_theme_mod('multipurpose_blog_email','') ); ?><span class="screen-reader-text"><i class="<?php echo esc_attr(get_theme_mod('multipurpose_blog_email_icon','fa fa-envelope')); ?> mr-1" aria-hidden="true"></i><?php echo esc_html( get_theme_mod('multipurpose_blog_email','') ); ?></span></a>
                <?php } ?>
              </div>
              <div class="col-lg-7 col-md-7 socialbox text-right">
                <?php if( get_theme_mod( 'multipurpose_blog_cont_facebook' ) != '') { ?>
                  <a href="<?php echo esc_url( get_theme_mod( 'multipurpose_blog_cont_facebook','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('multipurpose_blog_facebook_icon','fab fa-facebook-f')); ?> mx-2" aria-hidden="true"></i><span class="screen-reader-text"><?php esc_html_e( 'Facebook','multipurpose-blog' );?></span></a>
                <?php } ?>
                <?php if( get_theme_mod( 'multipurpose_blog_cont_twitter' ) != '') { ?>
                  <a href="<?php echo esc_url( get_theme_mod( 'multipurpose_blog_cont_twitter','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('multipurpose_blog_twitter_icon','fab fa-twitter')); ?> mx-2" aria-hidden="true"></i><span class="screen-reader-text"><?php esc_html_e( 'Twitter','multipurpose-blog' );?></span></a>
                <?php } ?>
                <?php if( get_theme_mod( 'multipurpose_blog_pinterest') != '') { ?>
                  <a href="<?php echo esc_url( get_theme_mod( 'multipurpose_blog_pinterest','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('multipurpose_blog_pinterest_icon','fab fa-pinterest')); ?> mx-2" aria-hidden="true"></i><span class="screen-reader-text"><?php esc_html_e( 'Pinterest','multipurpose-blog' );?></span></a>
                <?php } ?>
                <?php if( get_theme_mod( 'multipurpose_blog_tumblr') != '') { ?>
                  <a href="<?php echo esc_url( get_theme_mod( 'multipurpose_blog_tumblr','' ) ); ?>" ><i class="<?php echo esc_attr(get_theme_mod('multipurpose_blog_tumblr_icon','fab fa-tumblr')); ?> mx-2" aria-hidden="true"></i><span class="screen-reader-text"><?php esc_html_e( 'Tumblr','multipurpose-blog' );?></span></a>
                <?php } ?>
              </div>
              <div class="clearfix"></div>  
            </div>
          </div>
        </div>
      <?php }?>
      <div class="logo_bar">
        <div class="logo m-0 text-center py-lg-2 px-lg-0 p-0">
          <?php if ( has_custom_logo() ) : ?>
            <div class="site-logo"><?php the_custom_logo(); ?></div>
          <?php endif; ?>
          <?php $blog_info = get_bloginfo( 'name' ); ?>
          <?php if ( ! empty( $blog_info ) ) : ?>
            <?php if( get_theme_mod('multipurpose_blog_site_title_enable',true) != ''){ ?>
              <?php if ( is_front_page() && is_home() ) : ?>
                <h1 class="site-title m-0 p-0 text-center"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
              <?php else : ?>
                <p class="site-title m-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
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
        </div>
      </div>
      <?php 
        if(has_nav_menu('primary')){ ?>
        <div class="toggle-menu responsive-menu p-2 <?php if( get_theme_mod( 'multipurpose_blog_display_fixed_header', false) != '') { ?> sticky-header w-100"<?php } else { ?>close-sticky <?php } ?>">
          <button role="tab" class="mobiletoggle" onclick="multipurpose_blog_responsive_menu_open()"><i class="<?php echo esc_attr(get_theme_mod('multipurpose_blog_responsive_menu_open_icon','fas fa-bars')); ?>"></i><span class="screen-reader-text"><?php esc_html_e('Open Menu','multipurpose-blog'); ?></span>
          </button>
        </div>
      <?php }?>
      <div id="navbar-header" class="menu-brand">
        <div id="search">
          <?php get_search_form(); ?>
        </div>
        <div class="responsive-menu <?php if( get_theme_mod( 'multipurpose_blog_sticky_header',false) != '') { ?> sticky-header"<?php } else { ?>close-sticky <?php } ?>">
          <nav id="site-navigation" class="primary-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'multipurpose-blog' ); ?>">        
          <?php 
            if(has_nav_menu('primary')){
              wp_nav_menu( array( 
                'theme_location' => 'primary',
                'container_class' => 'main-menu-navigation clearfix' ,
                'menu_class' => 'clearfix',
                'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav m-0 pl-0 text-center">%3$s</ul>',
                'fallback_cb' => 'wp_page_menu',
              ) );
            } 
          ?>
          </nav>
        </div>
        <div class="top-contact">
          <?php if( get_theme_mod( 'multipurpose_blog_contact','' ) != '') { ?>
            <a class="call" href="tel:<?php echo esc_attr( get_theme_mod('multipurpose_blog_contact','' )); ?>"><i class="<?php echo esc_attr(get_theme_mod('multipurpose_blog_phone_icon','fa fa-phone')); ?> mr-1" aria-hidden="true"></i><?php echo esc_html( get_theme_mod('multipurpose_blog_contact','' )); ?><span class="screen-reader-text"><i class="<?php echo esc_attr(get_theme_mod('multipurpose_blog_phone_icon','fa fa-phone')); ?> mr-1" aria-hidden="true"></i><?php echo esc_html( get_theme_mod('multipurpose_blog_contact','' )); ?></span></a>
           <?php } ?>
        </div>   
        <div class="top-contact">
          <?php if( get_theme_mod( 'multipurpose_blog_email','' ) != '') { ?>
            <a class="email" href="mailto:<?php echo esc_attr( get_theme_mod('multipurpose_blog_email','') ); ?>"><i class="<?php echo esc_attr(get_theme_mod('multipurpose_blog_email_icon','fa fa-envelope')); ?> mr-1" aria-hidden="true"></i><?php echo esc_html( get_theme_mod('multipurpose_blog_email','') ); ?><span class="screen-reader-text"><i class="<?php echo esc_attr(get_theme_mod('multipurpose_blog_email_icon','fa fa-envelope')); ?> mr-1" aria-hidden="true"></i><?php echo esc_html( get_theme_mod('multipurpose_blog_email','') ); ?></span></a>
          <?php } ?>
        </div>
        <div class="socialbox text-center">
          <?php if( get_theme_mod( 'multipurpose_blog_cont_facebook' ) != '') { ?>
            <a href="<?php echo esc_url( get_theme_mod( 'multipurpose_blog_cont_facebook','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('multipurpose_blog_facebook_icon','fab fa-facebook-f')); ?> mx-2" aria-hidden="true"></i><span class="screen-reader-text"><?php esc_html_e( 'Facebook','multipurpose-blog' );?></span></a>
          <?php } ?>
          <?php if( get_theme_mod( 'multipurpose_blog_cont_twitter' ) != '') { ?>
            <a href="<?php echo esc_url( get_theme_mod( 'multipurpose_blog_cont_twitter','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('multipurpose_blog_twitter_icon','fab fa-twitter')); ?> mx-2" aria-hidden="true"></i><span class="screen-reader-text"><?php esc_html_e( 'Twitter','multipurpose-blog' );?></span></a>
          <?php } ?>
          <?php if( get_theme_mod( 'multipurpose_blog_pinterest') != '') { ?>
            <a href="<?php echo esc_url( get_theme_mod( 'multipurpose_blog_pinterest','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('multipurpose_blog_pinterest_icon','fab fa-pinterest')); ?> mx-2" aria-hidden="true"></i><span class="screen-reader-text"><?php esc_html_e( 'Pinterest','multipurpose-blog' );?></span></a>
          <?php } ?>
          <?php if( get_theme_mod( 'multipurpose_blog_tumblr') != '') { ?>
            <a href="<?php echo esc_url( get_theme_mod( 'multipurpose_blog_tumblr','' ) ); ?>" ><i class="<?php echo esc_attr(get_theme_mod('multipurpose_blog_tumblr_icon','fab fa-tumblr')); ?> mx-2" aria-hidden="true"></i><span class="screen-reader-text"><?php esc_html_e( 'Tumblr','multipurpose-blog' );?></span></a>
          <?php } ?>
        </div>
        <div class="clearfix"></div>
          <a href="javascript:void(0)" class="closebtn responsive-menu p-2 ml-4" onclick="multipurpose_blog_responsive_menu_close()"><i class="<?php echo esc_attr(get_theme_mod('multipurpose_blog_responsive_menu_close_icon','fas fa-times')); ?>"></i><span class="screen-reader-text"><?php esc_html_e('Close Menu','multipurpose-blog'); ?></span></a>
      </div>
    </div>
  </header>
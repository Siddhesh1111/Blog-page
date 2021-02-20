<?php
/**
 * The template for displaying home page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package multipurpose blog
 */

get_header(); ?>

<?php /** post section **/ ?>
<div class="container">
  <main id="skip_content" role="main">
    <?php
    $multipurpose_blog_left_right = get_theme_mod( 'multipurpose_blog_theme_options','Right Sidebar');
    if($multipurpose_blog_left_right == 'Left Sidebar'){ ?>
      <div class="row">
        <div class="col-lg-4 col-md-4"><?php get_sidebar(); ?></div>
        <div  id="our-services" class="services col-lg-8 col-md-8 my-3">
          <?php if ( have_posts() ) :
          /* Start the Loop */          
            while ( have_posts() ) : the_post();
              get_template_part( 'template-parts/content' ,get_post_format());           
            endwhile;
            else :
              get_template_part( 'no-results' ); 
            endif;
          ?>
          <div class="navigation">
            <?php
              // Previous/next page navigation.
              the_posts_pagination( array(
                  'prev_text'          => __( 'Previous page', 'multipurpose-blog' ),
                  'next_text'          => __( 'Next page', 'multipurpose-blog' ),
                  'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'multipurpose-blog' ) . ' </span>',
              ) );
            ?>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
    <?php }else if($multipurpose_blog_left_right == 'Right Sidebar'){ ?>
      <div class="row">
        <div id="our-services" class="services col-lg-8 col-md-8 my-3">
          <?php if ( have_posts() ) :
            /* Start the Loop */          
            while ( have_posts() ) : the_post();
              get_template_part( 'template-parts/content',get_post_format() );           
            endwhile;
            else :
              get_template_part( 'no-results' );
            endif; 
          ?>
          <div class="navigation">
            <?php
              // Previous/next page navigation.
              the_posts_pagination( array(
                  'prev_text'          => __( 'Previous page', 'multipurpose-blog' ),
                  'next_text'          => __( 'Next page', 'multipurpose-blog' ),
                  'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'multipurpose-blog' ) . ' </span>',
              ) );
            ?>
            <div class="clearfix"></div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4"><?php get_sidebar(); ?></div>
      </div>
    <?php }else if($multipurpose_blog_left_right == 'One Column'){ ?>
      <div id="our-services" class="services my-3">
        <?php if ( have_posts() ) :
          /* Start the Loop */          
          while ( have_posts() ) : the_post();
            get_template_part( 'template-parts/content',get_post_format() );           
          endwhile;
          else :
            get_template_part( 'no-results' );
          endif; 
        ?>
        <div class="navigation">
          <?php
            // Previous/next page navigation.
            the_posts_pagination( array(
                'prev_text'          => __( 'Previous page', 'multipurpose-blog' ),
                'next_text'          => __( 'Next page', 'multipurpose-blog' ),
                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'multipurpose-blog' ) . ' </span>',
            ) );
          ?>
          <div class="clearfix"></div>
        </div>
      </div>
    <?php }else if($multipurpose_blog_left_right == 'Three Columns'){ ?>
      <div class="row">
        <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-1'); ?></div>
        <div id="our-services" class="services col-lg-6 col-md-6 my-3">
          <?php if ( have_posts() ) :
            /* Start the Loop */          
            while ( have_posts() ) : the_post();
              get_template_part( 'template-parts/content',get_post_format() );           
            endwhile;
            else :
              get_template_part( 'no-results' ); 
            endif; 
          ?>
          <div class="navigation">
            <?php
              // Previous/next page navigation.
              the_posts_pagination( array(
                  'prev_text'          => __( 'Previous page', 'multipurpose-blog' ),
                  'next_text'          => __( 'Next page', 'multipurpose-blog' ),
                  'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'multipurpose-blog' ) . ' </span>',
              ) );
            ?>
            <div class="clearfix"></div>
          </div>
        </div>
        <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-2'); ?></div>
      </div>
    <?php }else if($multipurpose_blog_left_right == 'Four Columns'){ ?>
      <div class="row">
        <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-1'); ?></div>
        <div id="our-services" class="services col-lg-3 col-md-3 my-3">
          <?php if ( have_posts() ) :
            /* Start the Loop */          
            while ( have_posts() ) : the_post();
              get_template_part( 'template-parts/content',get_post_format() );           
            endwhile;
            else :
              get_template_part( 'no-results' ); 
            endif; 
          ?>
          <div class="navigation">
            <?php
              // Previous/next page navigation.
              the_posts_pagination( array(
                  'prev_text'          => __( 'Previous page', 'multipurpose-blog' ),
                  'next_text'          => __( 'Next page', 'multipurpose-blog' ),
                  'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'multipurpose-blog' ) . ' </span>',
              ) );
            ?>
            <div class="clearfix"></div>
          </div>
        </div>
        <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-2'); ?></div>
        <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-3'); ?></div>
      </div>
    <?php }else if($multipurpose_blog_left_right == 'Grid Layout'){ ?>
      <div id="our-services" class="our-services row my-3">
        <?php if ( have_posts() ) :
          /* Start the Loop */          
          while ( have_posts() ) : the_post();
            get_template_part( 'template-parts/grid-layout' );           
          endwhile;
          else :
            get_template_part( 'no-results' ); 
          endif; 
        ?>
        <div class="navigation">
          <?php
            // Previous/next page navigation.
            the_posts_pagination( array(
                'prev_text'          => __( 'Previous page', 'multipurpose-blog' ),
                'next_text'          => __( 'Next page', 'multipurpose-blog' ),
                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'multipurpose-blog' ) . ' </span>',
            ) );
          ?>
          <div class="clearfix"></div>
        </div>
      </div>
    <?php } else {?>
      <div class="row">
        <div id="our-services" class="services col-lg-8 col-md-8 my-3">
          <?php if ( have_posts() ) :
            /* Start the Loop */          
            while ( have_posts() ) : the_post();
              get_template_part( 'template-parts/content',get_post_format() );           
            endwhile;
            else :
              get_template_part( 'no-results' );
            endif; 
          ?>
          <div class="navigation">
            <?php
              // Previous/next page navigation.
              the_posts_pagination( array(
                  'prev_text'          => __( 'Previous page', 'multipurpose-blog' ),
                  'next_text'          => __( 'Next page', 'multipurpose-blog' ),
                  'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'multipurpose-blog' ) . ' </span>',
              ) );
            ?>
            <div class="clearfix"></div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4"><?php get_sidebar(); ?></div>
      </div>
    <?php }?>
  </main>
</div>
<div class="clearfix"></div>

<?php get_footer(); ?>
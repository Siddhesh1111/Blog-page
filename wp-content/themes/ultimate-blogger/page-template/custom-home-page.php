<?php
/**
 * Template Name: Custom Home Page
 */

get_header(); ?>

<main id="skip_content" role="main">
  <?php do_action( 'ultimate_blogger_before_slider_section' ); ?>
  <?php if( get_theme_mod('multipurpose_blog_slider_hide',false) != '' || get_theme_mod( 'multipurpose_blog_display_slider',false) != ''){ ?>
    <section id="slider" class="m-auto p-0 mw-auto">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"> 
        <?php $multipurpose_blog_slider_page = array();
          for ( $count = 1; $count <=4; $count++ ) {
            $mod = intval( get_theme_mod( 'multipurpose_blog_slidersettings_page' . $count ));
            if ( 'page-none-selected' != $mod ) {
              $multipurpose_blog_slider_page[] = $mod;
            }
          }
          if( !empty($multipurpose_blog_slider_page) ) :
          $args = array(
              'post_type' => 'page',
              'post__in' => $multipurpose_blog_slider_page,
              'orderby' => 'post__in'
          );
          $query = new WP_Query( $args );
          if ( $query->have_posts() ) :
            $i = 1;
        ?>     
        <div class="carousel-inner" role="listbox">
          <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
          <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
            <?php the_post_thumbnail(); ?>
            <div class="carousel-caption">
              <div class="inner_carousel">
                <h1><?php the_title(); ?></h1>
                <p><?php $excerpt = get_the_excerpt(); echo esc_html( multipurpose_blog_string_limit_words( $excerpt, esc_attr(get_theme_mod('multipurpose_blog_slider_excerpt_number','30')))); ?></p>
                <?php if (get_theme_mod( 'multipurpose_blog_show_slider_button',true) != '' || get_theme_mod( 'multipurpose_blog_display_slider_button',true) != ''){ ?>
                  <?php if( get_theme_mod('multipurpose_blog_slider_button_text','CONTINUE READING') != ''){ ?>
                    <div class="slide-button">
                      <a class="read-more" href="<?php echo esc_url( get_permalink() );?>"><?php echo esc_html( get_theme_mod('multipurpose_blog_slider_button_text',__('CONTINUE READING','ultimate-blogger'))); ?><span class="screen-reader-text"><?php esc_html_e( 'CONTINUE READING','ultimate-blogger' );?></span><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('multipurpose_blog_slider_button_text',__('CONTINUE READING','ultimate-blogger'))); ?></span></a>
                    </div> 
                  <?php } ?>
                <?php } ?>
              </div>
            </div>
          </div>
          <?php $i++; endwhile; 
          wp_reset_postdata();?>
        </div>
        <?php else : ?>
        <div class="no-postfound"></div>
          <?php endif;
        endif;?>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon  w-auto h-auto" aria-hidden="true"><i class="<?php echo esc_attr(get_theme_mod('multipurpose_blog_slider_previous_icon','fas fa-angle-left')); ?>"></i></span>
          <span class="screen-reader-text"><?php esc_html_e( 'Previous','ultimate-blogger' );?></span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon  w-auto h-auto" aria-hidden="true"><i class="<?php echo esc_attr(get_theme_mod('multipurpose_blog_slider_next_icon','fas fa-angle-right')); ?>"></i></span>
          <span class="screen-reader-text"><?php esc_html_e( 'Next','ultimate-blogger' );?></span>
        </a>
      </div>
      <div class="clearfix"></div>
    </section>
  <?php }?>
  <?php do_action( 'ultimate_blogger_after_slider_section' ); ?>

  <?php if( get_theme_mod('multipurpose_blog_photo_setting') != ''){ ?>
    <section id="photography" class="darkbox">
      <div class="container">
        <div class="row m-0">
          <?php 
          $multipurpose_blog_catData=  get_theme_mod('multipurpose_blog_photo_setting');
          if($multipurpose_blog_catData){
            $page_query = new WP_Query(array( 'category_name' => esc_html( $multipurpose_blog_catData ,'ultimate-blogger')));?>
            <?php while( $page_query->have_posts() ) : $page_query->the_post(); ?>
              <div class="col-lg-4 col-md-4"> 
                <div class="imagebox mb-5">
                  <?php if(has_post_thumbnail()) { ?><?php the_post_thumbnail(); ?><?php } ?>
                </div>
                <div class="contentbox w-100 my-0 mx-auto">
                  <a href="<?php the_permalink(); ?>"><h2 class="my-0 mx-auto p-3"><?php the_title(); ?></h2><span class="screen-reader-text"><?php the_title(); ?></span></a>
                  <hr class="photocat my-0 mx-auto w-12">
                </div>
              </div>
            <?php endwhile; 
            wp_reset_postdata();
          }
          ?>      
          <div class="clearfix"></div>
        </div>
      </div>
    </section>
  <?php }?>

  <?php do_action( 'ultimate_blogger_after_photo_section' ); ?>

  <?php /** Category section **/ ?>
  <div id="our_blog" class="py-4 px-0">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-8">
          <div class="row">
            <?php 
            $multipurpose_blog_catData=  get_theme_mod('ultimate_blogger_our_category');
            if($multipurpose_blog_catData){
              $page_query = new WP_Query(array( 'category_name' => esc_html( $multipurpose_blog_catData ,'ultimate-blogger')));?>
              <?php while( $page_query->have_posts() ) : $page_query->the_post(); ?>
                <div class="col-md-6 col-sm-6">
                  <div class="main-box mb-4 p-3">
                    <div class="cat-box m-0 pt-0">
                      <?php foreach((get_the_category()) as $category) { echo esc_html($category->cat_name) . ' '; } ?>           
                    </div>
                    <a href="<?php the_permalink(); ?>"><h3 class="p-0 m-0"><?php the_title(); ?></h3><span class="screen-reader-text"><?php the_title(); ?></span></a>
                    <div class="date-box m-0"><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_time( get_option( 'date_format' ) ); ?></a></div>
                    <div class="main_image">
                      <?php if(has_post_thumbnail()) { ?><?php the_post_thumbnail(); ?><?php } ?>
                    </div>
                    <p><?php the_excerpt(); ?></p>
                    <div class="blogbtn my-0 mx-auto py-3 px-0">
                      <a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small hvr-sweep-to-right"><?php esc_html_e('Read Full','ultimate-blogger'); ?><span class="screen-reader-text"><?php esc_html_e( 'Read Full', 'ultimate-blogger' );?></span></a>
                    </div>
                  </div>
                </div>
              <?php endwhile; 
              wp_reset_postdata();
            }?>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div id="sidebar"><?php dynamic_sidebar('home'); ?></div>
        </div>
      </div>
    </div>
  </div>

  <?php do_action( 'ultimate_blogger_after_blog_section' ); ?>

  <div class="container">
    <?php while ( have_posts() ) : the_post(); ?>
      <div class="new-text"><?php the_content(); ?></div>
    <?php endwhile; // end of the loop. ?>
  </div>
</main>

<?php get_footer(); ?>
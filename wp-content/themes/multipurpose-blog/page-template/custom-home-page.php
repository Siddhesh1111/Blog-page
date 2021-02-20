<?php
/**
 * Template Name: Custom Home Page
 */

get_header(); ?>

<main id="skip_content" role="main">
  <?php do_action( 'multipurpose_blog_before_slider' ); ?>

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
              <div class="inner_carousel text-center">
                <h1 class="text-left"><?php the_title(); ?></h1>
                <p class="text-left"><?php $excerpt = get_the_excerpt(); echo esc_html( multipurpose_blog_string_limit_words( $excerpt, esc_attr(get_theme_mod('multipurpose_blog_slider_excerpt_number','30')))); ?></p>
                <?php if (get_theme_mod( 'multipurpose_blog_show_slider_button',true) != '' || get_theme_mod( 'multipurpose_blog_display_slider_button',true) != ''){ ?>
                  <?php if( get_theme_mod('multipurpose_blog_slider_button_text','CONTINUE READING') != ''){ ?>
                    <div class="slide-button text-left mt-5">
                      <a class="read-more py-3 px-3" href="<?php echo esc_url( get_permalink() );?>"><?php echo esc_html( get_theme_mod('multipurpose_blog_slider_button_text',__('CONTINUE READING','multipurpose-blog'))); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('multipurpose_blog_slider_button_text',__('CONTINUE READING','multipurpose-blog'))); ?></span></a>
                    </div> 
                  <?php }?>
                <?php }?>
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
          <span class="carousel-control-prev-icon w-auto h-auto" aria-hidden="true"><i class="<?php echo esc_attr(get_theme_mod('multipurpose_blog_slider_previous_icon','fas fa-angle-left')); ?>"></i></span>
          <span class="screen-reader-text"><?php esc_html_e( 'Previous','multipurpose-blog' );?></span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon w-auto h-auto" aria-hidden="true"><i class="<?php echo esc_attr(get_theme_mod('multipurpose_blog_slider_next_icon','fas fa-angle-right')); ?>"></i></span>
          <span class="screen-reader-text"><?php esc_html_e( 'Next','multipurpose-blog' );?></span>
        </a>
      </div>
      <div class="clearfix"></div>
    </section>
  <?php }?>

  <?php do_action( 'multipurpose_blog_after_slider' ); ?>

  <?php if( get_theme_mod('multipurpose_blog_photo_setting') != ''){ ?>
    <section id="photography" class="darkbox text-center">
      <div class="container">
        <div class="row m-0">
          <?php 
          $multipurpose_blog_catData=  get_theme_mod('multipurpose_blog_photo_setting');
            if($multipurpose_blog_catData){
                $page_query = new WP_Query(array( 'category_name' => esc_html( $multipurpose_blog_catData ,'multipurpose-blog')));?>
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

  <?php do_action( 'multipurpose_blog_after_section1' ); ?>

  <div class="container">
    <?php while ( have_posts() ) : the_post(); ?>
      <div class="new-text"><?php the_content(); ?></div>
    <?php endwhile; // end of the loop. ?>
  </div>
</main>

<?php get_footer(); ?>
<?php
/**
 * The template part for displaying content
 * @package Ecommerce Solution
 * @subpackage multipurpose_blog
 * @since 1.0
 */
?>
<?php 
  $archive_year  = get_the_time('Y'); 
  $archive_month = get_the_time('m'); 
  $archive_day   = get_the_time('d'); 
?>
<article class="main-box text-left mb-4 p-3">
  <div class="layout3"> 
    <div class="main_image text-left mb-2">
      <?php if(has_post_thumbnail()) { ?><?php the_post_thumbnail(); ?><?php } ?>
    </div>
    <div class="cat-box text-left m-0 pt-0">
      <?php foreach((get_the_category()) as $category) { echo esc_html($category->cat_name) . ' '; } ?>           
    </div>
    <a href="<?php the_permalink(); ?>"><h2 class="text-left p-0 m-0"><?php the_title(); ?></h2><span class="screen-reader-text"><?php the_title(); ?></span></a>
    <?php if( get_theme_mod( 'multipurpose_blog_metafields_date',true) != '') { ?>
      <div class="date-box text-left m-0"><a href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day)); ?>"><?php the_time( get_option( 'date_format' ) ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></div>
    <?php }?>
    <p class="text-left"><?php $excerpt = get_the_excerpt(); echo esc_html( multipurpose_blog_string_limit_words( $excerpt, esc_attr(get_theme_mod('multipurpose_blog_post_excerpt_number','30')))); ?><?php echo esc_html( get_theme_mod('multipurpose_blog_post_discription_suffix','[...]') ); ?></p>
    <div class="blogbtn text-left my-0 mx-auto py-3 px-0">
      <a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small hvr-sweep-to-right"><?php esc_html_e('Read Full','ultimate-blogger'); ?>
      <span class="screen-reader-text"><?php esc_html_e( 'Read Full', 'ultimate-blogger' );?></span></a>
    </div>
  </div>
</article>
<?php
/**
 * The template part for displaying audio post
 *
 * @package multipurpose blog 
 * @subpackage multipurpose_blog
 * @since 1.0
 */
?>
<?php 
  $archive_year  = get_the_time('Y'); 
  $archive_month = get_the_time('m'); 
  $archive_day   = get_the_time('d'); 
?>
<?php
  $content = apply_filters( 'the_content', get_the_content() );
  $audio = false;

  // Only get audio from the content if a playlist isn't present.
  if ( false === strpos( $content, 'wp-playlist-script' ) ) {
    $audio = get_media_embedded_in_content( $content, array( 'audio' ) );
  }
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>    
  <h2 class="section-title"><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>"><?php the_title(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
  <?php if( get_theme_mod( 'multipurpose_blog_metafields_date',true) != '') { ?>
    <div class="date-box mb-3"><i class="<?php echo esc_attr(get_theme_mod('multipurpose_blog_post_date_icon','far fa-calendar-alt')); ?> mr-2"></i><a href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></div>  
  <?php }?>
  <div class="box-image">
    <?php
      if ( ! is_single() ) {
        // If not a single post, highlight the audio file.
        if ( ! empty( $audio ) ) {
          foreach ( $audio as $audio_html ) {
            echo '<div class="entry-audio">';
              echo $audio_html;
            echo '</div><!-- .entry-audio -->';
          }
        };
      };
    ?>
  </div>
  <div class="new-text">
    <p><?php $excerpt = get_the_excerpt(); echo esc_html( multipurpose_blog_string_limit_words( $excerpt, esc_attr(get_theme_mod('multipurpose_blog_post_excerpt_number','30')))); ?><?php echo esc_html( get_theme_mod('multipurpose_blog_post_discription_suffix','[...]') ); ?></p>
  </div>  
  <div class="cat-box mt-3">
    <i class="<?php echo esc_attr(get_theme_mod('multipurpose_blog_category_icon','fas fa-folder-open')); ?> mr-2"></i><?php the_category(); ?>
  </div>
  <div class="clearfix"></div>
</article>
<?php
/**
 * The template part for displaying Post
 *
 * @package Ultimate Blogger
 * @subpackage ultimate_blogger
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
  $video = false;

  // Only get video from the content if a playlist isn't present.
  if ( false === strpos( $content, 'wp-playlist-script' ) ) {
    $video = get_media_embedded_in_content( $content, array( 'video', 'object', 'embed', 'iframe' ) );
  }
?>
<article class="main-box mb-4 p-3">
  <div class="cat-box m-0 pt-0">
    <?php foreach((get_the_category()) as $category) { echo esc_html($category->cat_name) . ' '; } ?>           
  </div>
  <a href="<?php the_permalink(); ?>"><h2 class="p-0 m-0"><?php the_title(); ?></h2><span class="screen-reader-text"><?php the_title(); ?></span></a>
  <?php if( get_theme_mod( 'multipurpose_blog_metafields_date',true) != '') { ?>
    <div class="date-box m-0"><a href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day)); ?>"><?php the_time( get_option( 'date_format' ) ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></div>
  <?php }?>
  <div class="main_image">
    <?php
      if ( ! is_single() ) {

        // If not a single post, highlight the video file.
        if ( ! empty( $video ) ) {
          foreach ( $video as $video_html ) {
            echo '<div class="entry-video">';
              echo $video_html;
            echo '</div>';
          }
        };
      };
    ?>
  </div>
  <p><?php $excerpt = get_the_excerpt(); echo esc_html( multipurpose_blog_string_limit_words( $excerpt, esc_attr(get_theme_mod('multipurpose_blog_post_excerpt_number','30')))); ?><?php echo esc_html( get_theme_mod('multipurpose_blog_post_discription_suffix','[...]') ); ?></p>
  <div class="blogbtn my-0 mx-auto py-3 px-0">
    <a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small hvr-sweep-to-right"><?php esc_html_e('Read Full','ultimate-blogger'); ?>
    <span class="screen-reader-text"><?php esc_html_e( 'Read Full', 'ultimate-blogger' );?></span></a>
  </div>
</article>
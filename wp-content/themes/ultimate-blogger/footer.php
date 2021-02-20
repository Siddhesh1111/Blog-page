<?php
/**
 * The template for displaying the footer.
 * @package Ultimate Blogger
 */
?>
<?php if( get_theme_mod( 'multipurpose_blog_hide_show_scroll',true) != '' || get_theme_mod( 'multipurpose_blog_display_scrolltop', true) != '') { ?>
    <?php $multipurpose_blog_theme_lay = get_theme_mod( 'multipurpose_blog_footer_options','Right');
    if($multipurpose_blog_theme_lay == 'Left align'){ ?>
      <a href="#" id="scrollbutton" class="left"><i class="<?php echo esc_attr(get_theme_mod('multipurpose_blog_back_to_top_icon','fas fa-long-arrow-alt-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Scroll Up', 'ultimate-blogger' ); ?></span></a>
    <?php }else if($multipurpose_blog_theme_lay == 'Center align'){ ?>
      <a href="#" id="scrollbutton" class="center"><i class="<?php echo esc_attr(get_theme_mod('multipurpose_blog_back_to_top_icon','fas fa-long-arrow-alt-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Scroll Up', 'ultimate-blogger' ); ?></span></a>
    <?php }else{ ?>
      <a href="#" id="scrollbutton"><i class="<?php echo esc_attr(get_theme_mod('multipurpose_blog_back_to_top_icon','fas fa-long-arrow-alt-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Scroll Up', 'ultimate-blogger' ); ?></span></a>
    <?php }?>
<?php }?>
<footer role="contentinfo">
	<?php //Set widget areas classes based on user choice
    $multipurpose_blog_widget_areas = get_theme_mod('footer_widget_areas', '3');
    if ($multipurpose_blog_widget_areas == '3') {
      $cols = 'col-md-4';
    } elseif ($multipurpose_blog_widget_areas == '4') {
      $cols = 'col-md-3';
    } elseif ($multipurpose_blog_widget_areas == '2') {
      $cols = 'col-md-6';
    } else {
      $cols = 'col-md-12';
    }
  ?>
  <aside id="sidebar-footer" class="footer-wp" role="complementary" aria-label="<?php esc_attr_e( 'Footer', 'ultimate-blogger' ); ?>">
    <div class="container">
      <div class="row">
        <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
          <div class="sidebar-column <?php echo ( $cols ); ?>">
            <?php dynamic_sidebar( 'footer-1'); ?>
          </div>
        <?php endif; ?> 
        <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
          <div class="sidebar-column <?php echo ( $cols ); ?>">
            <?php dynamic_sidebar( 'footer-2'); ?>
          </div>
        <?php endif; ?> 
        <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
          <div class="sidebar-column <?php echo ( $cols ); ?>">
            <?php dynamic_sidebar( 'footer-3'); ?>
          </div>
        <?php endif; ?> 
        <?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
          <div class="sidebar-column <?php echo ( $cols ); ?>">
            <?php dynamic_sidebar( 'footer-4'); ?>
          </div>
        <?php endif; ?>
      </div> 
    </div>  
  </aside>
	<div class="inner">
  	<div class="copyright text-center">
    	<p><?php ultimate_blogger_link_credit(); ?> <?php echo esc_html( get_theme_mod( 'ultimate_blogger_footer_copy' ,__( ' By Buywptemplate','ultimate-blogger' ))); ?></p>
  	</div>
  	<div class="clear"></div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
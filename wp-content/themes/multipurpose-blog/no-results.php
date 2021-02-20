<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package multipurpose blog
 */
?>	
<header role="banner">
	<h2 class="entry-title"><?php echo esc_html(get_theme_mod('multipurpose_blog_no_search_result_heading',__('Nothing Found','multipurpose-blog')));?></h2>
</header>
<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
	<p><?php printf(esc_html__( 'Ready to publish your first post? Get started here.','multipurpose-blog'), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>
<?php elseif ( is_search() ) : ?>
	<p><?php echo esc_html(get_theme_mod('multipurpose_blog_no_search_result_text',__('Sorry, but nothing matched your search terms. Please try again with some different keywords.','multipurpose-blog')));?></p><br />
		<?php get_search_form(); ?>
<?php else : ?>
	<p><?php esc_html_e( 'Dont worry it happens to the best of us.', 'multipurpose-blog' ); ?></p><br />
	<div class="read-moresec my-1 mt-3">
		<a href="<?php echo esc_url( home_url() ); ?>" class="py-2 px-4 ml-0 text-uppercase"><?php esc_html_e( 'Back to Home Page', 'multipurpose-blog' ); ?><span class="screen-reader-text"><?php esc_html_e( 'Back to Home Page', 'multipurpose-blog' ); ?></span></a>
	</div>
<?php endif; ?>
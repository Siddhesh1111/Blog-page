<?php
/**
 * The template for displaying search forms in multipurpose blog
 *
 * @package multipurpose blog
 */
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php echo esc_html_x( 'Search for:', 'label', 'multipurpose-blog' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder','multipurpose-blog' ); ?>" value="<?php echo esc_attr( get_search_query()) ?>" name="s">
	</label>
	<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button','multipurpose-blog' ); ?>">
</form>
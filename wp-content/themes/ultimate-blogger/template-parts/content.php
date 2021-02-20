<?php
/**
 * The template part for displaying Post
 *
 * @package Ultimate Blogger
 * @subpackage ultimate_blogger
 * @since 1.0
 */
?>
<?php $multipurpose_blog_theme_lay = get_theme_mod( 'multipurpose_blog_post_layouts','Layout 1');
if($multipurpose_blog_theme_lay == 'Layout 1'){ 
  get_template_part('template-parts/Post-layouts/layout1'); 
}else if($multipurpose_blog_theme_lay == 'Layout 2'){ 
  get_template_part('template-parts/Post-layouts/layout2'); 
}else if($multipurpose_blog_theme_lay == 'Layout 3'){ 
  get_template_part('template-parts/Post-layouts/layout3'); 
}else{ 
  get_template_part('template-parts/Post-layouts/layout1'); 
}
<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package multipurpose blog
 */
get_header(); ?>

<main id="skip_content" role="main" class="content-blog py-3">
    <div class="container">
        <div class="page-content text-center">
            <h1><?php echo esc_html(get_theme_mod('multipurpose_blog_page_not_found_heading',__('404 Not Found','multipurpose-blog')));?></h1>
            <p class="text-404"><?php echo esc_html(get_theme_mod('multipurpose_blog_page_not_found_text',__('Looks like you have taken a wrong turn. Dont worry it happens to the best of us.','multipurpose-blog')));?></p>
            <?php if( get_theme_mod('multipurpose_blog_page_not_found_button','Back to Home Page') != ''){ ?>
                <div class="read-moresec my-1 mt-3">
                    <a href="<?php echo esc_url( home_url() ); ?>" class="button py-2 px-4 ml-0 text-uppercase"><?php echo esc_html(get_theme_mod('multipurpose_blog_page_not_found_button',__('Back to Home Page','multipurpose-blog')));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('multipurpose_blog_page_not_found_button',__('Back to Home Page','multipurpose-blog')));?></span></a>
                </div>
            <?php } ?>
        </div>
        <div class="clearfix"></div>
    </div>
</main>

<?php get_footer(); ?>
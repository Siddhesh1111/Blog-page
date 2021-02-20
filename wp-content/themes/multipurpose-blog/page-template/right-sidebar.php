<?php
/**
 * Template Name:Page with Right Sidebar
 */

get_header(); ?>

<?php do_action( 'multipurpose_blog_header_pageright' ); ?>

<div class="container">
    <main id="skip_content" role="main" class="middle-align">
        <div class="row">
    		<div class="col-lg-8 col-md-8">
                <div class="content-blog py-3">
                    <h1><?php the_title(); ?></h1>
        			<?php while ( have_posts() ) : the_post(); ?>
                        <?php the_post_thumbnail(); ?> 
                        <div class="new-text"><p><?php the_content();?></p></div>
                        
                        <?php
                        //If comments are open or we have at least one comment, load up the comment template
                            if ( comments_open() || '0' != get_comments_number() )
                                comments_template();
                        ?>
                    <?php endwhile; // end of the loop. ?>
                </div>
            </div>
            <div id="sidebar" class="col-lg-4 col-md-4">
    			<?php dynamic_sidebar('sidebar-2'); ?>
    		</div>
        </div>
        <div class="clear"></div>
    </main>
</div>

<?php do_action( 'multipurpose_blog_footer_pageright' ); ?>

<?php get_footer(); ?>
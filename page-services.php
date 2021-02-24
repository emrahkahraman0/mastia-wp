<?php 
/*Template Name: Services Page*/
get_header(); ?>

<div id="page_banner">

    <div class="container">
    
        <div class="page_banner">
        
            <div class="page_banner_title"><?php the_title(); ?></div>
            <div class="page_banner_href">
                <a href="<?php bloginfo('url'); ?>">Home</a> <span>></span> <span><?php the_title(); ?></span>
            </div>
        
        </div>
        <!-- page_banner -->

    </div>
    <!-- container -->

</div>
<!-- page_banner# -->

<?php get_template_part( 'templates/service', 'page' ); ?>

<?php get_template_part( 'templates/info', 'page' ); ?>

<?php get_footer(); ?>
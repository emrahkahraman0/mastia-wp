<?php 
/*Template Name: Contact Page*/
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

<?php if ( have_posts() ) : while (have_posts() ) : the_post(); ?>

<div id="our_contact">

    <div class="container">

        <div class="our_contact align-items row">

            <div class="our_contact_form col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <h6><?php the_title(); ?></h6>
                <?php the_content(); ?>
            </div>
            <!-- contact_form -->
            <div class="our_contact_map col-xl-6 col-lg-6 col-md-12 col-sm-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6146976.806107893!2d8.223663855457053!3d41.211886348932815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12d4fe82448dd203%3A0xe22cf55c24635e6f!2zxLB0YWx5YQ!5e0!3m2!1str!2str!4v1613046670593!5m2!1str!2str" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>

        </div>
        <!-- our_contact -->

    </div>
    <!-- container -->

</div>
<!-- our_contact# -->

<?php endwhile; else : ?>
    <p><?php esc_html_e('Aradığınız şey bizde yok kardeş!!!!'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
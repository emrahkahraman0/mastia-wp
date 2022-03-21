<?php 
/*Template Name: Faqs Page*/
get_header(); ?>

<div id="page_faqs">

    <div class="container">

        <div class="page_faqs">

            <div class="page_faqs_title">
                <?php the_title(); ?>
            </div>
            <!-- page_faqs_title -->
            <div class="page_faqs_link">
                <ul>
                    <li><a href="<?php bloginfo('url'); ?>">Home</a></li>
                    <li><span>></span></li>
                    <li><a href="<?php bloginfo('home'); ?>/faq">Faq</a></li>
                </ul>
            </div>
            <!-- page_faqs_link -->

        </div>
        <!-- page_faqs -->

    </div>
    <!-- container -->

</div>
<!-- page_faqs# -->

<div id="our_faqs">

    <div class="container">

    <?php if( have_rows('accordion_item') ): ?>

        <div class="our_faqs">

    <?php while( have_rows('accordion_item') ): the_row(); ?>

            <button class="accordion"><?php echo get_sub_field('accordion_heading'); ?></button>
            <div class="panel">
                <p><?php echo get_sub_field('accordion_desc'); ?></p>
            </div>
            <!-- accordion-1 -->

    <?php endwhile; ?>

        </div>
        <!-- our_faq -->

    <?php endif; ?>

    </div>
    <!-- container -->

</div>
<!-- our_faq# -->

<?php get_template_part( 'templates/info', 'page' ); ?>

<?php get_footer(); ?>
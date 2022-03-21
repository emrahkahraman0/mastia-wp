<?php get_header(); ?>

<div id="page_services_single">

    <div class="container">

        <div class="page_services_single">

            <div class="page_services_single_title">
                <?php the_title(); ?>
            </div>
            <!-- page_services_single_title -->
            <div class="page_services_single_link">
                <ul>
                    <li><a href="<?php bloginfo('url'); ?>">Home</a></li>
                    <li><span>></span></li>
                    <li><a href="<?php bloginfo('home'); ?>/services">Services</a></li>
                </ul>
            </div>
            <!-- page_services_single_link -->

        </div>
        <!-- page_services_single -->

    </div>
    <!-- container -->

</div>
<!-- page_services_single# -->

<div id="services_single">

    <div class="container">

        <div class="services_single align-item row">

            <?php if (have_posts()) : while(have_posts()) : the_post(); ?>

            <div class="services_single_image col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <?php if(has_post_thumbnail()): ?>
                    <img src="<?php the_post_thumbnail_url('large'); ?>" class="img-fluid">
                <?php endif; ?>
            </div>
            <!-- services_single_image -->
            <div class="services_single_text col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <h6><?php the_title(); ?></h6>
                    <p><?php the_content('', ''); ?></p>
            </div>
            <!-- services_single_text -->

            <?php endwhile; ?>
            <?php endif; ?>

        </div>
        <!-- services_single -->

    </div>
    <!-- container -->

</div>
<!-- services_single# -->

<div id="services_bottom">

    <div class="container">

        <div class="title">recent services</div>

        <div class="services_bottom owl-carousel owl-theme">

            <?php if(have_posts() ) : ?>
                <?php $loop = new WP_Query ( array('post_type' => 'service', 'post__ın' => array() ) ); ?>
                <?php while ($loop->have_posts()) : $loop->the_post(); ?>

                    <div class="services_bottom_item">
                        <?php if(has_post_thumbnail()): ?>
                            <img src="<?php the_post_thumbnail_url(''); ?>" class="img-fluid">
                        <?php endif; ?>
                        <h6><a href="<?php the_permalink(''); ?>"><?php the_title(); ?></a></h6>
                        <p><?php the_excerpt(); ?></p>
                        <button><a href="<?php the_permalink(''); ?>">read more</a></button>
                    </div>
                    <!-- services_bottom_item -->

                <?php endwhile; ?>
            <?php endif; ?>

        </div>
        <!-- services_bottom -->

    </div>
    <!-- container -->

</div>
<!-- services_bottom# -->

<?php get_footer(); ?>
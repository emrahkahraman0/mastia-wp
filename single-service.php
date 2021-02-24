<?php get_header(); ?>

<div id="page_banner">

    <div class="container">
    
        <div class="page_banner">
        
            <div class="page_banner_title"><?php the_title(); ?></div>
            <div class="page_banner_href">
                <a href="<?php bloginfo('url'); ?>">Home</a> <span>></span> <a href="<?php bloginfo('home'); ?>/services">services</a> <span>></span> <span><?php the_title(); ?></span>
            </div>
        
        </div>
        <!-- page_banner -->

    </div>
    <!-- container -->

</div>
<!-- page_banner# -->

<div id="service_detail">

    <div class="container">

        <div class="service_detail align-items row">

        <?php if (have_posts()) : while(have_posts()) : the_post(); ?>

            <div class="service_detail_image col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <?php if(has_post_thumbnail()): ?>
                    <img src="<?php the_post_thumbnail_url(''); ?>" class="img-fluid">
                <?php endif; ?>
            </div>
            <!-- service_detail_image -->
            <div class="service_detail_text col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <h6><?php the_title(); ?></h6>
                <p><?php the_content('', ''); ?></p>
            </div>
            <!-- service_detail_text -->

        <?php endwhile; endif; ?>

        </div>
        <!-- service_detail -->

    </div>
    <!-- container -->

</div>
<!-- service_detail# -->

<div id="services_bottom">

    <div class="container">

        <div class="services_bottom_owl owl-carousel owl-theme">

        <?php if(have_posts() ) : ?>
        <?php $loop = new WP_Query ( array('post_type' => 'service', 'post__ın' => array('67,69,71') ) ); ?>
        <?php while ($loop->have_posts()) : $loop->the_post(); ?>

            <div class="item">
                <?php if(has_post_thumbnail()): ?>
                    <img src="<?php the_post_thumbnail_url(''); ?>" class="img-fluid">
                <?php endif; ?>
                <h6><a href="<?php the_permalink(''); ?>"><?php the_title(); ?></a></h6>
                <p><?php the_excerpt(); ?></p>
                <button><a href="<?php the_permalink(''); ?>">read more</a></button>
            </div>
            <!-- item -->
        
        <?php endwhile; ?>
        <?php endif; ?>

        </div>
        <!-- services_bottom_owl -->

    </div>
    <!-- container -->

</div>
<!-- services_bottom# -->

<?php get_footer(); ?>
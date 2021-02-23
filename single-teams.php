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

<div id="team_detail">

    <div class="container">

        <div class="team_detail align-items row">

        <?php if (have_posts()) : while(have_posts()) : the_post(); ?>

            <div class="team_detail_image col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <?php if(has_post_thumbnail()): ?>
                    <img src="<?php the_post_thumbnail_url(''); ?>" class="img-fluid">
                <?php endif; ?>
            </div>
            <!-- team_detail_image -->
            <div class="team_detail_text col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <h6><?php the_title(); ?></h6>
                <p><?php the_content('', ''); ?></p>
            </div>
            <!-- team_detail_text -->

        <?php endwhile; endif; ?>

        </div>
        <!-- team_detail -->

    </div>
    <!-- container -->

</div>
<!-- team_detail# -->

<?php get_footer(); ?>
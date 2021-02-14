<?php get_header(); ?>

<div id="home-slider">

    <?php if( have_rows('home_slider_item') ): ?>

    <div class="home-slider-owl owl-carousel owl-theme">

    <?php while( have_rows('home_slider_item') ): the_row();
    
        //vars
        $slider_item_image = get_sub_field('slider_item_image');
        $slider_item_heading = get_sub_field('slider_item_heading');
        $slider_item_desc = get_sub_field('slider_item_desc');
        $slider_item_button = get_sub_field('slider_item_button');
        $slider_item_button_href = get_sub_field('slider_item_button_href');
    
    ?>

        <div class="item">
            <img src="<?php echo $slider_item_image; ?>" alt="">
            <div class="item-overlay">
                <h6><?php echo $slider_item_heading; ?></h6>
                <p><?php echo $slider_item_desc; ?></p>
                <button><a href="<?php echo $slider_item_button_href; ?>"><?php echo $slider_item_button; ?></a></button>
            </div>
            <!-- item-overlay -->
        </div>
        <!-- item -->

    <?php endwhile; ?>

    </div>
    <!-- home-slider-owl -->

    <?php endif; ?>

</div>
<!-- home-slider# -->

<div id="home_services">

    <div class="container">

    <?php if( have_rows('home_services_item') ): ?>

        <div class="home_services row">

        <?php while( have_rows('home_services_item') ): the_row(); ?>

            <div class="home_services_item col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <?php echo get_sub_field('home_services_icon'); ?>
                <h6><?php echo get_sub_field('home_services_heading'); ?></h6>
                <p><?php echo get_sub_field('home_services_desc'); ?></p>
            </div>
            <!-- home_services_item -->

        <?php endwhile; ?>

        </div>
        <!-- home_services -->

        <?php endif; ?>

    </div>
    <!-- container -->

</div>
<!-- home_services# -->

<div id="home_projects">

    <div class="container">

    <div class="title"><?php the_field('home_project_title'); ?></div>

    <?php if( have_rows('home_project_item') ): ?>

        <div class="home_projects_owl owl-carousel owl-theme">

        <?php while( have_rows('home_project_item') ): the_row(); ?>

            <div class="item">
                <a href="<?php echo get_sub_field('home_project_large'); ?>" data-lightbox="image-1" data-title="My caption">
                <img src="<?php echo get_sub_field('home_project_small'); ?>" class="img-fluid" alt="">
                <div class="item_overlay">
                    <div class="icon">
                        <i class="fal fa-plus fa-4x"></i>
                    </div>
                </div>
                <!-- item_overlay -->
                </a>
            </div>
            <!-- item -->

        <?php endwhile; ?>

        </div>
        <!-- home_projects_owl -->

    <?php endif; ?>

    </div>
    <!-- container -->

</div>
<!-- home_projects# -->

<div id="home_facts">

    <div class="container">

        <div class="home_facts row">

            <div class="home_facts_item col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="count"><?php the_field('fact_count_1'); ?></div>
                <h6><?php the_field('fact_text_1'); ?></h6>
            </div>
            <!-- home_facts_item -->
            <div class="home_facts_item col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="count"><?php the_field('fact_count_2'); ?></div>
                <h6><?php the_field('fact_text_2'); ?></h6>
            </div>
            <!-- home_facts_item -->
            <div class="home_facts_item col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="count"><?php the_field('fact_count_3'); ?></div>
                <h6><?php the_field('fact_text_3'); ?></h6>
            </div>
            <!-- home_facts_item -->
            <div class="home_facts_item col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="count"><?php the_field('fact_count_4'); ?></div>
                <h6><?php the_field('fact_text_4'); ?></h6>
            </div>
            <!-- home_facts_item -->

        </div>
        <!-- home_facts -->

    </div>
    <!-- container -->

</div>
<!-- home_facts# -->

<div id="home_blog">

    <div class="container">

    <div class="title">from blog</div>

        <div class="home_blog_owl owl-carousel owl-theme">

        <?php query_posts('showposts=3'); ?> 

        <?php while (have_posts()) : the_post(); ?> 

            <div class="item">
                <?php if(has_post_thumbnail()): ?>
                    <img src="<?php the_post_thumbnail_url('small'); ?>" class="img-fluid">
                <?php endif; ?>
                <div class="item_desc">
                    <h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                    <div class="date"><?php the_time('j F Y') ?></div>
                    <p><?php the_excerpt(); ?></p>
                    <button><a href="<?php the_permalink(); ?>">read more</a></button>
                </div>
            </div>
            <!-- item -->

        <?php endwhile;?>

        </div>
        <!-- home_blog-owl -->

    </div>
    <!-- container -->

</div>
<!-- home_blog# -->

<?php get_template_part( 'templates/info', 'page' ); ?>

<?php get_footer(); ?>
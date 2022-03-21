<?php get_header();

$services_href = get_field('services_href');
$projects_href = get_field('projects_href');
$blogs_href = get_field('blogs_href');

?>

<div id="home_slider">

<?php if( have_rows('home_slider') ): ?>

    <div class="home_slider owl-carousel owl-theme">

    <?php while( have_rows('home_slider') ): the_row();
    
        //vars
        $home_slider_image = get_sub_field('home_slider_image');
        $home_slider_heading = get_sub_field('home_slider_heading');
        $home_slider_desc = get_sub_field('home_slider_desc');
        $home_slider_button = get_sub_field('home_slider_button');
        $home_slider_href = get_sub_field('home_slider_href');
    
    ?>

        <div class="home_slider_item">
            <img src="<?php echo $home_slider_image; ?>" class="img-fluid" alt="">
            <div class="slider_caption">
                <h6><?php echo $home_slider_heading; ?></h6>
                <p><?php echo $home_slider_desc; ?></p>
                <button><a href="<?php echo $home_slider_href; ?>"><?php echo $home_slider_button; ?></a></button>
            </div>
            <!-- slider_caption -->
        </div>
        <!-- home_slider_item -->

        <?php endwhile; ?>

    </div>
    <!-- home_slider -->

    <?php endif; ?>

</div>
<!-- home_slider# -->

<div id="home_services">

    <div class="container">

        <div class="title">recent services</div>

        <div class="home_services owl-carousel owl-theme">

                <?php if(have_posts() ) : ?>
                <?php $loop = new WP_Query ( array('post_type' => 'service', 'post__ın' => array() ) ); ?>
                <?php while ($loop->have_posts()) : $loop->the_post(); ?>

                    <div class="home_services_item">
                        <?php if(has_post_thumbnail()): ?>
                            <img src="<?php the_post_thumbnail_url(''); ?>" class="img-fluid">
                        <?php endif; ?>
                        <h6><a href="<?php the_permalink(''); ?>"><?php the_title(); ?></a></h6>
                        <p><?php the_excerpt(); ?></p>
                        <button><a href="<?php the_permalink(''); ?>">read more</a></button>
                    </div>
                    <!-- home_services_item -->

                <?php endwhile; ?>
                    <?php wp_reset_query(); ?>
                <?php endif; ?>

        </div>
        <!-- home_services -->

        <div class="all_button">
            <?php if($services_href): ?>
                <button><a href="<?php echo $services_href['url']; ?>" target="<?php echo $services_href['target']; ?>">all services</a></button>
            <?php endif; ?>
        </div>
        <!-- all_button -->

    </div>
    <!-- container -->

</div>
<!-- home_services# -->

<div id="home_about">

    <div class="container">

        <div class="home_about align-item row">

            <div class="home_about_image col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <img src="<?php the_field('home_about_image') ?>" class="img-fluid" alt="">
            </div>
            <!-- home_about_image -->
            <div class="home_about_text col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <h6><?php the_field('home_about_heading') ?></h6>
                <p><?php the_field('home_about_desc') ?></p>
                <button><a href="<?php the_field('home_about_href') ?>" target="_blank">about us</a></button>
            </div>
            <!-- home_about_text -->

        </div>
        <!-- home_about -->

    </div>
    <!-- container -->

</div>
<!-- home_about# -->

<div id="home_projects">

    <div class="container">

        <div class="title">recent projects</div>

        <div class="home_projects owl-carousel owl-theme">

            <?php if(have_posts() ) : ?>
            <?php $loop = new WP_Query ( array('post_type' => 'project', 'post__ın' => array() ) ); ?>
            <?php while ($loop->have_posts()) : $loop->the_post(); ?>

            <div class="home_projects_item">
                <?php if(has_post_thumbnail()): ?>
                    <img src="<?php the_post_thumbnail_url(''); ?>" class="img-fluid">
                <?php endif; ?>
                <h6><a href="<?php the_permalink(''); ?>"><?php the_title(); ?></a></h6>
                <p><?php the_excerpt(); ?></p>
                <button><a href="<?php the_permalink(''); ?>">read more</a></button>
            </div>
            <!-- home_projects_item -->

            <?php endwhile; ?>
                <?php wp_reset_query(); ?>
            <?php endif; ?>

        </div>
        <!-- home_projects -->

        <div class="all_button">
            <?php if($projects_href): ?>
                <button><a href="<?php echo $projects_href['url']; ?>" target="<?php echo $projects_href['target']; ?>">all projects</a></button>
            <?php endif; ?>
        </div>
        <!-- all_button -->

    </div>
    <!-- container -->

</div>
<!-- home_projects# -->

<div id="home_counter" style="width: 100%; padding: 50px 0 50px 0; background: linear-gradient( to bottom,rgba(38,161,228, 0.7),rgba(38,161,228, 0.7) ),url(<?php the_field('counter_bg'); ?>); background-size: cover; background-position: center;">

    <div class="container">

        <div class="home_counter row">

            <div class="home_counter_item col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                <h6 class="count"><?php the_field('count_1'); ?></h6>
                <p><?php the_field('heading_1'); ?></p>
            </div>
            <!-- home_counter_item -->
            <div class="home_counter_item col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                <h6 class="count"><?php the_field('count_2'); ?></h6>
                <p><?php the_field('heading_2'); ?></p>
            </div>
            <!-- home_counter_item -->
            <div class="home_counter_item col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                <h6 class="count"><?php the_field('count_3'); ?></h6>
                <p><?php the_field('heading_3'); ?></p>
            </div>
            <!-- home_counter_item -->
            <div class="home_counter_item col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                <h6 class="count"><?php the_field('count_4'); ?></h6>
                <p><?php the_field('heading_4'); ?></p>
            </div>
            <!-- home_counter_item -->

        </div>
        <!-- home_counter -->

    </div>
    <!-- container -->

</div>
<!-- home_counter# -->

<div id="home_blog">

    <div class="container">

        <div class="title">from blog</div>

        <div class="home_blog owl-carousel owl-theme">

            <?php query_posts('showposts=4'); ?>
            <?php while (have_posts()) : the_post(); ?>

            <div class="home_blog_item">
                <?php if(has_post_thumbnail()): ?>
                    <img src="<?php the_post_thumbnail_url('large'); ?>" class="img-fluid">
                <?php endif; ?>
                <h6><a href="<?php the_permalink(''); ?>"><?php the_title(); ?></a></h6>
                <div class="blog_desc">
                    <div class="date">
                        <i class="icon-calendar"></i><span><?php the_time("F j Y"); ?> </span>
                    </div>
                    <div class="author">
                        <i class="icon-user"></i><span><?php the_author(''); ?></span>
                    </div>
                </div>
                <!-- blog_desc -->
                <p><?php the_excerpt(); ?></p>
                <button><a href="<?php the_permalink(''); ?>">read more</a></button>
            </div>
            <!-- home_blog_item -->

            <?php endwhile;?>

        </div>
        <!-- home_blog -->

        <div class="all_button">
            <?php if($blogs_href): ?>
                <button>
                    <a href="<?php echo $blogs_href['url']; ?>" target="<?php echo $blogs_href['target']; ?>">all blogs</a>
                </button>
            <?php endif; ?>
        </div>
        <!-- all_button -->

    </div>
    <!-- container -->

</div>
<!-- home_blog# -->

<?php get_template_part( 'templates/info', 'page' ); ?>

<?php get_footer(); ?>
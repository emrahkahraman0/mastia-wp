<?php 
/*Template Name: About Page*/
get_header(); ?>

<div id="page_about">

    <div class="container">

        <div class="page_about">

            <div class="page_about_title">
                <?php the_title(); ?>
            </div>
            <!-- page_about_title -->
            <div class="page_about_link">
                <ul>
                    <li><a href="<?php bloginfo('url'); ?>">Home</a></li>
                    <li><span>></span></li>
                    <li><a href="<?php bloginfo('home'); ?>/about-us">about us</a></li>
                </ul>
            </div>
            <!-- page_about_link -->

        </div>
        <!-- page_about -->

    </div>
    <!-- container -->

</div>
<!-- page_about# -->

<div id="about_info">

    <div class="container">

        <div class="about_info align-item row">

            <div class="about_info_image col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <img src="<?php the_field('about_image') ?>"class="img-fluid" alt="">
            </div>
            <!-- about_info_image -->
            <div class="about_info_text col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <h6><?php the_field('about_heading') ?></h6>
                <p><?php the_field('about_desc') ?></p>
                <button><a href="<?php the_field('about_href') ?>" target="_blank">contact us</a></button>
            </div>
            <!-- about_info_text -->

        </div>
        <!-- about_info -->

    </div>
    <!-- container -->

</div>
<!-- about_info# -->

<div id="about_facts" style="width: 100%; padding: 70px 0 70px 0; background: linear-gradient( to bottom,rgba(50,50,50, 0.7),rgba(50,50,50, 0.7) ),url(<?php the_field('fact_bg'); ?>); background-size: cover; background-position: center;">

    <div class="container">

        <div class="about_facts row">

            <div class="about_facts_item col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="fact_image">
                    <img src="<?php the_field('fact_image_1'); ?>" class="img-fluid" alt="">
                </div>
                <!-- fact_image -->
                <h6><?php the_field('fact_heading_1'); ?></h6>
                <p><?php the_field('fact_desc_1'); ?></p>
            </div>
            <!-- about_facts_item -->
            <div class="about_facts_item col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="fact_image">
                    <img src="<?php the_field('fact_image_2'); ?>" class="img-fluid" alt="">
                </div>
                <!-- fact_image -->
                <h6><?php the_field('fact_heading_2'); ?></h6>
                <p><?php the_field('fact_desc_2'); ?></p>
            </div>
            <!-- about_facts_item -->
            <div class="about_facts_item col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="fact_image">
                    <img src="<?php the_field('fact_image_3'); ?>" class="img-fluid" alt="">
                </div>
                <!-- fact_image -->
                <h6><?php the_field('fact_heading_3'); ?></h6>
                <p><?php the_field('fact_desc_3'); ?></p>
            </div>
            <!-- about_facts_item -->

        </div>
        <!-- about_facts -->

    </div>
    <!-- container -->

</div>
<!-- about_facts# -->

<div id="mission_vission">

    <div class="container">

        <div class="title">mission & vission</div>

        <div class="mission_vission row">

            <div class="mission col-xl-6 col-lg-6 col-md-6 col-sm-6">
                <div class="icon">
                    <i class="icon-award"></i>
                </div>
                <!-- icon -->
                <div class="text">
                    <h6><?php the_field('mission_heading'); ?></h6>
                    <p><?php the_field('mission_desc'); ?></p>
                </div>
                <!-- text -->
            </div>
            <!-- mission -->
            <div class="vission col-xl-6 col-lg-6 col-md-6 col-sm-6">
                <div class="icon">
                    <i class="icon-award-empty"></i>
                </div>
                <!-- icon -->
                <div class="text">
                    <h6><?php the_field('vission_heading'); ?></h6>
                    <p><?php the_field('vission_desc'); ?></p>
                </div>
                <!-- text -->
            </div>
            <!-- vission -->

        </div>
        <!-- mission_vission -->

    </div>
    <!-- container -->

</div>
<!-- mission_vission# -->

<div id="about_clients" style="width: 100%; padding: 70px 0 70px 0; background: linear-gradient( to bottom,rgba(50,50,50, 0.7),rgba(50,50,50, 0.7) ),url(<?php the_field('client_bg'); ?>); background-size: cover; background-position: center;"">

    <div class="container">

        <h6><?php the_field('client_title'); ?></h6>

        <?php if( have_rows('client_item') ): ?>

        <div class="about_clients owl-carousel owl-theme">

            <?php while( have_rows('client_item') ): the_row(); ?>

            <div class="about_clients_item">
                <img src="<?php echo get_sub_field('client_image'); ?>"class="img-fluid" alt="">
                <div class="client_desc">
                    <p><?php echo get_sub_field('client_desc'); ?></p>
                    <h4><?php echo get_sub_field('client_author'); ?></h4>
                    <h5><?php echo get_sub_field('client_job'); ?></h5>
                </div>
                <!-- client_desc -->
            </div>
            <!-- about_clients_item -->

            <?php endwhile; ?>

        </div>
        <!-- about_clients -->

        <?php endif; ?>

    </div>
    <!-- container -->

</div>
<!-- about_clients# -->

<div id="about_why">

    <div class="container">

        <div class="about_why row">

            <div class="about_why_accordion col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <h6><?php the_field('why_accordion_heading'); ?></h6>

                <button class="accordion"><?php the_field('accordion_heading_1'); ?></button>
                <div class="panel">
                    <p><?php the_field('accordion_desc_1'); ?></p>
                </div>
                <!-- accordion-1 -->
                <button class="accordion"><?php the_field('accordion_heading_2'); ?></button>
                <div class="panel">
                    <p><?php the_field('accordion_desc_2'); ?></p>
                </div>
                <!-- accordion-1 -->
                <button class="accordion"><?php the_field('accordion_heading_3'); ?></button>
                <div class="panel">
                    <p><?php the_field('accordion_desc_3'); ?></p>
                </div>
                <!-- accordion-1 -->
                <button class="accordion"><?php the_field('accordion_heading_4'); ?></button>
                <div class="panel">
                    <p><?php the_field('accordion_desc_4'); ?></p>
                </div>
                <!-- accordion-1 -->
            </div>
            <!-- about_why_accordion -->
            <div class="about_why_text col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <h6><?php the_field('why_text_heading'); ?></h6>
                <p><?php the_field('why_text_desc'); ?></p>
            </div>
            <!-- about_why_text -->

        </div>
        <!-- about_why -->

    </div>
    <!-- container -->

</div>
<!-- about_why# -->

<?php get_template_part( 'templates/info', 'page' ); ?>

<?php get_footer(); ?>
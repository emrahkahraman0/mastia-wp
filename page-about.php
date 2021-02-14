<?php 
/*Template Name: About Page*/
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

<div id="about_info">

    <div class="container">

        <div class="about_info align-items row">

            <div class="about_info_image col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <img src="<?php the_field('about_info_image') ?>" class="img-fluid" alt="">
            </div>
            <!-- about_info_image -->
            <div class="about_info_text col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <h6><?php the_field('about_info_heading') ?></h6>
                <p><?php the_field('about_info_desc') ?></p>
                <button><a href="<?php the_field('about_info_href') ?>"><?php the_field('about_info_button') ?></a></button>
            </div>
            <!-- about_info_text -->

        </div>
        <!-- about_info -->

    </div>
    <!-- container -->

</div>
<!-- about_info# -->

<div id="about_facts" style="width: 100%; padding: 80px 0 80px 0; background: linear-gradient( rgba(75, 75, 75, .7), rgba(75, 75, 75, .7)), url(<?php the_field('about_facts_bg'); ?>);
background-size: cover; background-position: center;">

    <div class="container">

        <div class="about_facts row">

            <div class="about_facts_item col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="icon"><?php the_field('fact_icon_1'); ?></div>
                <h6><?php the_field('fact_heading_1'); ?></h6>
                <p><?php the_field('fact_desc_1'); ?></p>
            </div>
            <!-- about_facts_item -->
            <div class="about_facts_item col-xl-4 col-lg-4 col-md-6 col-sm-6">
            <div class="icon"><?php the_field('fact_icon_2'); ?></div>
                <h6><?php the_field('fact_heading_2'); ?></h6>
                <p><?php the_field('fact_desc_2'); ?></p>
            </div>
            <!-- about_facts_item -->
            <div class="about_facts_item col-xl-4 col-lg-4 col-md-6 col-sm-6">
            <div class="icon"><?php the_field('fact_icon_3'); ?></div>
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

<div id="about_why">

    <div class="container">

        <div class="about_why row">
 
            <div class="about_why_accordion col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <h6><?php the_field('about_accordion_heading'); ?></h6>

                <button class="accordion"><?php the_field('accordion_heading_1'); ?></button>
                <div class="panel">
                    <p><?php the_field('accordion_desc_1'); ?></p>
                </div>
                <!-- accordion_item -->
                <button class="accordion"><?php the_field('accordion_heading_2'); ?></button>
                <div class="panel">
                    <p><?php the_field('accordion_desc_2'); ?></p>
                </div>
                <!-- accordion_item -->
                <button class="accordion"><?php the_field('accordion_heading_3'); ?></button>
                <div class="panel">
                    <p><?php the_field('accordion_desc_3'); ?></p>
                </div>
                <!-- accordion_item -->
                <button class="accordion"><?php the_field('accordion_heading_4'); ?></button>
                <div class="panel">
                    <p><?php the_field('accordion_desc_4'); ?></p>
                </div>
                <!-- accordion_item -->

            </div>
            <!-- about_why_accordion -->
            <div class="about_why_text col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <h6><?php the_field('about_why_heading'); ?></h6>
                <p><?php the_field('about_why_desc'); ?></p>
            </div>
            <!-- about_why_text -->

        </div>
        <!-- about_why -->

    </div>
    <!-- container -->

</div>
<!-- abouy_why# -->

<div id="about_clients" style="width: 100%; padding: 80px 0 80px 0; background: linear-gradient( rgba(75, 75, 75, .7), rgba(75, 75, 75, .7)), url(<?php the_field('about_client_bg'); ?>);
background-size: cover; background-position: center;">

    <div class="container">

    <h6><?php the_field('about_client_heading'); ?></h6>

    <?php if( have_rows('about_client_item') ): ?>

        <div class="about_clients_owl owl-carousel owl-theme">

        <?php while( have_rows('about_client_item') ): the_row(); ?>

            <div class="item">
                <div class="item-image">
                    <img src="<?php echo get_sub_field('client_image'); ?>" class="img-fluid" alt="">
                </div>
                <!-- item-image -->
                <div class="item-text">
                    <p><?php echo get_sub_field('client_desc'); ?></p>
                    <h4><?php echo get_sub_field('client_name'); ?></h4>
                    <h5><?php echo get_sub_field('client_job'); ?></h5>
                </div>
                <!-- item-text -->
            </div>
            <!-- item -->

        <?php endwhile; ?>

        </div>
        <!-- about_clients_owl -->

        <?php endif; ?>

    </div>
    <!-- container -->

</div>
<!-- about_clients# -->

<div id="about_team">

    <div class="container">

    <h6><?php the_field('about_team_heading'); ?></h6>

    <?php if( have_rows('team_item') ): ?>

        <div class="about_team row">

        <?php while( have_rows('team_item') ): the_row();
    
        //vars
        $team_image = get_sub_field('team_image');
        $team_name = get_sub_field('team_name');
        $slider_item_desc = get_sub_field('slider_item_desc');
        $team_job = get_sub_field('team_job');
    
        ?>

            <div class="about_team_item col-xl-3 col-lg-4 col-md-6 col-sm-12">
                <img src="<?php echo $team_image; ?>" class="img-fluid" alt="">
                <h4><?php echo $team_name; ?></h4>
                <h5><?php echo $team_job; ?></h5>
            </div>
            <!-- about_team_item -->

        <?php endwhile; ?>

        </div>
        <!-- about_team -->

        <?php endif; ?>

    </div>
    <!-- container -->

</div>
<!-- about_team -->

<?php get_template_part( 'templates/info', 'page' ); ?>

<?php get_footer(); ?>
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

<div id="our_services">

    <div class="container">

    <div class="title"><?php the_title(); ?></div>

    <?php if( have_rows('services_item') ): ?>

        <div class="our_services row">

        <?php while( have_rows('services_item') ): the_row();
    
        //vars
        $services_image = get_sub_field('services_image');
        $services_heading = get_sub_field('services_heading');
        $services_desc = get_sub_field('services_desc');
        $services_href = get_sub_field('services_href');
    
        ?>

            <div class="our_services_item col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <img src="<?php echo $services_image; ?>" class="img-fluid">
                <h6><a href="<?php echo $services_href; ?>"><?php echo $services_heading; ?></a></h6>
                <p><?php echo $services_desc; ?></p>
                <button><a href="<?php echo $services_href; ?>">read more</a></button>
            </div>
            <!-- our_services_item -->

        <?php endwhile; ?>

        </div>
        <!-- our_services -->

        <?php endif; ?>

    </div>
    <!-- container -->

</div>
<!-- our_services# -->

<?php get_template_part( 'templates/info', 'page' ); ?>

<?php get_footer(); ?>
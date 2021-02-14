<?php 
/*Template Name: Projects Page*/
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

<div id="our_projects">

    <div class="container">

    <div class="title"><?php the_field('our_projects_heading'); ?></div>

    <?php if( have_rows('project_item') ): ?>

        <div class="our_projects row">

        <?php while( have_rows('project_item') ): the_row();

            $project_href = get_field('project_href');
    
            //vars
            $project_image_small = get_sub_field('project_image_small');
            $project_image_large = get_sub_field('project_image_large');
            $project_name = get_sub_field('project_name');
            $slider_item_button = get_sub_field('slider_item_button');
            $project_href = get_sub_field('project_href');
        ?>

            <div class="our_projects_item col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <a href="<?php echo $project_image_large; ?>" data-lightbox="image-1" data-title="My caption">
                <img src="<?php echo $project_image_small; ?>" class="img-fluid">
                <div class="project_name">
                    <a href="<?php echo $project_href['url']; ?>" target="<?php echo $project_href['target']; ?>"><?php echo $project_name; ?></a>
                </div>

                <?php if($project_href): ?>
                    <button><a href="<?php echo $project_href['url']; ?>" target="<?php echo $project_href['target']; ?>">siteye git</a></button>
                <?php endif; ?>
            </div>
            <!-- project_item -->

        <?php endwhile; ?>

        </div>
        <!-- our_projects -->

        <?php endif; ?>

    </div>
    <!-- container -->

</div>
<!-- our_projects -->

<?php get_template_part( 'templates/info', 'page' ); ?>

<?php get_footer(); ?>
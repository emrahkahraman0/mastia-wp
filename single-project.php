<?php get_header(); ?>

<div id="page_projects_single">

    <div class="container">

        <div class="page_projects_single">

            <div class="page_projects_single_title">
                <?php the_title(); ?>
            </div>
            <!-- page_projects_single_title -->
            <div class="page_projects_single_link">
                <ul>
                    <li><a href="<?php bloginfo('url'); ?>">Home</a></li>
                    <li><span>></span></li>
                    <li><a href="<?php bloginfo('home'); ?>/project">Projects</a></li>
                </ul>
            </div>
            <!-- page_projects_single_link -->

        </div>
        <!-- page_projects_single -->

    </div>
    <!-- container -->

</div>
<!-- page_projects_single# -->

<div id="projects_single">

    <div class="container">

        <div class="projects_single align-item row">

            <?php if (have_posts()) : while(have_posts()) : the_post();
                $siteye_git = get_field("siteye_git");
            ?>

                <div class="projects_single_image col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <?php if(has_post_thumbnail()): ?>
                        <img src="<?php the_post_thumbnail_url('large'); ?>" class="img-fluid">
                    <?php endif; ?>
                </div>
                <!-- projects_single_image -->
                <div class="projects_single_text col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <h6><?php the_title(); ?></h6>
                    <p><?php the_content('', ''); ?></p>

                    <a href="<?php echo $siteye_git['url'];?>" target="<?php echo $siteye_git['target'];?>" class="read_more">
                        <h5>siteye git</h5>
                        <i class="icon-right"></i>
                    </a>
                    <!-- read_more -->

                </div>
                <!-- projects_single_text -->

            <?php endwhile; ?>
            <?php endif; ?>

        </div>
        <!-- projects_single -->

    </div>
    <!-- container -->

</div>
<!-- projects_single# -->

<div id="projects_bottom">

    <div class="container">

        <div class="title">recent projects</div>

        <div class="projects_bottom owl-carousel owl-theme">

            <?php if(have_posts() ) : ?>
                <?php $loop = new WP_Query ( array('post_type' => 'project', 'post__ın' => array() ) ); ?>
                <?php while ($loop->have_posts()) : $loop->the_post(); ?>

                    <div class="projects_bottom_item">
                        <?php if(has_post_thumbnail()): ?>
                            <img src="<?php the_post_thumbnail_url(''); ?>" class="img-fluid">
                        <?php endif; ?>
                        <h6><a href="<?php the_permalink(''); ?>"><?php the_title(); ?></a></h6>
                        <p><?php the_excerpt(); ?></p>
                        <button><a href="<?php the_permalink(''); ?>">read more</a></button>
                    </div>
                    <!-- projects_bottom_item -->

                <?php endwhile; ?>
            <?php endif; ?>

        </div>
        <!-- projects_bottom -->

    </div>
    <!-- container -->

</div>
<!-- projects_bottom# -->

<?php get_footer(); ?>
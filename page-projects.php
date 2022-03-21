<?php 
/*Template Name: Projects Page*/
get_header(); ?>

<div id="page_projects">

    <div class="container">

        <div class="page_projects">

            <div class="page_projects_title">
                <?php the_title(); ?>
            </div>
            <!-- page_projects_title -->
            <div class="page_projects_link">
                <ul>
                    <li><a href="<?php bloginfo('url'); ?>">Home</a></li>
                    <li><span>></span></li>
                    <li><a href="<?php bloginfo('home'); ?>/projects">Projects</a></li>
                </ul>
            </div>
            <!-- page_projects_link -->

        </div>
        <!-- page_projects -->

    </div>
    <!-- container -->

</div>
<!-- page_projects# -->

<?php get_template_part( 'templates/project', 'page' ); ?>

<?php get_template_part( 'templates/info', 'page' ); ?>

<?php get_footer(); ?>
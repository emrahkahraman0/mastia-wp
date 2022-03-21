<?php 
/*Template Name: Teams Page*/
get_header(); ?>

<div id="page_teams">

    <div class="container">

        <div class="page_teams">

            <div class="page_teams_title">
                <?php the_title(); ?>
            </div>
            <!-- page_teams_title -->
            <div class="page_teams_link">
                <ul>
                    <li><a href="<?php bloginfo('url'); ?>">Home</a></li>
                    <li><span>></span></li>
                    <li><a href="#"><?php the_title(); ?></a></li>
                </ul>
            </div>
            <!-- page_teams_link -->

        </div>
        <!-- page_teams -->

    </div>
    <!-- container -->

</div>
<!-- page_teams# -->

<?php get_template_part( 'templates/team', 'page' ); ?>

<?php get_template_part( 'templates/info', 'page' ); ?>

<?php get_footer(); ?>
<?php 
/*Template Name: Services Page*/
get_header(); ?>

<div id="page_services">

    <div class="container">

        <div class="page_services">

            <div class="page_services_title">
                services
            </div>
            <!-- page_services_title -->
            <div class="page_services_link">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><span>></span></li>
                    <li><a href="#">Services</a></li>
                </ul>
            </div>
            <!-- page_services_link -->

        </div>
        <!-- page_services -->

    </div>
    <!-- container -->

</div>
<!-- page_services# -->

<?php get_template_part( 'templates/service', 'page' ); ?>

<?php get_template_part( 'templates/info', 'page' ); ?>

<?php get_footer(); ?>
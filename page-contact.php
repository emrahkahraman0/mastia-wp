<?php 
/*Template Name: Contact Page*/
get_header(); ?>

<div id="page_contact">

    <div class="container">

        <div class="page_contact">

            <div class="page_contact_title">
                <?php the_title(); ?>
            </div>
            <!-- page_contact_title -->
            <div class="page_contact_link">
                <ul>
                    <li><a href="<?php bloginfo('url'); ?>">Home</a></li>
                    <li><span>></span></li>
                    <li><a href="<?php bloginfo('home'); ?>/contact">Contact Us</a></li>
                </ul>
            </div>
            <!-- page_contact_link -->

        </div>
        <!-- page_contact -->

    </div>
    <!-- container -->

</div>
<!-- page_contact# -->

<?php if ( have_posts() ) : while (have_posts() ) : the_post(); ?>
<div id="our_contact">

    <div class="container">

        <div class="our_contact align-item row">

            <div class="our_contact_info co-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="info_item">
                    <i class="icon-location"></i>
                    <p>Zenform Mah No:15 İskoçya/İtalya</p>
                </div>
                <!-- info_item -->
                <div class="info_item">
                    <i class="icon-phone"></i>
                    <a href="tel:908508886655">0850 888 66 55</a>
                </div>
                <!-- info_item -->
                <div class="info_item">
                    <i class="icon-mail"></i>
                    <a href="mailto:tester00@gmail.com">tester00@gmail.com</a>
                </div>
                <!-- info_item -->
            </div>
            <!-- our_contact_info -->
            <div class="our_contact_form col-xl-6 col-lg-6 col-md-12 col-sm-12">
            	<?php the_content(); ?>
            </div>
            <!-- our_contact_form -->

        </div>
        <!-- our_contact -->

    </div>
    <!-- container -->

</div>
<!-- our_contact# -->
<?php endwhile; else : ?>
    <p><?php esc_html_e('Aradığınız şey bizde yok kardeş!!!!'); ?></p>
<?php endif; ?>

<div id="contact_map">

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6146976.806107894!2d8.223663855457065!3d41.2118863489328!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12d4fe82448dd203%3A0xe22cf55c24635e6f!2zxLB0YWx5YQ!5e0!3m2!1str!2str!4v1643451508533!5m2!1str!2str" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

</div>
<!-- contact_map# -->

<?php get_footer(); ?>
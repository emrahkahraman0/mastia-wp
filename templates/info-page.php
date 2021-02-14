<div id="home_contact">

    <div class="container">

        <div class="home_contact">

        <?php $query = new WP_Query('post_type=information'); ?>
        <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

            <div class="home_contact_text">
                <?php the_field('information_text'); ?>
            </div>
            <!-- home_contact_text -->
            <div class="home_contact_button">
                <button><a href="<?php the_field('information_button_href'); ?>"><?php the_field('information_button'); ?></a></button>
            </div>
            <!-- home_contact_button -->

        <?php endwhile; else : ?>
            <p><?php esc_html_e( 'Sory Whatsap Men' ); ?></p>
        <?php endif; ?>

        </div>
        <!-- home-contact-wrapper -->

    </div>
    <!-- container -->

</div>
<!-- home-contact# -->
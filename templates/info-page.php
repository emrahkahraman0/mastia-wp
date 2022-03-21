<div id="information">

    <div class="container">

        <div class="information">

        <?php $query = new WP_Query('post_type=information'); ?>
        <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

            <div class="information_text">
                <?php the_field('information_text'); ?>
            </div>
            <!-- information_text -->
            <div class="information_button">
                <button><a href="<?php the_field('information_button_href'); ?>"><?php the_field('information_button'); ?></a></button>
            </div>
            <!-- information_button -->

        <?php endwhile; else : ?>
            <p><?php esc_html_e( 'Sory Whatsap Men' ); ?></p>
        <?php endif; ?>

        </div>
        <!-- information -->

    </div>
    <!-- container -->

</div>
<!-- information# -->
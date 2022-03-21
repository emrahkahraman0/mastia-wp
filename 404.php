<?php get_header(); ?>

<div id="error">

    <div class="error_center">

        <h5><?php _e( 'Page Not Found', 'twentytwenty' ); ?></h5>
        <h6><?php _e( 'The page you were looking for could not be found. It might have been removed, renamed, or did not exist in the first place.' ); ?></h6>

        <?php
        get_search_form(
            array(
                'aria_label' => __( '404 not found' ),
            )
        );
        ?>

    </div>
    <!-- error_center -->

</div>
<!-- error# -->
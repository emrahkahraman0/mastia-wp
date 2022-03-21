<div id="our_teams">

    <div class="container">

        <div class="our_teams row">

            <?php $query = new WP_Query('post_type=team'); ?>
            <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
                $facebook_href = get_field("facebook_href");
                $twitter_href = get_field("twitter_href");
                $instagram_href = get_field("instagram_href");
                $mail_href = get_field("mail_href");
            ?>

                <div class="our_teams_item col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <?php if(has_post_thumbnail()): ?>
                        <img src="<?php the_post_thumbnail_url(''); ?>" class="img-fluid">
                    <?php endif; ?>
                    <h6><a href="<?php the_permalink(''); ?>"><?php the_title(); ?></a></h6>
                    <h5><?php the_field('team_job') ?></h5>
                    <p><?php the_excerpt(); ?></p>
                    <ul class="social">
                        <li>
                            <a href="<?php echo $facebook_href['url'];?>" target="<?php echo $facebook_href['target'];?>"><i class="icon-facebook"></i></a>
                        </li>
                        <li>
                            <a href="<?php echo $twitter_href['url'];?>" target="<?php echo $twitter_href['target'];?>"><i class="icon-twitter"></i></a>
                        </li>
                        <li>
                            <a href="<?php echo $instagram_href['url'];?>" target="<?php echo $instagram_href['target'];?>"><i class="icon-instagram"></i></a>
                        </li>
                        <li>
                            <a href="<?php echo $mail_href['url'];?>" target="<?php echo $mail_href['target'];?>"><i class="icon-mail"></i></a>
                        </li>
                    </ul>
                    <!-- social -->
                    <button><a href="<?php the_permalink(''); ?>">read more</a></button>
                </div>
                <!-- our_teams_item -->

            <?php endwhile; else : ?>
                <p><?php esc_html_e( 'Sory Whatsap Men' ); ?></p>
            <?php endif; ?>

        </div>
        <!-- our_teams -->

    </div>
    <!-- container -->

</div>
<!-- our_teams# -->
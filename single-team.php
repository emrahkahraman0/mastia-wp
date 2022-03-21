<?php get_header(); ?>

<div id="page_teams_single">

    <div class="container">

        <div class="page_teams_single">

            <div class="page_teams_single_title">
                <?php the_title(); ?>
            </div>
            <!-- page_teams_single_title -->
            <div class="page_teams_single_link">
                <ul>
                    <li><a href="<?php bloginfo('url'); ?>">Home</a></li>
                    <li><span>></span></li>
                    <li><a href="<?php bloginfo('home'); ?>/teams">Teams</a></li>
                </ul>
            </div>
            <!-- page_teams_single_link -->

        </div>
        <!-- page_teams_single -->

    </div>
    <!-- container -->

</div>
<!-- page_teams_single# -->

<div id="teams_single">

    <div class="container">

        <div class="teams_single align-item row">

            <?php if (have_posts()) : while(have_posts()) : the_post();
                $facebook_href = get_field("facebook_href");
                $twitter_href = get_field("twitter_href");
                $instagram_href = get_field("instagram_href");
                $mail_href = get_field("mail_href");
            ?>

                <div class="teams_single_image col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <?php if(has_post_thumbnail()): ?>
                        <img src="<?php the_post_thumbnail_url('large'); ?>" class="img-fluid">
                    <?php endif; ?>
                </div>
                <!-- teams_single_image -->
                <div class="teams_single_text col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <h6><?php the_title(); ?></h6>
                    <h5><?php the_field('team_job') ?></h5>
                    <p><?php the_content('', ''); ?></p>
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
                </div>
                <!-- teams_single_text -->

            <?php endwhile; ?>
            <?php endif; ?>

        </div>
        <!-- teams_single -->

    </div>
    <!-- container -->

</div>
<!-- teams_single# -->

<div id="teams_bottom">

    <div class="container">

        <div class="title">recent teams</div>

        <div class="teams_bottom owl-carousel owl-theme">

            <?php if(have_posts() ) : ?>
                <?php $loop = new WP_Query ( array('post_type' => 'team', 'post__ın' => array() ) ); ?>
                <?php while ($loop->have_posts()) : $loop->the_post();
                    $facebook_href = get_field("facebook_href");
                    $twitter_href = get_field("twitter_href");
                    $instagram_href = get_field("instagram_href");
                    $mail_href = get_field("mail_href");
                ?>

                    <div class="teams_bottom_item">
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
                    <!-- teams_bottom_item -->

                <?php endwhile; ?>
            <?php endif; ?>

        </div>
        <!-- teams_bottom -->

    </div>
    <!-- container -->

</div>
<!-- teams_bottom# -->

<?php get_footer(); ?>

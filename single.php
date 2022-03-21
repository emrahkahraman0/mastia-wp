<?php get_header(); ?>

<div id="page_blog_single">

    <div class="container">

        <div class="page_blog_single">

            <div class="page_blog_single_title">
                <?php the_title(); ?>
            </div>
            <!-- page_blog_single_title -->
            <div class="page_blog_single_link">
                <ul>
                    <li><a href="<?php bloginfo('url'); ?>">Home</a></li>
                    <li><span>></span></li>
                    <li><a href="<?php bloginfo('home'); ?>/blog">Blog</a></li>
                </ul>
            </div>
            <!-- page_blog_single_link -->

        </div>
        <!-- page_blog_single -->

    </div>
    <!-- container -->

</div>
<!-- page_blog_single# -->

<div id="our_blog">

    <div class="container">

        <div class="our_blog row">

            <div class="our_blog_article col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">

                <?php while ( have_posts() ) : the_post(); ?>

                    <div class="post_single">

                        <?php if(has_post_thumbnail()): ?>
                            <img src="<?php the_post_thumbnail_url('large'); ?>" class="img-fluid">
                        <?php endif; ?>

                        <div class="category"><a href="#"><?php the_category(', ') ?></a></div>
                        <h6><?php the_title(); ?></h6>
                        <div class="blog_desc">
                            <div class="date">
                                <i class="icon-calendar"></i><span><?php the_time("F j Y"); ?> </span>
                            </div>
                            <div class="author">
                                <i class="icon-user"></i><span><?php the_author(''); ?></span>
                            </div>
                            <div class="comments">
                                <i class="icon-comment"></i><span><?php comments_number('Yorum Yok', '1 Yorum ', '% Yorum' );?></span>
                            </div>
                        </div>
                        <!-- blog_desc -->
                        <p><?php the_content('', ''); ?></p>

                        <?php comments_template(); ?>

                    </div>
                    <!-- post_single -->

                <?php endwhile;?>

            </div>
            <!-- our_blog_article -->

            <?php get_sidebar(); ?>

        </div>
        <!-- our_blog -->

    </div>
    <!-- container -->

</div>
<!-- our_blog# -->

<?php get_footer(); ?>
